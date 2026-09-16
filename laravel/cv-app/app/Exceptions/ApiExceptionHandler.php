<?php

namespace App\Exceptions;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;
use TypeError;

class ApiExceptionHandler extends Handler
{
    public function render($request, Throwable $e)
    {
        $apiRoute = "api/";
        $request->header('Content-Type', 'application/json');
        if ((str_contains($e->getMessage(), $apiRoute) or str_contains($request->fullUrl(), $apiRoute))){
            if ($e instanceof HttpExceptionInterface) {
                $message = $e->getMessage();
                return response()->json(["data" => ["message" => $message]], $e->getStatusCode());
            }
            if ($e instanceof ModelNotFoundException) {
                return response()->json(["data" => ["message" => 'Resource not found']], 404);
            }
            if ($e instanceof AuthorizationException) {
                $logID = Str::ulid();
                Log::error("$logID: " . get_class($e) . "-" . $e->getMessage() . "in" . $e->getFile() . ", line: " . $e->getLine() . ",trace: " . $e->getTraceAsString());
                return response()->json(["data" => ["message" => 'Unauthorized', "log_id" => $logID]], 403);
            }
            if ($e instanceof AuthenticationException) {
                $logID = Str::ulid();
                Log::error("$logID: " . get_class($e) . "-" . $e->getMessage() . "in" . $e->getFile() . ", line: " . $e->getLine() . ",trace: " . $e->getTraceAsString());
                return response()->json(["data" => ["message" => 'Unauthenticated', "log_id" => $logID]], 401);
            }
            if ($e instanceof ValidationException) {
                $errors = $e->validator->errors();
                $logID = Str::ulid();
                Log::error("$logID: " . get_class($e) . "-" . $e->getMessage() . "in" . $e->getFile() . ", line: " . $e->getLine() . ",trace: " . $e->getTraceAsString());
                return response()->json(["data" => ["message" => 'Bad Request, Invalid input', 'errors' => $errors]], 400);
            }
            if ($e instanceof TokenMismatchException) {
                $logID = Str::ulid();
                Log::error("$logID: " . get_class($e) . "-" . $e->getMessage() . "in" . $e->getFile() . ", line: " . $e->getLine() . ",trace: " . $e->getTraceAsString());
                return response()->json(["data" => ["message" => 'Bad Request, ' . $e->getMessage()]], 400);
            }
            if ($e instanceof TypeError) {
                $logID = Str::ulid();
                Log::error("$logID: " . get_class($e) . "-" . $e->getMessage() . "in" . $e->getFile() . ", line: " . $e->getLine() . ",trace: " . $e->getTraceAsString());
                return response()->json(["data" => ["message" => 'Bad Request', "log_id" => $logID]], 400);
            }
            $logID = Str::ulid();
            Log::error("$logID: ". get_class($e) . "-" . $e->getMessage() . "in" . $e->getFile() . ", line: " . $e->getLine() . ",trace: " .  $e->getTraceAsString());
            return response()->json(["data" => ["message" => "Server error.", "log_id" => $logID]], 500);
        }
        return parent::render($request, $e);
    }

    public function handle($request, Closure $next)
    {
        try {
            return $next($request);
        } catch (Throwable $e) {
            return $this->render($request, $e);
        }
    }
}
