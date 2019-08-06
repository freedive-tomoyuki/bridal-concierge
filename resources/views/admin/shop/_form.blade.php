<form action="{{ $url }}" method="post" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="company">企業名・ブランド名</label>
        <select class="form-control" name="company">
            {!! company_options(old('company', isset($shop) ? $shop->company_id : 1)) !!}
        </select>
        @include ('admin.layouts.error', ['field' => 'company'])
    </div>
    <div class="form-group">
        <label for="name">店舗名</label>
        <input type="text" class="form-control" name="name" value="{{ old('name', isset($shop) ? $shop->name : '') }}"/>
        @include ('admin.layouts.error', ['field' => 'name'])
    </div>
    <div class="form-group">
        <label for="email">連絡用メールアドレス</label>
        <input type="text" class="form-control" name="email" value="{{ old('email', isset($shop) ? $shop->email : '') }}"/>
        @include ('admin.layouts.error', ['field' => 'email'])
    </div>
    <div class="form-group form-row">
        <div class="col-2">
            <label for="prefecture">都道府県</label>
            <select class="form-control" name="prefecture" id="prefecture">
                {!! prefecture_options(old('prefecture', isset($shop) ? $shop->area->prefecture_id : 13)) !!}
            </select>
            @include ('admin.layouts.error', ['field' => 'prefecture'])
        </div>
        <div class="col-4">
            <label for="area">エリア詳細</label>
            <select class="form-control" name="area" id="area">
            </select>
            @include ('admin.layouts.error', ['field' => 'area'])
        </div>
    </div>
    <div class="form-group form-row">
        <div class="col-2">
            <label for="zip">郵便番号</label>
            <input type="number" maxlength="7" placeholder="1234567" class="form-control" name="zip" value="{{ old('zip', isset($shop) ? $shop->zip : '') }}"/>
            @include ('admin.layouts.error', ['field' => 'zip'])
        </div>
    </div>
    <div class="form-group form-row">
        <div class="col-2">
            <label for="tel">電話番号</label>
            <input type="text" maxlength="20" placeholder="03-1111-2222" class="form-control" name="tel" value="{{ old('tel', isset($shop) ? $shop->tel : '') }}"/>
            @include ('admin.layouts.error', ['field' => 'tel'])
        </div>
    </div>
    <div class="form-group">
        <label for="address">住所</label>
        <input type="text" class="form-control" name="address" value="{{ old('address', isset($shop) ? $shop->address : '') }}"/>
        @include ('admin.layouts.error', ['field' => 'address'])
    </div>
    <div class="form-group">
        <label for="description">詳細</label>
        <textarea class="form-control" name="description">{{ old('description', isset($shop) ? $shop->description : '') }}</textarea>
        @include ('admin.layouts.error', ['field' => 'description'])
    </div>

    <div class="form-group">
        <label for="business_hours_weekdays">営業時間（平日）</label>
        <input type="text" class="form-control" placeholder="10:00-18:00" name="business_hours_weekdays" value="{{ old('business_hours_weekdays', isset($shop) ? $shop->business_hours_weekdays : '') }}"/>
        @include ('admin.layouts.error', ['field' => 'business_hours_weekdays'])
    </div>
    <div class="form-group">
        <label for="business_hours_weekend_and_holiday">営業時間（土日祝日）</label>
        <input type="text" class="form-control" placeholder="10:00-18:00" name="business_hours_weekend_and_holiday" value="{{ old('business_hours_weekend_and_holiday', isset($shop) ? $shop->business_hours_weekend_and_holiday : '') }}"/>
        @include ('admin.layouts.error', ['field' => 'business_hours_weekend_and_holiday'])
    </div>
    <div class="form-group">
        <label for="about_business_hours">営業時間補足</label>
        <input type="text" class="form-control" name="about_business_hours" value="{{ old('about_business_hours', isset($shop) ? $shop->about_business_hours : '') }}"/>
        @include ('admin.layouts.error', ['field' => 'about_business_hours'])
    </div>
    <div class="form-group">
        <label for="">表示優先順</label>

    <div class="form-group">
        <label>定休日</label>
        <div class="form-row">
            @php $cnt = 0 @endphp
            @foreach (['日', '月', '火', '水', '木', '金', '土'] as $w)
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="regular_holidays[]" value="{{ $cnt }}" {!! is_checked('regular_holidays', strval($cnt++), isset($shop) ? explode(',', $shop->regular_holidays) : []) !!}>
                    <label class="form-check-label">{{ $w }}曜日</label>
                </div>
                @if (!$loop->last) <span style="color:#ccc; padding: 0 16px">|</span> @endif
            @endforeach

        </div>
    </div>
    <div class="form-group">
        <label for="about_regular_holiday">定休日補足</label>
        <input type="text" class="form-control" name="about_regular_holiday" value="{{ old('about_regular_holiday', isset($shop) ? $shop->about_regular_holiday : '') }}"/>
        @include ('admin.layouts.error', ['field' => 'about_regular_holiday'])
    </div>

    <div class="form-group form-row">
        <div class="col-3">
            <label for="brand">ブランド</label>
            <select name="brand">{!! star_options(old('brand', isset($shop) ? $shop->brand : null)) !!}</select>
        </div>
        <div class="col-3">
            <label for="price">価格</label>
            <select name="price">{!! star_options(old('price', isset($shop) ? $shop->price : null)) !!}</select>
        </div>
        <div class="col-3">
            <label for="design">デザイン</label>
            <select name="design">{!! star_options(old('design', isset($shop) ? $shop->design : null)) !!}</select>
        </div>
        <div class="col-3">
            <label for="diamond">ダイアモンド</label>
            <select name="diamond">{!! star_options(old('diamond', isset($shop) ? $shop->diamond : null)) !!}</select>
        </div>
    </div>

    <div class="form-group">
        <label for="age_of_customer">顧客年齢層</label>
        <select name="age_of_customer">{!! age_of_customer_options(old('age_of_customer', isset($shop) ? $shop->age_of_customer : null)) !!}</select>
        @include ('admin.layouts.error', ['field' => 'age_of_customer'])
    </div>

    <div class="form-group">
        <label for="images">店画像</label>
        @if (isset($shop) && isset($shop->images))
            <div style="padding: 8px 0"><img src="{{ asset('storage/s/' . $shop->images) }}" style="width:200px;" /></div>
        @endif
        <div><input type="file" name="images" /></div>
        @include ('admin.layouts.error', ['field' => 'images'])
    </div>

    <div class="form-group">
        <div class="col-2">
            <label for="priority_of_display">表示優先順</label>
            <input type="number" maxlength="7" placeholder="大きい値順を優先表示" class="form-control" name="priority_of_display" value="{{ old('priority_of_display', isset($shop) ? $shop->priority_of_display : '') }}"/>
        </div>
        @include ('admin.layouts.error', ['field' => 'priority_of_display'])
    </div>
    
   
    <a href="{{ route('admin.shops.index') }}">戻る</a>
    <input type="submit" value="登録" class="btn btn-primary" />
</form>
