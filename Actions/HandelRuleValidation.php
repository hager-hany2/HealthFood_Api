<?php

namespace App\Actions;

use App\Models\language;
use Illuminate\Support\Str;

class HandelRuleValidation
{
    public static function handle($basic,$data_lang)
    {
//       $langs=language::query()->select('prefix')
//           ->get()->map(function ($e){
//           return $e->prefix;
//       });

      $langs=language::query()->pluck('prefix');
     // dd($basic,$data_lang);
      foreach ($langs as $lang){
          foreach ($data_lang as $item){
              $name=Str::before($item,":");
              $validation=Str::after($item,":");
              $basic[$lang.'_'.$name]=$validation;

        }
    }
     // dd($basic);
      return $basic;
    }

}
