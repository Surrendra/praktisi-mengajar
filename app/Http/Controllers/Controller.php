<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function responseSuccess($data = null,$message = 'Success',$status_code = 200)
    {
        return response()->json([
            'status_code' => $status_code,
            'message' => $message,
            'data' => $data
        ], $status_code);
        
    }
}
