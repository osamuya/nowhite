<?php include(TEMPLATEPATH."/inc/meta.php"); ?>

<body>
	<?php include(TEMPLATEPATH."/inc/nav.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 mt40">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="media boardline" id="boradfree-3">

					<div class="indexBlock">
						<!--Thumbnail-->
						<?php
							// initialize
							$permalink = "#";
							$imageSrc = "";
							// get post
							$id = get_the_ID();
							$images = get_children("post_parent=$id&amp;post_type=attachment&amp;post_mime_type=image");
							if ($images) {
								$keys = array_keys($images);
								$lastkeys = array_pop($keys);
								$num = $lastkeys;
								$thumbnail = wp_get_attachment_image_src($num,'medium');

								$pathinfo = array();
								$pathinfo = pathinfo($thumbnail[0]);
								if ($pathinfo['extension'] == '') {
									//
								} else {
									$permalink;
									$imageSrc = $thumbnail[0];
								}
							} else {
								$permalink = "#";
								$imageSrc = "/assets/img/dummy100.jpg";
							}
						?>
							<span class="media-left float-right">
						<img src="<?php echo $imageSrc; ?>" class="img-rounded" width="40" height="40">
						</span>
							<div class="media-body">
								<h4 class="media-heading">
									<a href="<?php echo get_permalink(); ?>">
										<?php echo get_the_title(); ?>
									</a>...
								</h4>
								<span class="item-category"><?php the_category(" "); ?></span>
								<span class="item-tags"><?php echo the_tags("",""); ?></span>
								<span class="item-date"><?php the_time('Y.n.d'); ?></span>
							</div>
					</div>
				</div>
				<?php endwhile; else: ?>
				<p>記事がありません。</p>
				<?php endif; ?>
			</div>
			<!--sidebar-->
			<div class="col-md-4">
				<?php include(TEMPLATEPATH."/sidebar.php"); ?>
			</div>
			<!--.col-md-4-->
		</div>
	</div>


	<?php include(TEMPLATEPATH."/inc/footer.php"); ?>
