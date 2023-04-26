<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GithubSignInController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $githubUser = Socialite::driver('github')->user();

        $existingUser = User::where('email', $githubUser->email)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $user = User::updateOrCreate(
                [
                    'github_id' => $githubUser->id,
                ],
                [
                    'name' => $githubUser->name,
                    'email' => $githubUser->email,
                    'avatar' => $githubUser->avatar,
                    'github_token' => $githubUser->token,
                    'github_refresh_token' => $githubUser->refreshToken,
                ]
            );

            Auth::login($user);
        }

        return redirect('/forums')->with('message', "Welcome to the Community Portal.");
    }
}
