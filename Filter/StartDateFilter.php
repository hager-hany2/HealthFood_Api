<?php

namespace App\Filter;
use Closure;
class StartDateFilter
{
    public function handle($requset ,Closure $next)
    {
        if (request()->filled('start_date')){
            return $next($requset)->where('created_at','>=',request('start_data'));
        }
        return $next($requset);
    }
}
