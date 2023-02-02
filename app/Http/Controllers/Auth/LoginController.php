<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function __contruct() {
    //     $this->middleware(["guest"]);
    // }

    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $this->authValidate($request);

        $auth = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(!$auth) {
            return back()->with('status', 'Invalid login details');
        }

        return redirect("/forums");

    }

    public function authValidate($request) {
        $this->validate($request, [
            'email' => 'required|',
            'password' => 'required'
        ]);
        return $this;
    }
}
