@extends('layouts.applayout')
@section('title', 'nowhite bookmark top') @section('content')

<script>
jQuery(function($){
    /**
    For Responcive with Bootstrap3
        -767
    768 - 991
    992 - 1119
    1200 -
    **/

    /* on load */
    var mswidth=200;
    var egwidth = $(window).width();
        if (egwidth <= 767) {
            $("#container").css({'cssText':'width: 92%; !important;'});
            $(".item").css({'cssText':'width: 100%; !important;'});
            mswidth = Math.ceil(egwidth * 0.073);

        }
//    else if (egwidth >= 768 && egwidth <= 991) {
//            $("#container").css({'cssText':'width: 100%; !important;'});
//            $(".item").css({'cssText':'width: 190px; !important;'});
//            $(".item").css({'cssText':'margin: 0 10px; !important;'});
//            mswidth = 190;
//        } else if (egwidth >= 992 && egwidth <= 1119) {
//            $("#container").css({'cssText':'width: 100%; !important;'});
//            $(".item").css({'cssText':'width: 190px; !important;'});
//            $(".item").css({'cssText':'margin: 0 10px; !important;'});
//            mswidth = 190;
//        } else if (egwidth >= 1200) {
//            $("#container").css({'cssText':'width: 100%; !important;'});
//            $(".item").css({'cssText':'width: 190px; !important;'});
//            $(".item").css({'cssText':'margin: 0 10px; !important;'});
//            mswidth = 190;
//        }
    // Window width resize with pc
    var timer = false;

    /* real time */
    $(window).resize(function() {

        if (timer !== false) {
            clearTimeout(timer);
        }
        timer = setTimeout(function() {
        var egwidth = $(window).width();
            if (egwidth <= 767) {
                $("#container").css({'cssText':'width: 92%; !important;'});
                $(".item").css({'cssText':'width: 100%; !important;'});
                mswidth = Math.ceil(egwidth * 0.073);
            }
//            else if (egwidth >= 768 && egwidth <= 991) {
//                mswidth = 190;
//            } else if (egwidth >= 992 && egwidth <= 1119) {
//                mswidth = 190;
//            } else if (egwidth >= 1200) {
//                mswidth = 190;
//            }
        }, 200);
    });



    $('#container').masonry({
        itemSelector: '.item',
        columnWidth: mswidth,
        isFitWidth: true  //親要素の幅に合わせてカラム数を自動調整
    });




});
</script>

<div class="container">
<div id="container" class="block-center">
<?php
    for($i=0;$i<100;$i++){
$h = mt_rand(100,300);
$imgn = mt_rand(1,20);
$heredocs = <<< EOM
    <div class="item" style="width:190px;">
    <img src="/assets/img/dummy/bookmark/{$imgn}.jpg" style="width: 190px">
      <p class="bookmark-title">長いタイトルは結構きつい</p>
      <p class="bookmark-description">
      Masonry は jQuery は必須ではないがあった方が便利なので、jQuery とダウンロードした「masonry.pkgd.min.js」の読み込みを body 閉じタグの直前や head 内等に記述。ファイル（masonry.pkgd.min.js）へのパスは適宜環境に合わせて記述。（jQuery を読み込んでおけば jQuery プラグインとして機能する。）
      </p>



      <a class="twitter-share-button"
  href="https://twitter.com/share"
  data-size="small"
  data-url="https://dev.twitter.com/web/tweet-button"
  data-via="twitterdev"
  data-related="twitterapi,twitter"
  data-hashtags="example,demo"
  data-text="custom share text"
  data-size="large"
  data-lang="ja"
  data-dnt="true">Tweet</a>

      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">シェア</a></div>
    </div>
EOM;
echo $heredocs;
    }

?>
</div>
    </div>





@endsection
