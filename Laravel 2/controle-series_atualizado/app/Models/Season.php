<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Serie;
use App\Models\Episode;

class Season extends Model
{
    public function series()
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }


}
