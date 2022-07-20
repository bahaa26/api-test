<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApisEx
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->header('key') == config('app.api.key')) {
            return response()->json('UnAuthoraized',401);
        } elseif (!$request->header('MrAli-Api') == 'ali-abou-motta') {
            return response()->json('UnAuthoraized',401);
        } elseif (!$request->route('key') == 'fasfjkjsdf5ds6f56s5df6') {
            return response()->json('UnAuthoraized',401);
        }
        return $next($request);
    }
}
