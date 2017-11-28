@extends('layouts.applayout')
@section('title', 'nowhite top') @section('content')

<div class="jumbotron mjumbotron">

    <div id="carousel-mainContents" class="slide carousel" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-mainContents" data-slide-to="0" class=""></li>
            <li data-target="#carousel-mainContents" data-slide-to="1" class=""></li>
            <li data-target="#carousel-mainContents" data-slide-to="2" class="active"></li>
            <li data-target="#carousel-mainContents" data-slide-to="3"></li>
            <li data-target="#carousel-mainContents" data-slide-to="4"></li>
            <li data-target="#carousel-mainContents" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img src="/assets/img/slide/001_1600.jpg" alt="hogehoge">
                <div class="carousel-text">
                    <h3>夏</h3>
                    <p>太陽が燦々に降り注ぐ暑い季節</p>
                    <button type="button" class="btn btn-default">春ページ詳細</button>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/slide/002_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
            <div class="item active">
                <img src="/assets/img/slide/003_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/slide/004_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/slide/005_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/slide/006_1600.jpg" alt="hugahuga">
                <div class="carousel-text">
                    <h3>hugahuga</h3>
                    <p>hugahuga</p>
                </div>
            </div>
        </div><!--.carousel-inner-->
    </div><!--.slide-->
</div><!--.jumbotron-->



<div class="dw">
<?php
    for($i=0;$i<100;$i++){
$h = mt_rand(100,300);
$imgn = mt_rand(1,20);
$heredocs = <<< EOM
    <div class="bookmark-panel">
    <a href="">
        <img src="/assets/img/dummy/bookmark/{$imgn}.jpg" width="100%">
    </a>
    <h4>Bookmark Title</h4>
        <div class="bookmark-header"></div>
        <div class="bookmark-content">
            <p>去年くらいまでは、こういったレスポンシブ対応のMasonryレイアウトはJavaScriptで実装するのが主流でした。jQueryのプラグインも数多くリリースされています。そんなレスポンシブ対応のMasonryレイアウトをスクリプト無し、CSSで簡単に実装できるdrivewayを紹介します。CSSアニメーションを使ったインタラクションにも注目です！</p>
        </div>
        <div class="bookmark-footer">2017-11-29</div>
    </div>
EOM;
echo $heredocs;
    }

?>
</div>





@endsection
