
<!doctype html>
<!--[if IE 6]> <html class="ie6"> <![endif]-->
<!--[if IE 7]> <html class="ie7"> <![endif]-->
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->

<html lang="ja">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--page info-->
<title>無題ドキュメント</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--og-->
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="" />
<meta property="og:site_name" content="" />
<!--favicon-->
<link rel="shortcut icon" href=""/>

<!--Bootstrap-->
<script src="/assets/js/jquery-1.11.2.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<link type="text/css" href="/assets/css/bootstrap.min.css" rel="stylesheet">
<!--css-->
<link rel="stylesheet" type="text/css" href="/assets/css/index.css" media="all">
<!--js-->
<script type="text/javascript" src="/assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>

<!--[if lt IE 10]>
<script type="text/javascript" src="assets/js/html5shiv.min.js"></script>
<script type="text/javascript" src="assets/js/respond.min.js"></script>
<script type="text/javascript" src="assets/js/flexibility.js"></script>
<![endif]-->
</head>

<body>

<nav class="navbar-default navbar navbar-static-top navbar-mc200">
	
	<div class="container">
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#patern05" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand">
				<h1><img src="/assets/img/nowhite_150.png" class="navbar-mc200-logo" alt="nowhite"></h1>
				
			</a>
		</div>
		
		<div id="patern05" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
			<ul class="nav navbar-nav navbar-right navbar-mc200-list">
				<li>
					<a href="/regist/">
						<img src="/assets/img/ug-home.png" class="navbar-mc200-icon"> 
						Sign up
					</a>
				</li>
				<li>
					<a href="/login/">
						<img src="/assets/img/ug-archives.png" class="navbar-mc200-icon"> 
						Log in
					</a>
				</li>
				<li class="">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="/assets/img/ug-archives.png" class="navbar-mc200-icon">
						Menu<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/regist/">Sign up</a></li>
						<li><a href="/board_free/1">自由投稿掲示板</a></li>
						<li><a href="/board00.php">みんなの投稿</a></li>
						<li><a href="#">みんなの投稿その２</a></li>
						<li><a href="#">みんなの投稿その３</a></li>
						<li><a href="/top.php">TOPページデモ</a></li>
						<li><a href="/template.php">テンプレート</a></li>
						<li><a href="/template_form.php">フォームテンプレート</a>
						<li><a href="/calendar/calendar.php">カレンダー</a></li>
					</ul>
				</li>
				<li class="">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="/assets/img/ug-archives.png" class="navbar-mc200-icon">
							Archives
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">トピック一覧</a></li>
						<li><a href="#">画像一覧</a></li>
						<li><a href="#">地域から探す</a></li>
						<li><a href="#">トピック一覧</a></li>
					</ul>
				</li>
				<li class="">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="/assets/img/ug-archives.png" class="navbar-mc200-icon">
						usage
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">ご利用方法</a></li>
						<li><a href="#">注意事項</a></li>
						<li><a href="#">免責</a></li>
						<li><a href="/contact">お問い合わせ</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
	</div><!--.container-->
</nav>

	<div class="container">
		
		<div class="row">
			<div class="col-md-8">
			
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2 class="h2"><?php the_title(); ?></h2>
	<div class="tpoic-meta mb40">
		<span class="blog-category"><?php the_category(', '); ?></span>
		<span class="blog-tags"><a href="">tag</a></span>
		<span class="blog-date"><?php the_time('Y年n月j日'); ?></span>
	</div>
	<div class="blog-text">
		<?php the_content(); ?>
	</div>
	<div></div>
<?php endwhile; else: ?>
	<div>記事がありません。</div>
