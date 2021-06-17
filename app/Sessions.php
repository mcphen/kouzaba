<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    //
    protected $fillable = [
        'session','examen_annee_id'
    ];
}
