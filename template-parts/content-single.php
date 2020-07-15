<?php

/**

 * The template part for displaying single posts

 *

 * @package WordPress

 * @subpackage Twenty_Sixteen

 * @since Twenty Sixteen 1.0

 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="artl">
		<?php the_content(); ?>
		<div id="nav-below" class="post-pagi">
			<div class="nav-previous">
				<?php previous_post_link( '%link', '%title' ); ?>
			</div>
			<div class="nav-next">
				<?php next_post_link( '%link', '%title' ); ?>
			</div>
		</div>

		<div class="rcs">
	       <?php if ( comments_open() || get_comments_number() ) :
				comments_template();
				endif; ?>
		</div>
	</div><!-- .artl -->

</article><!-- #post-## -->

