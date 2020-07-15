<?php

/**

 * The template for displaying search results pages

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result

 *

 * @package telecom-talk

 */



get_header(); ?>



	<section id="primary" class="content-area">

		<main id="main" class="site-main">

			<div class="container">

				<?php if(function_exists('seopress_display_breadcrumbs')) { ?>
					<div class="breadcrumbs">
						<?php seopress_display_breadcrumbs(); ?>
					</div>
				<?php } ?>

				<?php

				if ( have_posts() ) : ?>



					<header class="page-header">

						<h1 class="page-title archive-title"><?php

							/* translators: %s: search query. */

							printf( esc_html__( '%s', 'telecom-talk' ), '<span>' . get_search_query() . '</span>' );

						?></h1>

					</header><!-- .page-header -->

					<div class="archive-loop">

						<?php

						/* Start the Loop */

						while ( have_posts() ) : the_post();



							/**

							 * Run the loop for the search to output the results.

							 * If you want to overload this in a child theme then include a file

							 * called content-search.php and that will be used instead.

							 */

							get_template_part( 'template-parts/content', 'search' );



						endwhile;



					the_posts_navigation();



				else :



					get_template_part( 'template-parts/content', 'none' );



				endif; ?>

					</div>

			</div><!-- /.container -->

		</main><!-- #main -->

	</section><!-- #primary -->



<?php

get_footer();

