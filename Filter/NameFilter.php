<?php

namespace App\Filter;
use Closure;
class NameFilter
{
    public function handle($requset ,Closure $next)
    {
        if (request()->filled('name')){
            return $next($requset)->where('name','LIKE','%'.request('name').'%');
        }
        return $next($requset);
    }
}
