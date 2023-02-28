<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request, Forum $forum)
    {
        /**
         * TODO:
         * validate
         * get forum id by route model binding
         * save
         */

        $this->validate($request, [
            'comment' => 'required',
        ]);

        $request->user()->comments()->create([
            'comment' => $request->comment,
            'forum_id' => $forum->id,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('comment.edit', ['comment' => $comment]);
    }


    public function update(Request $request, Comment $comment)
    {

        $this->validate($request, [
            'comment' => 'required',
        ]);

        if ($comment->ownedBy(auth()->user())) {
            $comment->update([
                'comment' => $request->comment,
            ]);
        }

        return redirect("/forums");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment, Request $request)
    {

        //dd($comment->ownedBy(auth()->user()));

        // dd($request->user()->comments()->where('comment_id', $comment->id));
        $request->user()->comments()->where('id', $comment->id)->delete();

        // if ($comment->ownedBy(auth()->user())) {
        //     $comment->delete();
        // }

        return back();
    }
}
