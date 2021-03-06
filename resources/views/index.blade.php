@extends ('layouts.pc')

@section ('script')
    <script src="js/jquery-3.4.1.min.js"></script>
    @include ('_script')
@endsection

@section ('style')
    <!--■■■FONT■■■-->
    <link rel="stylesheet" href="https://use.typekit.net/iug0ozq.css">

    <!--■■■CSS■■■-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
@endsection

@section ('content')

<div id="wrapper">
<!-- ■■■#wrapper■■■ -->

<header><!-- header -->
    <div class="header_inner"><h1>Bridal concierge</h1>
        <nav>
            <div id="nav_toggle">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
            <ul class="menu">
                <li><a href="#a_search_map">地域から探す</a>
                <a href="#merit">来店予約のメリット</a></li>
                <li><a href="#point">ブランド選びのポイント</a>
                <a href="#a_flow">ご利用の流れ</a></li>
            </ul>
        </nav>
    </div>
</header>
<!-- /header -->

<section id="fv" class="fv toggle_bg parallax-window" data-parallax="scroll" data-image-src="images/fv_bg_pc.jpg"><!-- #fv -->
	
		<div class="fv_inner"><div class="fv_img">
			<img src="images/fv_logo.png" alt="" class="img100">
			<ul class="flex flex_ai-c flex_jc-b">
				<li><img src="images/fv_ring01.png" alt="" class="img100"></li>
				<li><img src="images/fv_ring02.png" alt="" class="img100"></li>
				<li><img src="images/fv_ring03.png" alt="" class="img100"></li>
			</ul>
		</div>
	</div>
		<div class="fv_conts">
			<div class="fv_inner flex flex_ai-c flex_jc-b flex_sp_col"><!-- .fv_inner -->
				<div class="fv_txt">
				<ul class="flex flex_ai-c flex_jc-b">
					<li><p><strong>{{ $num_of_shops }}店舗</strong><br>が登録</p></li>
					<li><p><strong>予約特典</strong><br>がもらえる</p></li>
					<li><p><strong>待ち時間</strong><br>から解放</p></li>
				</ul>
			</div>
		<div class="fv_form"><!-- .fv_form -->
			<p class="t-a_center">＼お近くのブライダルジュエリー店舗を検索／</p>
			<form action="{{ route('form.search') }}" method="get">
				<ul>
					<li>
                        <p>都道府県から探す</p>
                        <select name="prefecture" id="prefecture">
                            {!! prefecture_options(13) !!}
                        </select>
                    </li>
                    <li>
						<p>エリアを絞り込む</p>
                        <select class="form-control" name="area" id="area"></select>
                    </li>
				</ul>
				<button id="form_submit01" class="form_submit">検索してみる！</button>
			</form>
		</div>
		<!-- /.fv_form -->
		</div><!-- /.fv_inner -->
		
	</div>
	 
	
</section>
<!-- /#fv -->

<div id="a_search_map"><section id="search_map" class="search_map"><!-- #search_map -->
	<div class="inner1200"><!-- .inner1200 -->
		<h2><span>地域から<br>
			探す</span></h2>
		<div class="map_container">
			<ul class="area-tab">
				<li class="modalTrigger" group=1>北海道地方</li>
				<li class="modalTrigger" group=2>東北</li>
				<li class="modalTrigger" group=3>茨城・栃木・群馬</li>
				<li class="modalTrigger" group=4>首都圏</li>
				<li class="modalTrigger" group=5>北陸・甲信越・静岡</li>
				<li class="modalTrigger" group=6>東海</li>
				<li class="modalTrigger" group=7>関西</li>
				<li class="modalTrigger" group=8>四国</li>
				<li class="modalTrigger" group=9>中国</li>
				<li class="modalTrigger" group=10>九州・沖縄</li>
			</ul>
			<!-- Image Map Generated by http://www.image-map.net/ --> 
			<img src="images/map.png" usemap="#image-map" alt="" class="img100">
			<map name="image-map">
				<area target="" alt="" title="" href="#" coords="1631,0,1998,4,1998,314,1763,316,1763,348,1629,346" shape="poly" class="modalTrigger" group=1>
				<area target="" alt="" title="" href="#" coords="1631,378,1906,378,1906,812,1629,812" shape="poly" class="modalTrigger" group=2>
				<area target="" alt="" title="" href="#" coords="1631,820,1908,820,1908,1040,1774,1039,1772,934,1631,936" shape="poly" class="modalTrigger" group=3>
				<area target="" alt="" title="" href="#" coords="1631,938,1767,941,1765,1047,1910,1047,1908,1249,1631,1251" shape="poly" class="modalTrigger" group=4>
				<area target="" alt="" title="" href="#" coords="1198,708,1620,705,1620,1249,1484,1251,1486,843,1337,846,1336,922,1198,920" shape="poly" class="modalTrigger" group=5>
				<area target="" alt="" title="" href="#" coords="1345,853,1481,853,1477,1141,1198,1139,1198,1037,1343,1035" shape="poly" class="modalTrigger" group=6>
				<area target="" alt="" title="" href="#" coords="910,927,1332,927,1330,1030,1189,1028,1187,1249,908,1249" shape="poly" class="modalTrigger" group=7>
				<area target="" alt="" title="" href="#" coords="475,929,899,927,899,1141,475,1141" shape="poly" class="modalTrigger" group=8>
				<area target="" alt="" title="" href="#" coords="527,1187,807,1189,806,1401,527,1401" shape="poly" class="modalTrigger" group=9>
				<area target="" alt="" title="" href="#" coords="0,926,422,927,422,1251,2,1251" shape="poly" class="modalTrigger" group=10>
				<area target="" alt="" title="" href="#" coords="136,1334,2,1334,0,1434,138,1434" shape="poly" class="modalTrigger" group=10>
			</map>
		</div>
	</div>
	<!-- /.inner1200 --> 
	
