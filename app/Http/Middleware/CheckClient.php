<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->has("api_key")) {
          return response()->json([
            'status' => 401,
            'request'=>request()->all(),
            'message' => 'Acceso no autorizado',
        ], 401);
      }

      if ($request->has("api_key")) {
        $user =  User::where('api_key', $request->api_key)->first();

        if ($user) {
            return $next($request);
        }else{
            return response()->json([
              'status' => 401,
              'message' => 'Acceso no autorizado',
          ], 401);
        }

    }


}
}
