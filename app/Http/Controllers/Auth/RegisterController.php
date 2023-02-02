<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    // public function __contruct() {
    //     $this->middleware(["guest"]);
    // }

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        /**
         *  TODO:
         * validate
         * store user
         * sign the user in
         * redirect
         */

        $this->authValidate($request);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect("/forums");
    }

    public function authValidate($request) {
        $this->validate($request, [
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' => 'required|email|unique:users',
            'password' => ['required',
                Password::min(6)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ],
            'password_confirmation' => 'required|same:password'
            ], [
            'password' => 'The password must contain numbers and at least one uppercase, one lowercase, and one symbols with minimum 6 characters.'
            ]);
        return $this;
    }
}
