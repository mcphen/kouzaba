<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryDownload extends Model
{
    //
    protected $fillable = [
        'address_ip','document_id'
    ];
}
