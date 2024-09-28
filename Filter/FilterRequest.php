<?php

namespace App\Filter;
use Closure;
use Illuminate\Support\Str;

class FilterRequest
{
    public function handle($requset ,Closure $next)
    {
        $filter=class_basename($this);//SubjectIdFilter

        $filter=str_replace('Filter','',$filter);

        $filter=Str::snake($filter);
       // dd($filter,request($filter));
        if (request()->filled($filter)){
            return $next($requset)->where($filter,request($filter));
        }
        return  $next($requset);
    }
}
