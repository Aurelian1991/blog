<?php

namespace App\Http\Middleware;

use Closure;

class PictureUpload
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
        if($this->isPost($request)){
            
        }
        return $next($request);
    }
    protected function isPost($request){
        return $request&&$request->method()==="POST";
    }
}
