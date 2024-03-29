<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // run php artisan storage:link
        $request->user()->fill($request->validated());

        $path="";

        if($request->hasFile("avatar")) {
            $path = $request->file("avatar")->store('avatars', 'public');       
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        if($path) {
            $request->user()->update([
                'name' => $request->name,
                'email' => $request->email,
                'avatar' => $path,
            ]);    
        } else {
            $request->user()->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);  
        }
        
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