</section>
<!-- /#search_map --></div>

<section id="merit" class="merit parallax-window" data-parallax="scroll" data-image-src="images/merit_bg.jpg"><!-- #merit -->
	
	<div class="inner1200"><!-- .inner1200 -->
		<h2>来店予約のメリット</h2>
		<ul class="merit-list">
			<li> <img src="images/merit01.png" alt="" class="img100">
				<h3><span class="bold fs1-25em">来店予約特典</span><br>
					がもらえる！</h3>
				<p>ギフト券やブランドアイテムなど、予約して店舗に行くだけでもらえる特典が多数！</p>
			</li>
			<li> <img src="images/merit02.png" alt="" class="img100">
				<h3><span class="bold fs1-25em">複数の店舗</span><br>
					を1日で回れる！</h3>
				<p>店舗が集中している地域が全国に多数！デートのついでに行ってみるのも◎</p>
			</li>
			<li> <img src="images/merit03.png" alt="" class="img100">
				<h3><span class="bold fs1-25em">待ち時間なし</span><br>
					でスムーズ！</h3>
				<p>最近はwebで購入できるサービスも！</p>
			</li>
			<li> <img src="images/merit04.png" alt="" class="img100">
				<h3><span class="bold fs1-25em">ブランドの特徴</span><br>
					が比べられる！</h3>
				<p>平均１人あたり、3.8店舗回ってます！</p>
			</li>
		</ul>
	</div>
	<!-- /.inner1200 --> 
	
</section>
<!-- /#merit -->

<section id="point" class="point"><!-- #point -->
	
	<div class="inner1200"><!-- .inner1200 -->
		<h2>ブランド選びのポイント</h2>
		<ol class="point-list">
			<li>
				<h3>ブランドによって<br>
					コンセプトも特色もバラバラ</h3>
				<p>ブライダルジュエリーブランドにはそれぞれコンセプトや特色があります。<br>
					デザインやダイヤモンドの質、購入後の保証やブランドイメージなど、お客様の好みに適したブランド選択が大事です！</p>
			</li>
			<li>
				<h3>店舗には行けるだけ<br>
					行くべき！</h3>
				<p>1組のカップルは平均3〜4ブランドの店舗に足を運んでいます。<br>
					どの店舗にも来店予約をすれば計画的に見て回れる上に、来店特典ももらえちゃいます！</p>
			</li>
			<li>
				<h3>ブランドの認知度<br>
					＝ダイヤモンドの品質は大間違い！？</h3>
				<p>ブライダルジュエリーの主役はダイヤモンド！有名ブランドだから良いダイヤを使っているというのは大間違い！？ブランド、品質、デザイン、何で選ぶかはあなた次第！</p>
			</li>
		</ol>
	</div>
	<!-- /.inner1200 --> 
	
</section>
<!-- /#point -->

