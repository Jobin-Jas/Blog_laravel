<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Validator;

   /**
     * @group User management
     *
     * APIs for managing users
     */

class UserController extends Controller
{
     
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['store']]);
    }
   /**
     * View All Users.
     *
     * This endpoint allows you to view all users.
     * @authenticated
     */
    public function index()
    {
        $data = User::all();
        return $this->successResponse($data);
    }
    /**
	 * Create a user.
     * This endpoint lets you create a user.
     * 
    * @bodyParam name string required The name of the user. Example: john
    * @bodyParam phone numeric required The phone number of the user.
    * @bodyParam email email required The email id  of the user. 
    * @bodyParam password password required The password of the user.
    * @bodyParam password_confirmation password required Confirm Password..
    *@bodyParam image image  The profile image  of the user
    * @unauthenticated
    */
    public function store(StoreUserRequest $request)
    {
        $data = $request->only([
            'name', 'phone', 'email', 'password'
        ]);
        $data['image']=$this->storeImage($request, 'image' ,'UserImage');
        $user = User::create($data);
        $token = JWTAuth::fromUser($user);

        return $this->respondWithToken($token);
    }
/**
	 * View User.
     * This endpoint lets you view the user by using their id 
     * @authenticated
     * 
    * @urlParam user integer required The id of the user. Example: 1
    */
    public function show(User $user)
    {
        return $this->successResponse($user);
    }
/**
	 * Update User details.
     * This endpoint lets you update the current autheticated user by using their id 
     * @authenticated
     * 
    * @urlParam user integer required The id of the user. Example: 1
    * @bodyParam name string required The name of the user. Example: john
    * @bodyParam phone numeric required The phone number of the user.
    * @bodyParam email email required The email id  of the user.
    * @bodyParam image image  The profile image  of the user.
    */
    public function update(User $user, UpdateUserRequest $request)
    {
        $data = $request->only(['name', 'phone', 'email']);
        $data['image']=$this->storeImage($request, 'image' ,'UserImage');
        $user->update($data);
        return $this->successResponse($user);
    }
   /**
	 * Delete User.
     * This endpoint lets you Delete the current autheticated user by using their id 
     * @authenticated
     * 
    * @urlParam user integer required The id of the user. Example: 1
    */
    public function destroy(User $user)
    {
        $user->delete();
        return $this->successResponse(
            ["message" => "deleted successfully"]
        );
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
