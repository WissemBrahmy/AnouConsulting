<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=[
        'id','title','content','image'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
       
    ];
}
