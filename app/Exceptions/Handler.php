<?php


namespace App\Exceptions;
use App\Traits\ResponseTraits;
use App\Http\Responses\ErrorMessage;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Validation\UnauthorizedException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use JWTAuth;

use Throwable;
use Illuminate\Support\Arr;

class Handler extends ExceptionHandler
{
    use ResponseTraits;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */

      public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            return response()->json([
                'errors' => Arr::collapse($exception->errors())
            ], 422);
            // return $this->errorResponse($exception->errors());
        }

        if ($exception instanceof UnauthorizedException) {
            return response()->json(["status" => "failed","success" => false, 
            "message" => "Unauthorized"],401);
        }

        if ($exception instanceof ModelNotFoundException) {
            return response()->json(["status" => "failed","success" => false, 
            "message" => " Entity Not Found"],400);
        }

        if ($exception instanceof NotFoundHttpException) {
            return response()->json(["status" => "failed","success" => false, 
            "message" => "Not Found"],400);
        }

        if ($exception instanceof RouteNotFoundException) {
            return response()->json(["status" => "failed","success" => false, 
            "message" => "Bad Request"],400);
        }

        if ($exception instanceof TokenExpiredException) {
            return response()->json(["status" => "failed","success" => false, 
            "message" => "Token Expired."],401);
        }
        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->json(["status" => "failed","success" => false, 
            "message" => "Method is Not Allowed."],405);
        }

        return parent::render($request, $exception);
    }
}