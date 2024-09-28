<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFromRegister;
use App\Reporisitaires\Auth\RegisterReporisty;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __construct(RegisterReporisty $repo)
    {
        $this->repo=$repo;
    }

    public function __invoke(UserFromRegister $request)
    {
        ////        return $request->validated();
        ////        $data=$request->validated();
        ////        return $data;
                return $this->repo->create_user($request->validated());
    }
}
