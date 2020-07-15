<?php

/**

 * The template for displaying archive pages

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package webnews

 */



get_header(); ?>



<div class="single-page-shadow">

	<div class="container">

		<div class="content-area">

			<div class="archive-news-cat">

				<div class="ar-news">

					<div class="archive-news">

						<?php 

		                if ( is_author() ) { 

		                   the_archive_title( '<h1 class="page-title">', '</h1>' );

		                ?>   <div class="author-info">

		                       <div class="author-image">

		                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>

		                       </div><!-- /.author-image -->

		                      <div class="author-description">

		                        <!-- <h4><?php the_author_posts_link(); ?></h4> -->

		                        <p><?php the_author_meta('description'); ?></p>

		                      </div><!-- /.author-description -->

		                    </div><!-- /.author-info -->

		               <?php  } else { ?> 

						<header class="page-header">

							<?php

								echo '<h1 class="page-title">';single_cat_title();echo '</h1>';

								// the_archive_description( '<div class="archive-description">', '</div>' );

							?>

						</header><!-- .page-header -->

						<?php } ?>

					</div><!-- /.archive-header -->

					<?php if(function_exists('seopress_display_breadcrumbs')) { ?>
						<div class="breadcrumbs">
							<?php seopress_display_breadcrumbs(); ?>
						</div>
					<?php } ?>

					<div class="post-wrapper news-categ">

						<?php

						if ( have_posts() ) : 

							/* Start the Loop */

							while ( have_posts() ) : the_post();



							get_template_part( 'template-parts/content', 'archive-news' );



							endwhile; ?>

							<div class="pag-nav">

	                            <?php post_pagination(); ?>

	                        </div>

					    	<?php else : ?>

						    <div class="no-posts">

						    	<span><?php esc_html_e ('no posts are Avaliable', 'telecomtalk' ); ?></span>

						    </div><!-- /.no-posts -->

				       <?php endif; ?>

			    	</div><!-- /.post-wrapper -->

			    </div><!-- /.ar-news -->

			    <?php get_sidebar(); ?>

			</div><!-- /.archive-page-->

		</div><!-- .content-area -->

	</div><!-- /.container -->

</div><!-- /.single-page-shadow-->

</div>

<?php

get_footer();

