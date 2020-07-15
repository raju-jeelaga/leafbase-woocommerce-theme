<?php

/*

Template Name: Home Page

Template Post Type: post, page

*/
global $theme_options;

get_header(); ?>



<div id="primary" class="content-area">

	<main id="main" class="site-main">

		<div class="banner-bg-part">
			<div class="leaf-base-bgimg">
				<?php if(!empty(get_theme_mod( 'leafbasebg-upload'))){?>
					<img src="<?php echo get_theme_mod( 'leafbasebg-upload');?>">
				<?php }else{ ?>
					<img src="<?php echo get_template_directory_uri().'/images/leafbase-bg.png'; ?>">
				<?php } ?>
			</div>
			<div class="container">
				<div class="bgimg-top-cnt">
					<h4><?php echo get_theme_mod('banner-top-text', $theme_options['banner-top-text']['default'])?></h4>
					<a class="shop-now" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">Shop Now</a>
				</div>
			</div>
		</div><!-- /.banner-bg-part -->
		<div class="block-wrap">
			<div class="custom-fields-part">
				<div class="container">
					<ul>
						<li>
							<?php if(!empty(get_theme_mod( 'bs1-img'))){?>
								<img src="<?php echo get_theme_mod( 'bs1-img');?>">
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri().'/images/leafbase-block-img.png'; ?>">
							<?php } ?>
							<h4><?php echo get_theme_mod('bs1-title', $theme_options['bs1-title']['default']);?></h4>
							<p><?php echo get_theme_mod('bs1-textarea', $theme_options['bs1-textarea']['default']);?></p>
							<a href="<?php echo get_theme_mod('bs1-url');?>">
								<?php echo get_theme_mod('bs1-text', $theme_options['bs1-text']['default']);?>
							</a>
						</li>
						<li>
							<?php if(!empty(get_theme_mod( 'bs2-img'))){?>
								<img src="<?php echo get_theme_mod( 'bs2-img');?>">
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri().'/images/leafbase-block-img.png'; ?>">
							<?php } ?>
							<h4><?php echo get_theme_mod('bs2-title', $theme_options['bs2-title']['default']);?></h4>
							<p><?php echo get_theme_mod('bs2-textarea', $theme_options['bs2-textarea']['default']);?></p>
							<a href="<?php echo get_theme_mod('bs2-url');?>">
								<?php echo get_theme_mod('bs2-text', $theme_options['bs2-text']['default']);?>
							</a>
						</li>
						<li>
							<?php if(!empty(get_theme_mod( 'bs3-img'))){?>
								<img src="<?php echo get_theme_mod( 'bs3-img');?>">
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri().'/images/leafbase-block-img.png'; ?>">
							<?php } ?>
							<h4><?php echo get_theme_mod('bs3-title', $theme_options['bs3-title']['default']);?></h4>
							<p><?php echo get_theme_mod('bs3-textarea', $theme_options['bs3-textarea']['default']);?></p>
							<a href="<?php echo get_theme_mod('bs3-url');?>">
								<?php echo get_theme_mod('bs3-text', $theme_options['bs3-text']['default']);?>
							</a>
						</li>
					</ul>
				</div><!-- /.conatiner -->
			</div><!-- /.custom-fields-part -->
			<div class="best-seller-wrap">
				<div class="container">
					<div class="best-seller-cnt">
						<h2>Best Seller</h2>
						<p>Reference site about Lorem Ipsum, giving information on its orgins, as well as a random Lipsum generator</p>
						<a href="#">See all the Customer Stories</a>
					</div>
					
					<div class="product-slider">
						  <?php
						   $slider_prod = get_theme_mod('slider-product');
						   $slider_cat = get_theme_mod('product-cat');

						  	$args=array(
                            'post_status' => 'publish',
                            //'category_name' =>'news',
                            'post_type'=>'product',
                            'posts_per_page' =>$slider_prod,
                             );  
                            if($slider_cat!= 'recent-product'){ 
                            	$args['product_cat'] = $slider_cat;
                            }
                            $my_query = new WP_Query($args);
                            $totalPost = $my_query->post_count;
                            $categoryId = 0;
                            $iCount=1;
                            if( $my_query->have_posts() ) :?>
                            <?php while ($my_query->have_posts()) : $my_query->the_post(); 
                                if($categoryId==0){
                                    $categoryInfo = get_the_category();
                                    $categoryId = $categoryInfo[0]->term_id;
                                } ?>
                                <div class="slider-p">
                                	<a href="<?php echo get_the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
										<h4><?php echo get_the_title(); ?></h4>
									</a>
                            	</div>
                            <?php    
                        	endwhile;
                           endif;
						  ?>
					</div><!-- /.product-lsider -->
					<div class="cnt-w-img-1">
						<img src="<?php echo get_template_directory_uri().'/images/cntn-img1.png'; ?>">
						<div class="cmpns-cnt">
							<h3><?php echo get_theme_mod('cntn1-title', $theme_options['cntn1-title']['default']);?></h3>
							<p><?php echo get_theme_mod('cntn1-textarea', $theme_options['cntn1-textarea']['default']);?></p>
							<a href="<?php echo get_theme_mod('cntn1-url');?>"><?php echo get_theme_mod('cntn1-text', $theme_options['cntn1-text']['default']);?></a>
						</div>
					</div>
					<div class="cnt-w-img-2">
						<div class="cmpns-cnt">
							<h3><?php echo get_theme_mod('cntn2-title', $theme_options['cntn2-title']['default']);?></h3>
							<p><?php echo get_theme_mod('cntn2-textarea', $theme_options['cntn2-textarea']['default']);?></p>
							<a href="<?php echo get_theme_mod('cntn2-url');?>"><?php echo get_theme_mod('cntn2-text', $theme_options['cntn2-text']['default']);?></a>
						</div>
						<img src="<?php echo get_template_directory_uri().'/images/cntn-img2.png'; ?>">
					</div>
				</div><!-- /.container -->
				<div class="product-cat-sec">
					<div class="container">
						<?php 
							$args=array(
						    'post_status' => 'publish',
						    'product_cat' =>'restaurent',
						    'post_type'=>'product',
						    'posts_per_page' =>20,
						     );  
						    $my_query = new WP_Query($args);
						    $totalPost = $my_query->post_count;
						    $categoryId = 0;
						    $iCount=1;
						    $content ='';
						    if( $my_query->have_posts() ) :?>
						    <?php while ($my_query->have_posts()) : $my_query->the_post(); 
						        if($categoryId==0){
						            $categoryInfo = $my_query->get_queried_object()->term_id;
						            $categoryId =  $categoryInfo;
						            
						        }
						        $content .= '<div class="slider-p pro-cat-sec">
						        	<a href="'. get_the_permalink() .'">
										'. get_the_post_thumbnail() .'
										<h4>'. get_the_title().'</h4>
									</a>
						    	</div>';
							endwhile;
						   endif;
						  ?>
						<div class="best-seller-cnt">
							<h2>Restaurant menu</h2>
							<p>Referencesite about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
							<a href="<?php echo get_term_link( $categoryId, 'product_cat' ); ?>">See all menu</a>
						</div>
						<div class="cat-slider">
							<?php echo $content; ?>
						</div>
					</div><!-- /.container -->

				</div><!--/.product-cat-sec -->
			</div><!-- /.best-seller-wrap -->
		</div><!-- /.block-wrap -->
		

	</main><!-- #main -->

</div><!-- #primary -->

<?php

get_footer();



