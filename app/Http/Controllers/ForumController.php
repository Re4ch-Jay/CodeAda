<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function index(){
        $forums = Forum::latest()->get();
        return view('forum.index', [
            'forums' => $forums,
        ]);
    }

    public function show(){
        return view('forum.show');
    }

    public function create(){
        return view('forum.create');
    }

    public function store(Request $request) {
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
