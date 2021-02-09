<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\LikeController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
});

Route::get('blog-posts/all', [BlogPostController::class,'index']);

Route::group([
    'middleware' => ['api', 'auth'],
    'prefix' => 'blog-posts'
], function () {
    Route::get('/', [BlogPostController::class, 'userIndex']);
    Route::post('/', [BlogPostController::class, 'store']);
    Route::get('/{blogPost}', [BlogPostController::class, 'show']);
    Route::put('/{blogPost}', [BlogPostController::class, 'update']);
    Route::delete('/{blogPost}', [BlogPostController::class, 'destroy']);

});



Route::group([
    'prefix' => 'users'
], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{user}', [UserController::class, 'show']);
    Route::put('/{user}', [UserController::class, 'update']);
    Route::delete('/{user}', [UserController::class, 'destroy']);
});

Route::group([
    'middleware' => ['api', 'auth'],
    'prefix' => 'blog-posts/{blogPost}/comments'
], function () {
    Route::get('/', [CommentController::class, 'index']);
    Route::post('/', [CommentController::class, 'create']);
    Route::get('/{comment}', [CommentController::class, 'show']);
    Route::put('/{comment}', [CommentController::class, 'update']);
    Route::delete('/{comment}', [CommentController::class, 'destroy']);
});

Route::group([
    'middleware' => ['api', 'auth'],
    'prefix' => 'comments/{comment}/replies'
], function () {
    Route::post('/', [ReplyController::class, 'create']);
    Route::put('/{reply}', [ReplyController::class, 'update']);
    Route::delete('/{reply}', [ReplyController::class, 'destroy']);
});

Route::group([
    'middleware' => ['api', 'auth'],
    'prefix' => 'like'
], function () {
    Route::post('/blog-posts/{blogPost}', [LikeController::class, 'likeBlogPost']);
    Route::post('/comments/{comment}', [LikeController::class, 'likeComment']);
    Route::delete('/blog-posts/{blogPost}', [LikeController::class, 'unlikeBlogPost']);
    Route::delete('/comments/{comment}', [LikeController::class, 'unlikeComment']);
});
