<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jaf extends Model
{
    protected $casts = [
        'prefered_location' => 'array',
    ];

    public function getPreferedLocationAttribute($value)
    {
        return array_values(json_decode($value));
    }

    public function getDobAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    public function educations()
    {
        return $this->hasMany('App\Jaf_education');
    }

    public function works()
    {
        return $this->hasMany('App\Jaf_work');
    }

    public function languages()
    {
        return $this->hasMany('App\Jaf_language');
    }

    public function technologies()
    {
        return $this->hasMany('App\Jaf_technology');
    }
}
