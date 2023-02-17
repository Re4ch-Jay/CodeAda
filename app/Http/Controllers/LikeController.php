<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request, Forum $forum)
    {

        if ($forum->likedBy($request->user())) {
            return response(null, 409);
        }

        $forum->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }

    public function destroy(Forum $forum, Request $request)
    {
        $request->user()->likes()->where('forum_id', $forum->id)->delete();

        return back();
    }
}
