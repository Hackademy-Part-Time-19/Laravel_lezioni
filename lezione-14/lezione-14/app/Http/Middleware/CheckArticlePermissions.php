<?php

namespace App\Http\Middleware;

use App\Models\Article;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckArticlePermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   
        if(auth()->user()->id == Article::find($request->route()->parameter('article'))->user_id){
            return $next($request);
        }
        
        return redirect()->back()->with(['denied'=>'Non hai il permesso per effettuare questa operazione']);
    }
}
