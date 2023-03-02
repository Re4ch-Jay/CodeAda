<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserForumController extends Controller
{
    public function index(User $user)
    {
        $forums = $user->forums()->latest()->paginate(10);
        $careers = $user->careers()->latest()->paginate(10);
        return view("users.forums.index", [
            'user' => $user,
            "forums" =>  $forums,
            "careers" => $careers,
        ]);
    }
}
