<?php include(TEMPLATEPATH."/inc/meta.php"); ?>

<body>
<?php include(TEMPLATEPATH."/inc/nav.php"); ?>


	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="table-responsive mt30 blogindex">
					<table class="table">
						<tr>
							<th>Title</th><th>Summary</th><th>Date</th>
						</tr>
						
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<tr>
							<td>
								<?php
									$bloglink = get_permalink();
									echo "<a href=\"".$bloglink."\">";
									echo get_the_title();
									echo "</a>";
								?>
							</td>
							<td>
								<span class="blog-category"><?php the_category(', '); ?></span>
							</td>
							<td><?php the_time('Y.n.d'); ?></td>
						</tr>
						<?php endwhile; else: ?>
							<tr><td colspan="3">記事がありません。</td></tr>
						<?php endif; ?>
					</table>
				</div>
			</div><!--.col-md-8-->
			
			<div class="col-md-4">
				<?php include(TEMPLATEPATH."/sidebar.php"); ?>
			</div><!--.col-md-4-->
		</div>
	</div>

<?php include(TEMPLATEPATH."/inc/footer.php"); ?>