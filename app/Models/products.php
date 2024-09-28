<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'price',
        'description',
        'quantity'


    ];

    public function image()
    {
        return $this->morphOne(images::class, 'imageable');
    }
}
