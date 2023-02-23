<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {

        $forums = Forum::latest()->filter(request(['tag', 'user', 'search', 'filter']))->paginate(7);

        return view('forum.index', [
            'forums' => $forums,
        ]);
    }

    public function oldest()
    {

        $forums = Forum::oldest()->filter(request(['tag', 'user', 'search', 'filter']))->paginate(7);

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
            'body' => 'required',
            'tag' => 'required'
        ]);

        $request->user()->forums()->create([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'tag' => $request->tag
        ]);

        return redirect('/forums');
    }

    public function edit(Forum $forum)
    {
        //dd($forum->description);
        return view('forum.edit', ['forum' => $forum]);
    }

    public function update(Request $request, Forum $forum)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'body' => 'required',
            'tag' => 'required'
        ]);

        if ($forum->ownedBy(auth()->user())) {

            $forum->update([
                'title' => $request->title,
                'description' => $request->description,
                'body' => $request->body,
                'tag' => $request->tag
            ]);
        }

        return redirect("/forums");
    }

    public function destroy(Forum $forum)
    {

        if ($forum->ownedBy(auth()->user())) {
            $forum->delete();
        }
        return redirect('/forums');
    }
}
