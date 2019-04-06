<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $table = 'annonce';

    protected $filsAnnonce = [
        'titre', 'description', 'photo', 'prix'
    ];
}
