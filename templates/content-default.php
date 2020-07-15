<?php

/**

Template Name: New Default Template

Template Post Type: post, page

 */
get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">

			<div class="df">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<div class="meta-info-wrap">
					<div class="author-details">
						<div class="posted-date">
							<span class="by-author"><?php esc_html_e('By','webnews'); ?></span>
							<span class="athr-lnk"><?php the_author_posts_link(); ?></span>
							
							<span class="pub-dt"><?php the_time('F jS, Y')?> <?php echo esc_attr_x( 'AT', 'webnews_theme' ) ?> <?php the_time('g:i A')?></span>
						</div><!-- /.single-posted-date -->
					</div><!-- /.author-details -->
					
				</div>
		</div><!-- /.container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();