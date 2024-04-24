<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $comments = Comment::all();
        $comments = json_decode($comments, true);

        $verified = $request["verified"];

        if( $verified !== null ) {
            if ($verified) {
                $comments = array_filter($comments, function ($comment) {
                    return $comment["verified"] != 0;
                });
            } else {
                $comments = array_filter($comments, function ($comment) {
                    return $comment["verified"] == 0;
                });
            }
        }
        return response()->json($comments, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'content' => 'required'
        ]);

        $comment = new Comment([
            'product_id' => $validatedData['product'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'content' => $validatedData['content'],
        ]);

        $comment->save();

        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $comment = Comment::find( $request['comment_id'] );
        $comment->verified = 1;
        $comment->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $comment = Comment::find( $request['comment_id'] );
        $comment->delete();
        return redirect()->back();
    }
}
