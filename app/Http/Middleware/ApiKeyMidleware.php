<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyMidleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->header("api_key") !== env("API_KEY_FE")) {
            return response()->json([
                "message" => "api key not valid. please pass a valid api key"
            ], 400);
        }

        return $next($request);
    }
}
