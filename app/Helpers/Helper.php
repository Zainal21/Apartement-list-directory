<?php

namespace App\Helpers;

class Helper
{
    protected static $response = [
        'code' => 200,
        'success' => true,
        'message' => null,
        'results' => null
    ];

    public static function success($data = null, $message = null, $code = 200)
    {
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        self::$response['results'] = $data;
        return response()->json(self::$response, $code);
    }

    public static function error($data = null, $message = null, $code = 400)
    {
        self::$response['success'] = false;
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        self::$response['results'] = $data;
        return response()->json(self::$response, $code);
    }
}