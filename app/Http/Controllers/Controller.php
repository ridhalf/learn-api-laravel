<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function respondError($message, $code)
    {
        return response()->json(['metadata' => ['message' => $message, 'code' => $code]], $code);
    }
}
