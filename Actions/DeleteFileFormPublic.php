<?php

namespace App\Actions;
use App\Http\Controllers\DeleteController;
class DeleteFileFormPublic
{
   public static function delete($folder,$name)
   {

//       $file_path=public_path().'/images/'.$image->name;
       $file_path=public_path($folder.'/'.$name);
       if(file_exists($file_path)){
//           unlink($file_path);
       }
   }
}
