<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $filsAnnonce = [
        'titre', 'description', 'photo', 'prix'
    ];
}
