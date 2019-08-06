@extends ('layouts.pc')
@section ('style')
    <!--■■■FONT■■■-->
    <link rel="stylesheet" href="https://use.typekit.net/iug0ozq.css">

    <!--■■■CSS■■■-->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/style_result.css">
    <link rel="stylesheet" href="/css/modal.css">
@endsection
@section ('script')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @include ('search._script')
@endsection
@section ('content')


<div id="wrapper">
<!-- ■■■#wrapper■■■ -->

<header><!-- header -->
	<h1><a href="/">Bridal concierge</a></h1>
</header>
<!-- /header -->

<section id="fv" class="fv parallax-window" data-parallax="scroll" data-image-src="/images/fv_bg.jpg"><!-- #fv -->
	
	<h2>おすすめの店舗が<br class="sp-only">{{ count($shops) }}件見つかりました。</h2>
	
</section>
<!-- /#fv -->

<form action="{{ route('form.create') }}" method="post">
@csrf

<section id="results_index" class="results_index parallax-window" data-parallax="scroll" data-image-src="/images/bg_il02.jpg"><!-- #results_index -->
	<div class="inner1200"><!-- .inner1200 -->
		
        @php $cnt = 0 @endphp
        @foreach ($shops as $s)
            @php $cnt++ @endphp

        <article class="shop_detail" @if ($cnt > 5) style="display:none" @endif><!-- ■■■shop■■■ -->

			<h3>{{ $s->company->name}} {{ $s->name }}</h3>
			<div class="detail_wrapper">
				<div class="detail_main">
					<p>{{ $s->description }} </p>
					<div class="info">
						<div class="chart">ブランド力………<span class="chart_star">{!! stars($s->brand) !!}</span><br>
							価格…………………<span class="chart_star">{!! stars($s->price) !!}</span><br>
							デザイン…………<span class="chart_star">{!! stars($s->design) !!}</span><br>
							ダイヤモンド…<span class="chart_star">{!! stars($s->diamond) !!}</span><br>
							顧客年齢層……{!! age_of_customer_text($s->age_of_customer) !!}</div>
                        <div class="address">
                            <dl>
                                <dt>住所</dt>
                                <dd>{{ $s->address }}</dd>
                                <dt>電話番号</dt>
                                <dd>{{ $s->tel }}</dd>
                                <dt>営業時間</dt>
                                <dd><p>月〜金：{{ $s->business_hours_weekdays }}</p>
							        <p>土日祝：{{ $s->business_hours_weekend_and_holiday }}</p>
                                </dd>
                                <dt>定休日</dt>
                                <dd>{!! holiday_text($s->regular_holidays) !!}</dd>
                            </dl>
						</div>
					</div>
					<input type="checkbox" name="shops[]" class="shop_check" id="shop_check_{{ $s->id }}" value="{{ $s->id }}" {{ is_checked('shops', $s->id) }}>
					<label for="shop_check_{{ $s->id }}" class="checkbox01"><span></span></label>
				</div>
				<div class="detail_img"><img src="{{ asset('storage/s/' . $s->images) }}" alt="" class="img100"></div>
			</div>
		</article>
		<!-- ■■■/shop■■■ -->

        @endforeach

        @if ($cnt > 5) 
            <div id="more_button" class="more">さらに読み込む<br>＋</div>
        @endif
		
	</div>
	<!-- /.inner1200 --> 
	
</section>
<!-- /#results_index -->

<section id="application" class="application">
<!-- #application -->

<div class="inner1200">
<!-- .inner1200 -->
<h2>お申し込み</h2>


<div class="form-box reserve"><!-- .form-box -->
	<h3>ご予約</h3>
    @if ($errors->has('shops'))
        <p class="reserve_error">店舗が選択されていません。</p>
    @endif
	<ul class="reserve_ttl">
		<li>1.店舗名</li>
		<li>2.お日にち</li>
		<li>3.お時間</li>
		<li>　</li>
	</ul>

@php $cnt = 0 @endphp
@foreach ($shops as $s)

	<ul class="reserve_list" id="date_{{ $s->id }}" style="display: none">
		<li class="shop">{{ $s->company->name }}　{{ $s->name }}</li>
		<li class="date">
			<div class="select-arrow">
        <select class="form-control visit_date" name="visit_date[]" id="visit_date_{{ $cnt }}">
            {!! visit_date_options($s->id, old('visit_date.'.$cnt)) !!}
        </select>
		</li>
		<li class="times">
			<div  class="select-arrow">
        <select class="form-control" name="visit_time[]" id="visit_time_{{ $cnt }}">
        </select>
			</div>
		</li>
		<li class="remove close_button" value="{{ $s->id }}"><p> ×リストから削除 </p></li>
	</ul>
@php $cnt++ @endphp
@endforeach

</div>
<!-- /.form-box -->

