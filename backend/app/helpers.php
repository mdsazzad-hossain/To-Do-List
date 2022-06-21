<?php

/**
 * Response the result of API
 *
 * @param string $message
 * @param int $statusCode
 * @param mixed $data
 * @return array
 */
if (!function_exists('apiResponse')) {
    function apiResponse($message = null, $statusCode = 200, $data = null)
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }
}
