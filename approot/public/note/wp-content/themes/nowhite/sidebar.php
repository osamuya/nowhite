<div class="sidebar" id="sidebar-1">

	<div class="photothumbnail mb30">
	
			<?php
			$my_id = 0;
			$num = 1000;
			$re = attachment_ancherlinks($my_id,$num);

			function attachment_ancherlinks($my_id=0, $num){
				$args = "category=".$my_id."&numberposts=".$num;
				$posts = get_posts($args);

				for($i=0; $i <$num ;$i++){
					if($i>= count($posts) ) return;
						$attachments = get_children(array('post_parent' => $posts[$i]->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order'));
						$url = $posts[$i]->guid;
						$title= $posts[$i]->post_title;
						if(is_array($attachments)){
							
							$attachment = array_shift($attachments);
							if (wp_get_attachment_image($attachment->ID)) {
								// $header_params = @get_headers($url);
								// var_dump($header_params);
								//print "<li class='resize_thumbnail gallery__thumbnails--img'><a href='".$url."' title='".$title."'>".wp_get_attachment_image($attachment->ID)."</a></li>\n";
								echo "<a href=\"".$url."\"><p>".wp_get_attachment_image($attachment->ID)."</p></a>";
							}
						}
					}
				}
			?>
	
	
	
	
		<a href="#"><p><img src="https://placehold.jp/320x320.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/320x320.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/100x150.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/320x320.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/320x320.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/320x320.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/320x320.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/100x150.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/100x150.png"></p></a>
		<a href="#"><p><img src="https://placehold.jp/150x150.png"></p></a>
	</div>

	<ul>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	echo "Nothing sidebar.";
	<?php endif; ?>
	</ul>
</div>