<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBrowserBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);

        // if(isset($_COOKIE['token'])) {
        //     //dd($_COOKIE['token']);
        //     return redirect()->to('/');
        // }

        $response = $next($request);
        return $response->header('Cache-Control','no-cache,no-store, max-age=0, must-revalidate')
                    ->header('Pragma','no-cache')
                    ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
