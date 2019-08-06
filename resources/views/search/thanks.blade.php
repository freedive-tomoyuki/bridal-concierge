@extends ('layouts.pc')
@section ('style')
    <!--■■■FONT■■■-->
    <link rel="stylesheet" href="https://use.typekit.net/iug0ozq.css">

    <!--■■■CSS■■■-->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/style_result.css">
@endsection

@section ('script')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

@section ('content')
<div id="thanks">
    <div id="wrapper">
        <!-- ■■■#wrapper■■■ -->

        <header><!-- header -->
            <h1><a href="/">Bridal concierge</a></h1>
        </header>
        <!-- /header -->

        <section id="fv" class="fv parallax-window" data-parallax="scroll" data-image-src="/images/bg_il01.jpg"><!-- #fv -->
            
            <h2>お申し込みありがとうございました。<br>ご来店をお待ちしております。</h2>
            
        </section>
        <!-- /#fv -->
            
        <footer><!-- footer -->
            <p>© 2019 FREEDiVE Inc.</p>
        </footer>
        <!-- /footer --> 

    </div>
</div>

<!--■■■JS■■■--> 
<script src="/js/parallax.js"></script> 
<script src="/js/function.js"></script>
@endsection
