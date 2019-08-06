<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Shop extends Model
{
    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function area() {
        return $this->belongsTo('App\Area');
    }

    public function available_dates() {
        $holidays = explode(',', $this->regular_holidays);
        $date = Carbon::now()->addDay();
        $dates = [];
        for($i=0; $i<30; $i++) {
            if(!in_array(date('w', strtotime($date)), $holidays)) {
                $dates[] = $date->isoFormat('YYYY-MM-DD (ddd)');
            }
            $date->addDay();
        }
        return $dates;
    }

    public function available_times($holiday) {
        $wk = explode('-', $holiday ? $this->business_hours_weekend_and_holiday : $this->business_hours_weekdays);
        $start_time = explode(':', $wk[0]);
        $end_time   = explode(':', $wk[1]);

        $times = [];
        for($i=$start_time[0]; $i<$end_time[0]; $i++) {
            $times[] = $i . ":" . $start_time[1];
        }
        return $times;
    }
}
