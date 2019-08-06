<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    public function prefectureGroup() {
        return $this->belongsTo('App\PrefectureGroup');
    }

    public function areas() {
        return $this->hasMany('App\Area');
    }
}
