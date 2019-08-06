<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\PrefectureGroup;
use App\Application;
use App\ApplicationDate;
use App\Http\Requests\BookingRequest;
use App\Mail\Booking;
use DB;
use Mail;

class IndexController extends Controller
{
    public function index() {
        $num_of_shops = Shop::all()->count();
        return view('index', compact('num_of_shops'));
    }

    public function search(Request $request) {

        if(isset($request->areas)) {
            $shops = Shop::whereIN('area_id', $request->areas)->orderBy('priority_of_display','desc')->get();
        } else {
            $shops = Shop::where('area_id', '=', $request->area)->orderBy('priority_of_display','desc')->get();
        }

        if(count($shops) == 0) {
            return view('search.not_found');
        }
        return view('search.result', compact('shops'));
    }

    public function create(BookingRequest $request) {

        DB::transaction(function() use ($request) {
            $a = new Application;
            $a->name               = $request->name;
            $a->kana               = $request->kana;
            $a->age                = $request->age;
            $a->gender             = $request->gender;
            $a->tel                = $request->tel;
            $a->email              = $request->email;
            $a->people             = $request->people;
            $a->visited_code       = $request->visit;
            $a->objective_of_visit = $request->objective ? implode(',', $request->objective) : null;
            $a->save();

            foreach($request->shops as $s) {
                $date = new ApplicationDate;
                $date->application_id = $a->id;
                $date->shop_id = $s;
                $date->datetime = $this->find($request->visit_date, $s) . ' ' . $this->find($request->visit_time, $s);
                $date->save();

                // send email
                $shop = Shop::find($s);
                if($shop->email !== null) {
                    Mail::to($shop->email)->send(new Booking($a, $date));
                }
            }
        });

        return redirect()->route('form.thanks');
    }

    public function thanks(Request $request) {
        return view('search.thanks');
    }

    private function find($ary, $shopId) {
        foreach($ary as $a) {
            $wk = explode('|', $a);
            if($wk[0] == $shopId) {
                return explode(' ', $wk[1])[0];
            }
        }
        return null;
    }
}
