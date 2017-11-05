<?php
include(TEMPLATEPATH."/inc/meta.php");
?>

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

				<?php endwhile; else: ?>
					<div>記事がありません。</div>
				<?php endif; ?>
			</div><!--.col-md-8-->
			
			<div class="col-md-4">
				<?php include(TEMPLATEPATH."/sidebar.php"); ?>
			</div><!--.col-md-4-->
		</div>
	</div>

<footer id="footer">
	<p class="copyright text-center">Copyright (C) 2017 nowhite. All rights reserved.</p>
</footer>

</body>
</html>
