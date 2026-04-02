<?php

namespace App\Helpers;

class ResponseHelper
{
    public static function success($data = null, $message = "success", $status = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], $status);
    }

    public static function error($message = "error", $errors = null, $status = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'errors' => $errors
        ], $status);
    }
}
