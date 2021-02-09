<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogPostRequest;
use App\Models\BlogPost;


 /**
     * @group Blog Post management
     *
     * APIs for managing Blog Posts
     */

class BlogPostController extends Controller
{   /**
    * View All Blog Posts .
    *
    * This endpoint allows you to view all Blog Posts with number of likes and Comments.
    * @authenticated
    */
    public function index()
    {
        // $data = BlogPost::withCount('comments');
        // return $this->successResponse($data);
        return response()->json(
            BlogPost::withCount('likes')
                ->withCount('comments')
                ->get()          
        );
    }
    /**
     * View user BlogPosts.
     *
     * This endpoint allows you to view all Posts By a User.
     * @authenticated
     */
    public function userIndex()
    {
        
        return response()->json(auth()->user()->with(['blogPosts.comments'])->get());
    }
    /**
	 * Create a New Blog Post.
     * This endpoint lets you create a New Post.
     * 
    * @bodyParam title string required The title of the Post. Example: Title 1
    * @bodyParam body string required The body of the Post.
    *@bodyParam image image  Blog Post Image.
    * 
    */
    public function store(CreateBlogPostRequest $request)
    {
        $data = $request->only(['title', 'body']);
        $data['image']=$this->storeImage($request, 'image' ,'blogs');
        $user  = auth()->user();
        $blog_post = $user->blogPosts()->create($data);
        return $this->successResponse($blog_post);
    }
    /**
     * View  BlogPost.
     *
     * This endpoint allows you to view a Specific Post by its Id.
     * @urlParam blogPost integer required The id of the Post. Example: 1
     * @authenticated
     */
    public function show(BlogPost $blogPost)
    {
        return $this->successResponse($blogPost->comments);
        // return response()->json($blogPost->with('comments'));
    }
/**
	 * Update Blog Post.
     * This endpoint lets you update blog Post by Its Id
     * @authenticated
     * 
    * @urlParam blogPost integer required The id of the Post. Example: 1
    * @bodyParam title string required The title of the Post. Example: Title 1
    * @bodyParam body string required The body of the Post.
    *@bodyParam image image  Blog Post Image.
    */
    public function update(BlogPost $blogPost, CreateBlogPostRequest $request)
    {
        if (!$this->checkAuthorization($blogPost->user_id)) {
            return $this->errorResponse(["message" => 'forbidden'], 403);
        }

        $data = $request->only(['title', 'body']);
        $data['image']=$this->storeImage($request, 'image' ,'blogs');
        $blogPost->update($data);
        return $this->successResponse($blogPost);
    }
 /**
	 * Delete Blog Post.
     * This endpoint lets you Delete Blog Post by its Id
     * @authenticated
     * 
    * @urlParam blogPost integer required The id of the Post. Example: 1
    */
    public function destroy(BlogPost $blogPost)
    {
        if(!$this->checkAuthorization($blogPost->user_id)){
            return $this->errorResponse(["message" => 'forbidden'], 403);
        }

        $blogPost->delete();
        return $this->successResponse(
            ["message" => "deleted successfully"]
        );
    }

    private function checkAuthorization($id)
    {
        return $id === auth()->user()->id;
    }

    
}
