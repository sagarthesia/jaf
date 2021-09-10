<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jaf_language extends Model
{
    protected $fillable = [
        'jaf_id',
        'language',
        'read',
        'write',
        'speak',
    ];

    public function jaf()
    {
        return $this->belongsTo('App\Jaf');
    }
}
