@extends('layouts.applayout')
@section('title', 'nowhite bookmark top') @section('content')

<script>
jQuery(function($){
  $('#container').masonry({
    itemSelector: '.item',
    columnWidth: 200,
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
