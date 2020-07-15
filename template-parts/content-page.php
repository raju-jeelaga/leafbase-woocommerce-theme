<?php

/**

 * The template part for displaying single posts

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */

?>

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

		
	</div><!-- /.single-page-post-info -->
	<div class="artl">
		<?php the_content(); ?>
	</div>
	
	
</div>



