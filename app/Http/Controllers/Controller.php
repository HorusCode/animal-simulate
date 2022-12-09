<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;


abstract class Controller
{
    public function sendResponse($result = [], $message = 'Success!', $status = 200, $error = false) {
        return response()->json([
           'success' => !$error,
           'data' => $result,
           'message' => $message
        ], $status);
    }
}
