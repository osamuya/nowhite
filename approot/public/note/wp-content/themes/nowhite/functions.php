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

function mylogin($allowip) {
    foreach ($allowip as $num=>$gip) {
        if ($_SERVER["REMOTE_ADDR"] == $gip) {
            echo "<a href='".admin_url()."'>LOGIN</a>";
            break;
        }
    }
    return true;
}


//// Login & Edit link
//
//
//if ($_SERVER["REMOTE_ADDR"]) {
//
//}
//
//                // 編集URLを表示
//                // edit_post_link( $link, $before, $after, $id );
//                if (is_user_logged_in()) {
//                    edit_post_link('この記事を編集', '<p class="edit-wp-post">', '</p>');
//                }