<div id="a_flow"><section id="flow" class="flow parallax-window" data-parallax="scroll" data-image-src="images/bg_il01.jpg"><!-- #flow -->
	
	<div class="inner1200"><!-- .inner1200 -->
		<h2><span>結婚指輪・婚約指輪購入までの流れ</span></h2>
		<ol class="flow_list">
			<li>
				<div class="flow_txt">
					<h3>ご婚約・サプライズプロポーズ</h3>
					<p>プロポーズ後、ご婚約されてから指輪をお探しになられる方も増えています。<br>
						お二人の好みや、ライフスタイルにあった指輪を選びたいですよね？<br>
						パートナーとのお二人での来店はもちろん、プロポーズリングをお求めのお一人様でのご来店も歓迎です！</p>
				</div>
				<div class="flow_img"><img src="images/flow01.png" alt=" " class="img100"></div>
			</li>
			<li>
				<div class="flow_txt">
					<h3>ブランド選び</h3>
					<p>海外の有名ブランド、よく行く繁華街で目にするブランド、デザインに特徴のあるブランド、ブランドによってその特色は様々。<br>
						大切な思い出のお品物だからこそ、色々なブランドに行ってみてください！</p>
				</div>
				<div class="flow_img"><img src="images/flow02.png" alt=" " class="img100"></div>
			</li>
			<li>
				<div class="flow_txt">
					<h3>ご予約</h3>
					<p>ブライダルジュエリーに行くときは、来店予約がオススメ！<br>
						店舗での待ち時間をなくせる上、来店予約特典をご用意しているブランドも多数！ </p>
				</div>
				<div class="flow_img"><img src="images/flow03.png" alt=" " class="img100"></div>
			</li>
			<li>
				<div class="flow_txt">
					<h3>ご来店</h3>
					<p>指輪のデザインやダイヤモンドのクオリティ、知っているようで知らないブライダルジュエリーの知識をジュエリーのプロが丁寧に説明して貰えます。<br>
						もちろん指輪を見に行くだけでも問題ございません！</p>
				</div>
				<div class="flow_img"><img src="images/flow04.png" alt=" " class="img100"></div>
			</li>
			<li>
				<div class="flow_txt">
					<h3>ご検討</h3>
					<p>パートナーとの大切な思い出の品だからこそ、デザインや、品質、ダイヤモンドの質など色々なブランドの品を手にとって見ながらごゆっくりご検討くださいませ。</p>
				</div>
				<div class="flow_img"><img src="images/flow05.png" alt=" " class="img100"></div>
			</li>
			<li>
				<div class="flow_txt">
					<h3>購入！</h3>
					<p>通常、結婚指輪・婚約指輪は、ご購入からお手元に届くまで、2週間〜4週間ほどお時間がかかってしまいます。<br>
						余裕をもったスケジュール感でご検討・ご購入くださいませ！ </p>
				</div>
				<div class="flow_img"><img src="images/flow06.png" alt=" " class="img100"></div>
			</li>
		</ol>
	</div>
	<!-- /.inner1200 --> 
	
</section>
<!-- /#flow --></div>

<section id="footer_form" class="footer_form parallax-window" data-parallax="scroll" data-image-src="images/bg_photo01.jpg"><!-- #footer_form -->
	
	<div class="inner1200 footer_form_layer"><!-- .inner1200 -->
		<div class="footer_form_cont">
			<form action="{{ route('form.search') }}" method="get">
				<div class="footer_form_txt">
					<p class="t-a_center">＼お近くのブライダルジュエリー店舗を検索／</p>
				<ul>
					<li>
						<p>都道府県から探す</p>
						<div class="select-arrow"><select name="prefecture" id="prefecture2">
                            {!! prefecture_options(13) !!}
						</select></div>
					</li>
					<li>
						<p>エリアを絞り込む</p>
						<div class="select-arrow">
							<select name="area" id="area2">
						</select>
						</div>
					</li>
					<li class="footer_form_map">
						<a href="#search_map"><img src="images/footer_map-btn.png" alt="" class="img100"></a>
					</li>
				</ul>
				<button id="form_submit01" class="form_submit">検索してみる！</button>
			</form>
		</div>

	</div>
	</div>
	<!-- /.inner1200 --> 
	
</section>
<!-- /#footer_form -->

<footer><!-- footer -->
	<p>© 2019 FREEDiVE Inc.</p>
</footer>
<!-- /footer -->

</div>
<!-- ■■■/#wrapper■■■ -->

<section id="modalArea" class="modalArea">
    <div id="modalBg" class="modalBg"></div>
    <div class="modalWrapper">
        <div class="modalContents">
            <h2>地域名</h2>
            <form action="{{ route('form.search') }}" method="get">
                <div class="tab"></div>
                <button id="tab_submit" class="tab_submit">検索</button>
            </form>
        </div>

        <div class="closeModal"><span id="closeModal">×キャンセル</span></div>
    </div>
</section>

<!--■■■JS■■■--> 
<script type="text/jscript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js"></script>
<script>
$('img[usemap]').rwdImageMaps();
$(function() {
    var width = $(window).width();
    if( width < 640 ){
        $(".toggle_bg").each(function(){
            $(this).attr("data-image-src", $(this).attr("data-image-src").replace("_pc","_sp"));
        })
    }
});
</script>
<script src="js/parallax.js"></script> 
<script src="js/function.js"></script> 
@endsection
