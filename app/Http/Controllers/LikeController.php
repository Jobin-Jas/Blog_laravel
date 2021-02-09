<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Comment;
use Exception;

class LikeController extends Controller
{   
     private $user;

    public function __construct()
    {
        $this->user = auth()->user();
    }

    public function likeBlogPost(BlogPost $blogPost){
        try {
            $blogPost->likes()->create([
                'user_id' => $this->user->id
            ]);
        } 
        catch (Exception  $e) {
            $blogPost->likes()->where('user_id',auth()->user()->id)->delete();
            return response()->json(['message' => 'Disliked']);
        }
        return response()->json(['message' => 'blogPost liked']);
    }

    public function unlikeBlogPost(BlogPost $blogPost){
         $blogPost->likes()->where('user_id', auth()->user()->id)->delete();
         return response()->json(['message' => 'blogPost disliked']);   
    }

    public function likeComment(Comment $comment){
        try {
            $comment->likes()->create([
                'user_id' => $this->user->id
            ]);
        } 
        catch (Exception  $e) {
            $comment->likes()->where('user_id',auth()->user()->id)->delete();
            return response()->json(['message' => 'Disliked']);
        }
        return response()->json(['message' => 'comment liked']);
    }

    public function unlikeComment(Comment $comment){
        $comment->likes()->where('user_id', auth()->user()->id)->delete();
        return response()->json(['message' => 'comment disliked']);   
    }
}