<div class="form-box memberinfo"> 
	<!-- .form-box -->
	<h3>お客様情報<sup>※全て必須</sup></h3>
	<dl>
		<dt>お名前</dt>
		<dd>
			<input type="text" name="name" maxlength="50" autocomplete="off" id="name" title="例）" placeholder="お名前" value="{{ old('name') }}">
            @include ('layouts.error', ['field' => 'name'])
		</dd>
		<dt>フリガナ</dt>
		<dd>
			<input type="text" name="kana" maxlength="50" autocomplete="off" id="kana" title="例）" placeholder="フリガナ" value="{{ old('kana') }}">
            @include ('layouts.error', ['field' => 'kana'])
		</dd>
		<dt>ご来店人数</dt>
		<dd class="people">
			<div class="select-arrow"><select name="people">
				<option value="1">パートナーと2人</option>
				<option value="2">男性1人</option>
				<option value="3">女性1人</option>
				<option value="4">ご友人と</option>
				<option value="5">その他（3名以上など）</option>
			</select></div>
		</dd>
		<dt> 年齢 </dt>
		<dd>
			<input type="number" name="age" min="16" max="100" class="age" value="{{ old('age') }}">
			歳
            @include ('layouts.error', ['field' => 'age'])
		</dd>
		<dt> 性別 </dt>
		<dd>
			<input type="radio" id="male" name="gender" checked="checked" class="radio01-input" value="1">
			<label for="male" class="radio01"> 男性 </label>
			<input type="radio" id="female" name="gender" class="radio01-input" value="2">
			<label for="female" class="radio01"> 女性 </label>
		</dd>
		<dt> 電話番号 </dt>
		<dd>
			<input type="tel" name="tel" size="12" maxlength="20" placeholder="000-0000-0000" value="{{ old('tel') }}">
            @include ('layouts.error', ['field' => 'tel'])
		</dd>
		<dt> メールアドレス </dt>
		<dd>
			<input type="email" name="email" size="30" maxlength="40" placeholder="メールアドレス" value="{{ old('email') }}">
            @include ('layouts.error', ['field' => 'email'])
		</dd>
		<dt> メールアドレス（確認用） </dt>
		<dd>
			<input type="email" name="confirm_email" size="30" maxlength="40" placeholder="メールアドレス（確認用）" value="{{ old('confirm_email') }}">
            @include ('layouts.error', ['field' => 'confirm_email'])
		</dd>
	</dl>
</div>
<!-- /.form-box -->

<div class="form-box enquete"> 
	<!-- .form-box -->
	<h3> アンケート<sup>※全て必須</sup> </h3>
	<dl>
		<dt> 結婚指輪のお店に<br>
			今まで来店したことはありますか？ </dt>
		<dd>
			<input type="radio" id="visit01" name="visit" {{ is_selected('visit', '1', true) }} value="1" class="radio01-input">
			<label for="visit01" class="radio01"> 初めての来店 </label>
			<input type="radio" id="visit02" name="visit" {{ is_selected('visit', '2') }} value="2" class="radio01-input">
			<label for="visit02" class="radio01"> 2回目以降の来店 </label>
		</dd>
		<dt> 来店目的を教えてください。<br>
			※複数回答可 </dt>
		<dd>
			<input type="checkbox" id="02-A" name="objective[]" value="1" {{ is_checked('objective', '1') }}>
			<label for="02-A" class="checkbox"> エンゲージリング（ご婚約指輪）をご検討 </label>
			<input type="checkbox" id="02-B" name="objective[]" value="2" {{ is_checked('objective', '2') }}>
			<label for="02-B" class="checkbox"> マリッジリング（ご結婚指輪）をご検討 </label>
			<input type="checkbox" id="02-C" name="objective[]" value="3" {{ is_checked('objective', '3') }}>
			<label for="02-C" class="checkbox"> ファインジュエリーをご検討 </label>
			<input type="checkbox" id="02-D" name="objective[]" value="4" {{ is_checked('objective', '4') }}>
			<label for="02-D" class="checkbox"> 商品のお受け取りや修理などをご希望 </label>
		</dd>
	</dl>
</div>
<!-- /.form-box -->

<p class="privacy">
	<span class="modalTrigger agree_link">プライバシーポリシー</span>に<input type="checkbox" id="agree" name="agree"><label for="agree" class="checkbox agree">同意しました</label>
</p>
<button name="confirm" type="submit" id="submit" value="submit" class="disabled-btn submit-btn" readonly="readonly"> お申し込みする </button>
	</div>
	</section>
	<!-- /#application -->
</form>
	
	<footer><!-- footer -->
		<p> © 2019 FREEDiVE Inc. </p>
	</footer>
	<!-- /footer --> 
	
</div>
<!-- ■■■/#wrapper■■■ -->

<section id="modalArea" class="modalArea">
	<div id="modalBg" class="modalBg"></div>
	<div class="modalWrapper">
		<div class="modalContents">
			<h2>プライバシーポリシー</h2>
				<p class="privacy_txt">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキスト<br>
					ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
		</div>
		<div class="closeModal"><span id="closeModal">×閉じる</span></div>
	</div>
</section>

<!--■■■JS■■■--> 
<script src="/js/parallax.js"></script> 
<script src="/js/function.js"></script>

<script>
/*■■■■■■■■■■■■■■■■■■
modal
■■■■■■■■■■■■■■■■■■*/
var $blur = $('#wrapper');
$(function () {
	$('.modalTrigger').click(function () {
		$('#modalArea').fadeIn();
		$blur.addClass('is-menu-open');
	});
	$('#closeModal , #modalBg').click(function () {
		$('#modalArea').fadeOut();
		$blur.removeClass('is-menu-open');
	});
	$(".tab_label").on("click", function () {
		var $th = $(this).index();
		$(".tab_label").removeClass("active");
		$(".tab_panel").removeClass("active");
		$(this).addClass("active");
		$(".tab_panel").eq($th).addClass("active");
	});
});
</script>

@endsection
