<?php
	global $template;
	$template_name = basename($template, '.php');
	echo "<!--".$template."-->\n";
	$cat = get_the_category();
	$cat = $cat[0];
?>
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
<title><?php
	if (
		$template_name == "index" ||
		$template_name == "home" ||
		$template_name == "front_page"
	) {
		echo $blogmeta["BLOGTITLE"];
	} else {
		echo $blogmeta["BLOGTITLE"]. " | ";
//		echo $cat->cat_name." | ",
		the_title();
		
	}
?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--og-->
<meta property="og:type" content="<?php echo $blogmeta["METAOGTYPE"]; ?>" />
<meta property="og:url" content="<?php echo $blogmeta["METAOGURL"]; ?>" />
<meta property="og:image" content="<?php echo $blogmeta["METAOGIMAGE"]; ?>" />
<meta property="og:title" content="<?php echo $blogmeta["METAOGTITLE"]; ?>" />
<meta property="og:description" content="<?php echo $blogmeta["METAOGDESCRIPTION"]; ?>" />
<meta property="og:site_name" content="<?php echo $blogmeta["METAOGSITEIMAGE"]; ?>" />
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
