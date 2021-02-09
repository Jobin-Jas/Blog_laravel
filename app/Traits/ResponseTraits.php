<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait ResponseTraits
{
    protected function successResponse($data, $status_code = 200)
    {
        return response()->json($data, $status_code);
    }

    protected function errorResponse($data, $status_code = 400)
    {
        return response()->json($data, $status_code);
    }
}