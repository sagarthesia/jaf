<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jaf_education extends Model
{
    protected $fillable = [
        'jaf_id',
        'education',
        'name_of_board',
        'passing_year',
        'percentage',
    ];

    protected $casts = [
        //'passing_year' => 'date:Y',
    ];

    public function setPassingYearAttribute($value)
    {
        $this->attributes['passing_year'] = Carbon::parse($value)->format('yy');
    }

    public function jaf()
    {
        return $this->belongsTo('App\Jaf');
    }
}
