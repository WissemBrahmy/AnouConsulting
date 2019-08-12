<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable=[
        'id','nom','email','tel','message'
    ];
    public $timestamps=true;
}
