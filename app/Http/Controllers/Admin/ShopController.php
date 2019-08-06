<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use App\Http\Requests\ShopRequest;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::paginate(20);
        return view('admin/shop/index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/shop/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShopRequest $request)
    {
        $shop = new Shop;
        $shop->company_id = $request->company;
        $shop->area_id = $request->area;
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->zip = $request->zip;
        $shop->tel = $request->tel;
        $shop->address = $request->address;
        $shop->description = $request->description;
        $shop->business_hours_weekdays = $request->business_hours_weekdays;
        $shop->business_hours_weekend_and_holiday = $request->business_hours_weekend_and_holiday;
        $shop->about_business_hours = $request->about_business_hours;
        $shop->regular_holidays = $request->regular_holidays ? implode(',', $request->regular_holidays) : "";
        $shop->about_regular_holiday = $request->about_regular_holiday;
        $shop->brand = $request->brand;
        $shop->price = $request->price;
        $shop->design = $request->design;
        $shop->diamond = $request->diamond;
        $shop->age_of_customer = $request->age_of_customer;
        $shop->priority_of_display = $request->priority_of_display;
        if($request->images) {
            $filename = $request->file('images')->store('public/s/');
            $shop->images = basename($filename);
        }
        $shop->save();
        return redirect()->route('admin.shops.index')->with('message', '新規店舗を登録しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('admin/shop/edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShopRequest $request, Shop $shop)
    {
        $shop->company_id = $request->company;
        $shop->area_id = $request->area;
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->zip = $request->zip;
        $shop->tel = $request->tel;
        $shop->address = $request->address;
        $shop->description = $request->description;
        $shop->business_hours_weekdays = $request->business_hours_weekdays;
        $shop->business_hours_weekend_and_holiday = $request->business_hours_weekend_and_holiday;
        $shop->about_business_hours = $request->about_business_hours;
        $shop->regular_holidays = $request->regular_holidays ? implode(',', $request->regular_holidays) : "";
        $shop->about_regular_holiday = $request->about_regular_holiday;
        $shop->brand = $request->brand;
        $shop->price = $request->price;
        $shop->design = $request->design;
        $shop->diamond = $request->diamond;
        $shop->priority_of_display = $request->priority_of_display;
        $shop->age_of_customer = $request->age_of_customer;
        if($request->images) {
            $filename = $request->file('images')->store('public/s/');
            $shop->images = basename($filename);
        }
        $shop->update();
        return redirect()->route('admin.shops.index')->with('message', '店舗情報を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
