<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public const MESSAGE_SUCCESS          = 'Success';
    public const MESSAGE_COULD_NOT_DELETE = 'Could not delete';
    public const MESSAGE_COULD_NOT_UPDATE = 'Could not update';
    public const MESSAGE_COULD_NOT_CREATE = 'Could not create';

    public function jsonResponse(string $message, ?int $statusCode = null)
    {
        return response()->json(
            [
                'data' => [
                    'message' => $message,
                ]
            ],
            $statusCode ?? 200
        );
    }
}
