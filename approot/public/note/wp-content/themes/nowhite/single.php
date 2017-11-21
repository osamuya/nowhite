<?php include(TEMPLATEPATH."/inc/meta.php"); ?>

<body>
<?php include(TEMPLATEPATH."/inc/nav.php"); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">




                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2 class="h2"><?php the_title(); ?></h2>

                 <?php
                // 編集URLを表示
                // edit_post_link( $link, $before, $after, $id );
                if (is_user_logged_in()) {
                    edit_post_link('この記事を編集', '<p class="edit-wp-post">', '</p>');
                }
            ?>



                <div class="tpoic-tags">
                    <span class="blog-tags"><?php the_tags("","<span>","</span>"); ?></span>
                </div>
                <div class="tpoic-meta mb40">
                    <span class="blog-category"><?php the_category(', '); ?></span>
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

<?php include(TEMPLATEPATH."/inc/footer.php"); ?>
