@extends ('layouts.pc')

@section ('script')
    <script src="js/jquery-3.4.1.min.js"></script>
    @include ('_script')
@endsection

@section ('style')
    <!--■■■FONT■■■-->
    <link rel="stylesheet" href="https://use.typekit.net/iug0ozq.css">

    <!--■■■CSS■■■-->
    <link rel="stylesheet" href="/css/style_result.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/common.css">
@endsection

@section ('content')

<div id="wrapper">
<!-- ■■■#wrapper■■■ -->

<header><!-- header -->
    <h1><a href="/">Bridal concierge</a></h1>
</header>
<!-- /header -->

<section id="fv" class="fv"><!-- #fv -->
    
    <h2>お探しの条件に合う店舗が見つかりませんでした。</h2>
    
</section>
    
<!-- /#fv -->
    
    
<section id="search_retry" class="search_retry parallax-window" data-parallax="scroll" data-image-src="images/bg_il01.jpg"><!-- #search_retry -->
    
    <div class="inner1200 retry_form_layer"><!-- .inner1200 -->
        <div class="retry_form_cont">
            <form action="{{ route('form.search') }}" method="get">
                <div class="retry_form_txt">
                    <h3>他の条件で検索</h3>
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

    </div>
        
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
    
<!-- /#search_retry -->
    
    
    
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
