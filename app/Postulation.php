<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    protected $fillable=[
        'id','nom','email','cv','lm','id_offre'
    ];

    public function offre(){
        return $this->belongsTo(Offre::class);
    }
}
