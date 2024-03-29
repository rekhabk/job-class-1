<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Job extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
