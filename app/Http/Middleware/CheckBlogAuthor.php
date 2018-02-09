<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckBlogAuthor
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
        if (Auth::check()) {
            $user= Auth::user();
            if(empty($user->blog_id)){
		 if(strtolower($request->path())== 'blog/applyform'|strtolower($request->path())== 'blog/apply'){
                    return $next($request);
                }
                return  redirect(url('blog/applyform'));
                // abort(403, '您不是专栏作者,无权访问该页面!');//后期跳到申请专栏
            }
        }else{
            return redirect(url('/'));
        }
        return $next($request);
    }
}
