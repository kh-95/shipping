<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;
use App\Models\Permission;

class AdminMiddleware
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

            if (auth()->check() && auth()->user()->user_type == 'admin'){
                return $next($request);
            }else{
                return redirect('login');
                }


    }
}
