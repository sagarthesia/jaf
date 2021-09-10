<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jaf_work extends Model
{
    protected $fillable = [
        'jaf_id',
        'company_name',
        'designation',
        'from',
        'to',
    ];

    public function setFromAttribute($value)
    {
        $this->attributes['from'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function getFromAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    public function setToAttribute($value)
    {
        $this->attributes['to'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function getToAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    public function jaf()
    {
        return $this->belongsTo('App\Jaf');
    }
}
