<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable=[
        'id','title','region','domaine','niveau','description'
    ];
}
