<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Season;

class Episode extends Model
{
    public $timestamps = false;

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
