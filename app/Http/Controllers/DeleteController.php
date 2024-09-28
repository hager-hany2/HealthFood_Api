<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteFormRequest;
use App\Models\images;
use App\services\Message;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    public function __invoke(DeleteFormRequest $request)
    {
      //  dd(app()->getLocale());
        if (request('model_name')=='images'){
            $image=images::query()->find(request('id'));
            $image->delete();
            DeleteFormRequest::delete('images',$image->name);
        }else{
            $item=('App\Models\\'.request('model_name'))::query()->find(request('id'));
            if ($item){
                $item->delete();

            }
        }
        return Message::success('',__('Messages.deleted_success'));

    }
}
