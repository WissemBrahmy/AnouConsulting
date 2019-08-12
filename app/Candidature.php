<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $fillable=[
        'id','nom','email','adresse','cv','lm','diplome','niveau','domaine','disponibilite','commentaire','contrat','adresse'
    ];
}
