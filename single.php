<?php

/**

 * The template for displaying all single posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package telecom-talk

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
							<span class="by-author"><?php esc_html_e('By','leafbase'); ?></span>
							<span class="athr-lnk"><?php the_author_posts_link(); ?></span>
							
							<span class="pub-dt"><?php the_time('F jS, Y')?> <?php echo esc_attr_x( 'AT', 'webnews_theme' ) ?> <?php the_time('g:i A')?></span>
						</div><!-- /.single-posted-date -->
					</div><!-- /.author-details -->
					<div class="single-page-pdt">
						<div class="post-cmts">

							<?php comments_popup_link ( __( '0 Comment', 'telecomtalk' ), __( '1 Comment', 'telecomtalk' ), __( '% Comments', 'telecomtalk' )); ?>

						</div><!-- /.post-comments -->
					</div><!-- /.single-page-right -->
				</div>
				
				<div class="single-w-sidebar">
					<div class="single-left">
						<?php  
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content-single', get_post_type() );
						endwhile; // End of the loop.
						?>
					</div>
				</div><!-- /.single-w-sidebar -->
				
			</div>
		</div><!-- /.container -->
	</main><!-- #main -->
</div><!-- #primary -->



<?php

get_footer();

