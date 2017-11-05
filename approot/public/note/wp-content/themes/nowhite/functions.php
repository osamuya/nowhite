<?php
// sidebar
if ( function_exists('register_sidebar')){
	register_sidebar(array(
		'name' => 'ブログサイドバー',
		'id' => 'sidebar-1',
	));
}

// thema parameter
$blogmeta = array(
	// META HTML
	"BLOGTITLE" =>"nowhite",
	"METADESCRIPTION" => "",
	"METAKEYWORD" => "",
	// OG
	"METAOGTYPE" => "website",
	"METAOGURL" => "https://nowhite.site",
	"METAOGIMAGE" => "",
	"METAOGTITLE" => "nowhite",
	"METAOGDESCRIPTION" => "",
	"METAOGSITEIMAGE" => "nowhite",
);