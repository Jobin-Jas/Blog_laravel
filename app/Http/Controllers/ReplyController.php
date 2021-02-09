<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;

class ReplyController extends Controller
{
    public function create(Comment $comment, CreateCommentRequest $request)
    {
        $reply = auth()->user()->comments()->create($request->all());
        $comment->replies()->save($reply);
        return $this->successResponse($reply);
    }

    public function update(Comment $comment, Comment $reply, UpdateCommentRequest $request)
    {
        $reply->update($request->all());
        return $this->successResponse($reply);
    }

    public function destroy(Comment $comment, Comment $reply)
    {
        $reply->delete();
        return response()->json([
            'status' => 'ok',
            'message' => 'reply deleted successfully'
        ]);
    }
}

