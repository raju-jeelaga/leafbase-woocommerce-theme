<?php

/**

 * The template for displaying 404 pages (not found)

 *

 * @link https://codex.wordpress.org/Creating_an_Error_404_Page

 *

 * @package telecom-talk

 */



get_header(); ?>



	<div id="primary" class="content-area container">

		<main id="main" class="site-main">



			<section class="error-404 not-found">

				<header class="page-header">

					<h1 class="page-title"><?php esc_html_e( '404 page not found', 'telecom-talk' ); ?></h1>

				</header><!-- .page-header -->



				<div class="page-content">

					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'telecom-talk' ); ?>

					</p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->

				<div class="recent-news">

					<span class="recent-news-text">Recent News</span>

					<div class="archive-loop">

					<?php

						$args=array(

				        'post_status' => 'publish',

				        'posts_per_page' =>6,

				        //'offset' => 4, 

				         );		

				        $my_query = new WP_Query($args);

				        if( $my_query->have_posts() ) :?>

					       <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

								<div id="post-<?php the_ID(); ?>" <?php post_class('s-pg'); ?>>

									<?php if ( has_post_thumbnail()) { ?>

										<div class="arc-img">

											<a href="<?php the_permalink();?>">

												<?php 

													$thumb_url = custom_post_thumbnail_resize(get_the_ID(), 340, 200);

													echo '<img src="'.$thumb_url.'" alt="module-4-img">';

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

							<?php endwhile; ?>

						</div><!-- /.post-list -->

					</div>

					<?php endif; 

						wp_reset_postdata(); ?>

				</div><!-- /.recent-new -->

			</section><!-- .error-404 -->



		</main><!-- #main -->

	</div><!-- #primary -->



<?php

get_footer();

