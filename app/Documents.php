<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    //
    protected $fillable = [
        'intitule','file_pdf','type_session_id','session_id','examen_annee_id','count_download'
    ];
}
