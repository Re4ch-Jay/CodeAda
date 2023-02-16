<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function index()
    {
        $forums = Forum::latest()->paginate(5);

        return view('forum.index', [
            'forums' => $forums,
        ]);
    }

    public function show(Forum $forum)
    {
        $forums = Forum::latest()->get();
        return view('forum.show', [
            'forum' => $forum,
            'forums' => $forums,
        ]);
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        /**
         * TODO:
         * validate
         * save
         */


        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'body' => 'required'
        ]);

        Forum::create([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
        ]);


        return redirect('/forums');

        // dd("store");
    }
}