<?php endif; ?>
			
			
			
			<h2 class="h2">HELLOW WORLD!!</h2>
			
			<div class="tpoic-meta mb40">
				<span class="blog-category"><a href="">Category</a></span>
				<span class="blog-tags"><a href="">tag</a></span>
				<span class="blog-date">2017.05.12</span>
			</div>
			
			<div class="blog-text">
					<p>
						略歴[編集]
						旧東ドイツのドレスデンに生まれる。地元の芸術アカデミーで1951年から56年まで絵画を学ぶが、共産主義体制に制約を感じ、ベルリンの壁によって東西ドイツの行き来が禁止される寸前の1961年、西側のデュッセルドルフに移住。<a href="">デュッセルドルフ芸術大学</a>に入学。独自の作風を展開していく。1971年からデュッセルドルフ芸術大学教授を15年以上にわたり務めた。2012年、競売大手サザビーズがロンドンで行った競売で、エリック・クラプトンが所有していたゲルハルト・リヒターの抽象画「アプストラクテス・ビルト（809-4）」が約2132万ポンド（約26億9000万円）で落札された。生存する画家の作品としては史上最高額。
						作風[編集]
						初期の頃から製作されているフォト・ペインティングは、新聞や雑誌の写真を大きくカンバスに描き写し、画面全体をぼかした手法である。モザイクのように多くの色を並べた「カラー・チャート」、カンバス全体を灰色の絵具で塗りこめた「グレイ・ペインティング」、様々な色を折りこまれた「アブストラクト・ペインティング」、幾枚ものガラスを用いて周囲の風景の映り込む作品など、多様な表現に取り組んでいる。これらの基礎資料であるかのような五千枚以上のドローイングや写真からなる数百を越えるパネルからなる作品として、「アトラス」がある。これはアビ・ヴァールブルクの「ムネモシュネ・アトラス」の影響を受けた物である。初期の作品は主として油彩であったが、近年ではエナメルや印刷技術を用いた物が多くなっている。
					</p>
					<p>
						略歴[編集]
						旧東ドイツのドレスデンに生まれる。地元の芸術アカデミーで1951年から56年まで絵画を学ぶが、共産主義体制に制約を感じ、ベルリンの壁によって東西ドイツの行き来が禁止される寸前の1961年、西側のデュッセルドルフに移住。<a href="">デュッセルドルフ芸術大学</a>に入学。独自の作風を展開していく。1971年からデュッセルドルフ芸術大学教授を15年以上にわたり務めた。2012年、競売大手サザビーズがロンドンで行った競売で、エリック・クラプトンが所有していたゲルハルト・リヒターの抽象画「アプストラクテス・ビルト（809-4）」が約2132万ポンド（約26億9000万円）で落札された。生存する画家の作品としては史上最高額。
						作風[編集]
						初期の頃から製作されているフォト・ペインティングは、新聞や雑誌の写真を大きくカンバスに描き写し、画面全体をぼかした手法である。モザイクのように多くの色を並べた「カラー・チャート」、カンバス全体を灰色の絵具で塗りこめた「グレイ・ペインティング」、様々な色を折りこまれた「アブストラクト・ペインティング」、幾枚ものガラスを用いて周囲の風景の映り込む作品など、多様な表現に取り組んでいる。これらの基礎資料であるかのような五千枚以上のドローイングや写真からなる数百を越えるパネルからなる作品として、「アトラス」がある。これはアビ・ヴァールブルクの「ムネモシュネ・アトラス」の影響を受けた物である。初期の作品は主として油彩であったが、近年ではエナメルや印刷技術を用いた物が多くなっている。
					</p>
				</div>
			</div><!--.col-md-8-->
			
			<div class="col-md-4">
			
				<div class="form">
					<form method="post" action="http://peep.local/signup_procedure" autocomplete="off" novalidate="">
						<input type="hidden" name="_token" value="39ZIcnSazxRyd9UtbKzUFzIOS0fd51tGV0JpwUnp">
						<div class="form-group">
							<label for="Email">Email</label>
							<input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="user@example.com" autocomplete="off" name="Email" value="">
							<small id="emailHelp" class="form-text text-muted">
								
							</small>
						</div>
						<div class="form-group">
							<label for="Password">Password</label>
							<input type="password" class="form-control" id="Password" placeholder="Password" autocomplete="off" name="Password" value="">
							<small id="emailHelp" class="form-text text-muted" autocomplete="off">
								
							</small>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" class="form-check-input" autocomplete="off"><span class="checkbox-text" autocomplete="off">次回から自動的にログインする</span>
							</label>
						</div>
						<div class="form-botton mt10">
							<button type="submit" class="btn btn-primary">会員登録</button>
						</div>
					</form>
				</div>
				
				<ul>
					<li><a href="/">home</a></li>
				</ul>
				
			</div><!--.col-md-4-->
		</div>
		</div>

<footer id="footer">
	<p class="copyright text-center">Copyright (C) 2017 nowhite. All rights reserved.</p>
</footer>

</body>
</html>
