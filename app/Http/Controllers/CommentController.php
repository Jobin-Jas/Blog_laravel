<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\BlogPost;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use CreateCommentsTable;
/**
     * @group Comment management
     *
     * APIs for managing Comments
     */

class CommentController extends Controller
{    /**
    * View All Comments of a Posts .
    *
    * This endpoint allows you to view all Comments of a Post.
    * @urlParam blogPost integer required The id of the Post. Example: 1
    * @authenticated
    */
    public function index(BlogPost $blogPost)
    {
        return response()->json($blogPost->commentsWithReplies);
    }
 /**
	 * Create a New Comment .
     * This endpoint lets you create a comment.
     * 
    * @urlParam blogPost integer required The id of the Post. Example: 1
    * @bodyParam comment string  Comment.
    * 
    */
    public function create(BlogPost $blogPost, CreateCommentRequest $request)
    {
        $comment = auth()->user()->comments()->create($request->all());
        $blogPost->comments()->save($comment);
        return $this->successResponse($comment);
    }
    /**
	 * Update Comment .
     * This endpoint lets you to Update Comment.
     * 
    * @urlParam blogPost integer required The id of the Post. Example: 1
    * @urlParam comment integer required The id of the comment. Example: 1
    * 
    * 
    */
    public function update(BlogPost $blogPost, Comment $comment, UpdateCommentRequest $request)
    {
        $comment->update($request->all());
        return $this->successResponse($comment);
    }
/**
	 * View Comment .
     * This endpoint lets you to View Comment.
     * 
    * @urlParam blogPost integer required The id of the Post. Example: 1
    * @urlParam comment integer required The id of the comment. Example: 1
    * 
    * 
    */
    public function show(BlogPost $blogPost, Comment $comment)
    {
        
        return $this->successResponse($comment);
    }
    /**
	 * Delete Comment .
     * This endpoint lets you to Delete Comment.
     * 
    * @urlParam blogPost integer required The id of the Post. Example: 1
    * @urlParam comment integer required The id of the comment. Example: 1
    * 
    * 
    */
    public function destroy(BlogPost $blogPost, Comment $comment)
    {
        
        $comment->delete();
        return response()->json(['message' => 'comment deleted successfully']);
    }

    


}
