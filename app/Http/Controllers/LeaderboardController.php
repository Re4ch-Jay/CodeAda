<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Forum;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index(User $user)
    {
        $forums = $user->forums()->latest()->paginate(10);
        $careers = $user->careers()->latest()->paginate(10);

        $users = User::all();

        return view("leaderboard.index", [
            'users' => $users,
            "forums" =>  $forums,
            "careers" => $careers,
        ]);
    }
}
