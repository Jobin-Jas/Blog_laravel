<?php

namespace App\Http\Controllers;
use App\Traits\ResponseTraits;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use ResponseTraits;
    protected function storeImage($request, $paramName, $prefix)
    {
        if ($request->hasFile($paramName)) {
            $image = $request->file($paramName);
            $fileName = time() . "." . $image->extension();
            $image->move(public_path($prefix), $fileName);
            return $prefix . "/" . $fileName;
        }

        return null;
    }
}
