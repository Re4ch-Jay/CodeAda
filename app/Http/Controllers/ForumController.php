<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Forum;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index(Request $request)
    {

        $forums = Forum::latest()->filter(request(['tag', 'user', 'search', 'filter']))->paginate(7);
        $users = User::all();
        $search = $request->search;

        return view('forum.index', [
            'forums' => $forums,
            'users' => $users,
            "search" => $search,
        ]);
    }

    public function oldest()
    {

        $forums = Forum::oldest()->filter(request(['tag', 'user', 'search', 'filter']))->paginate(7);
        $users = User::all();
        return view('forum.index', [
            'forums' => $forums,
            "users" => $users
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
            'markdown' => 'required',
            'tag' => 'required'
        ]);

        $request->user()->forums()->create([
            'title' => $request->title,
            'description' => $request->description,
            'markdown' => $request->markdown,
            'tag' => $request->tag
        ]);

        return redirect('/forums')->with('message', 'Wooohooo!!! Forums shared successfully!');
    }

    public function edit(Forum $forum)
    {
        return view('forum.edit', ['forum' => $forum]);
    }

    public function update(Request $request, Forum $forum)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'markdown' => 'required',
            'tag' => 'required'
        ]);

        if ($forum->ownedBy(auth()->user())) {

            $forum->update([
                'title' => $request->title,
                'description' => $request->description,
                'markdown' => $request->markdown,
                'tag' => $request->tag
            ]);
        } else {
            abort(401);
        }

        return redirect("/forums")->with('message', 'Wooohooo!!! Forums edited successfully!');
    }

    public function destroy(Forum $forum)
    {
        if ($forum->ownedBy(auth()->user())) {
            $forum->delete();
        } else {
            abort(401);
        }
        return redirect('/forums')->with('message', 'Wooohooo!!! Forums deleted successfully!');
    }
}
