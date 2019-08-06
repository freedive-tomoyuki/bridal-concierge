<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function prefecture() {
        return $this->belongsTo('App\Prefecture');
    }
}
