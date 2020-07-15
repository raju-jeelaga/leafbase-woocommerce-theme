<?php

/**

 * The template for displaying archive pages

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package telecom-talk

 */



get_header(); ?>



	<div id="primary" class="content-area">

		<main id="main" class="site-main">

			<div class="container">

				

				<?php if(function_exists('seopress_display_breadcrumbs')) { ?>
					<div class="breadcrumbs">
						<?php seopress_display_breadcrumbs(); ?>
					</div>
				<?php } ?>

				<header class="page-header arc">

					<?php

						the_archive_title( '<h1 class="page-title archive-title">', '</h1>' );

						the_archive_description( '<div class="archive-description">', '</div>' );

					?>

				</header><!-- .page-header -->

				<?php

				if ( have_posts() ) : ?>

					<div class="archive-loop">

						<?php

						/* Start the Loop */

						while ( have_posts() ) : the_post(); ?>

							

						<div id="post-<?php the_ID(); ?>" <?php post_class('s-pg'); ?>>

							<?php if ( has_post_thumbnail()) { ?>

							<div class="arc-img">

								<a href="<?php the_permalink();?>">

									<?php  

										$thumb_url = custom_post_thumbnail_resize(get_the_ID(), 340, 200);

										if(!empty($thumb_url)){

											echo '<img src="'.$thumb_url.'" alt="module-4-img">';

										}else{

											echo "";

										}

									?>

								</a>

							</div>

							<?php } ?>

							<div class="arc-content">

								<div class="category-lists">

									<ul class="loop-category">

						           	  <?php 

						              $id = get_the_ID();

						              $cats = get_the_category($id);

						              echo ( count($cats) == 1  ? '' : '');

						              $c = 0; $n = 0;

						              $c = count($cats);

						              foreach ( $cats as $cat ):

						                  $n++; ?>

						                  <li><a href="<?php echo get_category_link($cat->cat_ID); ?>">

						                      <?php echo $cat->name; echo ( $n > 0 && $n < $c ? '' : ''); ?>

						                  </a></li>

						              <?php endforeach; ?> 

						          </ul>

						      	</div><!-- /.category-lists -->

								<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

								<?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>

							</div>

						</div><!-- #post-## -->



						<?php endwhile; 



						the_posts_navigation();



					 else :



						get_template_part( 'template-parts/content', 'none' ); ?>

					</div>		

				<?php endif; ?>

			</div><!-- /.container -->

		</main><!-- #main -->

	</div><!-- #primary -->



<?php

get_footer();

