<?php

namespace App\Http\Resources;

use App\Actions\DisplayDataWithCurentLang;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GovermentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $arr=[
            'id'=>$this->id,
            'name' => $this->name,
            'info' => $this->info,
            'created_at'=>$this->created_at->format('Y-m-d H:i:s'),
            ];
        if (request()->hasHeader('lang')&& request()->header('lang') !='all'){
            $arr['name'] = DisplayDataWithCurentLang::display($this->name);
            $arr ['info'] = DisplayDataWithCurentLang::display($this->info);
        }

        return $arr;
    }
}
