<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrefectureGroup extends Model
{
    public function prefectures() {
        return $this->hasMany('App\Prefecture');
    }
}
