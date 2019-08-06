<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function dates() {
        return $this->hasMany('App\ApplicationDate');
    }
}
