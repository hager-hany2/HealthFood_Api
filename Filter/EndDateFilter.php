<?php

namespace App\Filter;
use Closure;
class EndDateFilter
{
    public function handle($requset ,Closure $next)
    {
        if (request()->filled('end_date')){
            return $next($requset)->where('created_at','<=', request('end_date'));
        }
        return $next($requset);
    }
}
