<?php

namespace App\Reporisitaires\Auth;

use App\Models\User;
use App\services\Message;

class RegisterReporisty
{
   public function create_user($data)
   {
       if(!(isset($data['password']))){
           $data['password']=rand(0.9999);
       }
       User::query()->create($data);
       return Message::success([],'user created succefully');
   }
}
