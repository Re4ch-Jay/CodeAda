<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    public function index(){
        return view('forum.index');
    }

    public function show(){
        return view('forum.show');
    }

    public function create(){
        return view('forum.create');
    }
}
