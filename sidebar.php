<?php

/**

 * The sidebar containing the main widget area

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package telecom-talk

 */



// if ( ! is_active_sidebar( 'sidebar-1' ) ) {

// 	return;

// }

?>



<aside id="secondary" class="widget-area">
	<?php if ( get_theme_mod ( 'ads3-enable') && techblog_checkContentLength() ) { ?>
        <div class="ad3">
          <?php echo get_theme_mod( 'ads3')?>
        </div>
    <?php } ?>
	<section class="widget">

	<?php $comments = get_comments('status=approve&number=5&order=DESC'); 
         //get_comment_date( $d, $comment_ID ); 
        ?>

		<h3 class="widget-title"><span>Recent Discussions</span></h3>

		<ul class="widget recent-comments">

		<?php foreach ($comments as $comment) { ?>

		    <li class="recent-comments-wrapper">

		    	<div class="re-comment-image">

		    		<a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>"> <?php

		        	$title = get_the_title($comment->comment_post_ID);?>

		        	</a>

					<div class="recent-comments-content">

						<a href="<?php echo get_permalink($comment->comment_post_ID); ?>#comment-<?php echo $comment->comment_ID; ?>">

				        <?php echo '<span class="recent-comments-author">' . ($comment->comment_author) . '</span>';

				        ?></a>

				        <span class="rec-dt"><?php  get_comment_date(); ?> <?php echo esc_attr_x( 'AT', 'webnews_theme' ) ?> <?php the_time('g:i A')?></span>

		         		

		         	</div>

		   		</div>

		     	<div class="re-comment"> 

		     		<a href="<?php echo get_permalink($comment->comment_post_ID); ?>" rel="external" title="<?php echo $title; ?>"> 

		     		<!-- <div class="re-cmt">

		     			<?php //echo substr($comment->comment_content, 0, 80 )."..."; ?>

		     		</div> -->

		          	<div class="recent-comments-title">

		          		<span class="lbl">Posted in</span>

		          		<span><?php echo $title; ?> </span>

           			</div>

           			</a>

       			</div>

		    </li>

		<?php }  ?>

		</ul>

		<!-- <a class="activity-button" target="_blank" href="<?php //echo get_permalink( get_page_by_title( 'activity' ) ) ?>">Activity</a> -->

	</section>
	<section class=" widget trending-topics">
            <!-- <h4 class="sec-tlt-sm"><span>TRENDING TOPICS</span></h4> -->
            <h3 class="widget-title"><span>TRENDING TOPICS</span></h3>
            <ul>
                 <?php if( get_option('db_tt-1') != "" ): ?>
                <li>
                    <a href="<?php echo get_option('db_tt1_url'); ?>"><span>#</span><?php echo get_option('db_tt-1'); ?></a>
                </li>
            <?php endif; 
                if( get_option('db_tt-2') != "" ): ?>
                <li>
                    <a href="<?php echo get_option('db_tt2_url'); ?>"><span>#</span><?php echo get_option('db_tt-2'); ?></a>
                </li>
             <?php endif; 
                if( get_option('db_tt-3') != "" ): ?>
                <li>
                    <a href="<?php echo get_option('db_tt3_url'); ?>"><span>#</span><?php echo get_option('db_tt-3'); ?></a>
                </li>
             <?php endif; 
                if( get_option('db_tt-4') != "" ): ?>
                <li>
                    <a href="<?php echo get_option('db_tt4_url'); ?>"><span>#</span><?php echo get_option('db_tt-4'); ?></a>
                </li>
             <?php endif; 
                if( get_option('db_tt-5') != "" ): ?>
                <li>
                    <a href="<?php echo get_option('db_tt5_url'); ?>"><span>#</span><?php echo get_option('db_tt-5'); ?></a>
                </li>
            <?php endif; 
                if( get_option('db_tt-6') != "" ): ?>
                <li>
                    <a href="<?php echo get_option('db_tt6_url'); ?>"><span>#</span><?php echo get_option('db_tt-6'); ?></a>
                </li>
             <?php endif; 
                if( get_option('db_tt-7') != "" ): ?>
                <li>
                    <a href="<?php echo get_option('db_tt7_url'); ?>"><span>#</span><?php echo get_option('db_tt-7'); ?></a>
                </li>
             <?php endif; 
                if( get_option('db_tt-8') != "" ): ?>
                <li>
                    <a href="<?php echo get_option('db_tt8_url'); ?>"><span>#</span><?php echo get_option('db_tt-8'); ?></a>
                </li>
             <?php endif;  ?>
            </ul>
    </section>

	<section class="widget sidebar-recent-reviews">

		<h3 class="widget-title"><span>Recent Reviews</span></h3>

		<?php

        $args=array(

        'post_status' => 'publish',

        'category_name' =>'indigo',

        'posts_per_page' =>4,

         );     

        $my_query = new WP_Query($args);

        if( $my_query->have_posts() ) :?>

        <?php while ($my_query->have_posts()) : $my_query->the_post(); 

        	 $thumb_url = custom_post_thumbnail_resize(get_the_ID(), 120, 90);

        	?>

            <div class="review-pst">

                <div class="rev-img">

                   <a href="<?php the_permalink() ?>">

                        <?php if(!empty($thumb_url)){

                        echo '<img src="'.$thumb_url.'" alt="module-3-img">';

                        }else{

                            echo "";

                        }?>

                    </a>

                </div>

                <div class="rev-tlt">

                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                </div>

            </div><!-- /.review-pst -->

        <?php endwhile; 

   	 	endif; wp_reset_postdata(); ?>

	</section>

	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>



	<?php if( get_option('db_cat-chckbx') =='true'){ ?>

	<section class="widget sidebar-category">

		<h3 class="widget-title"><span>Categories</span></h3>

		<ul>

			<li>

				<a href="<?php echo get_option('db_cat1_url'); ?>"><?php echo get_option('db_cat1_nme'); ?></a>

			</li>

			<li>

				<a href="<?php echo get_option('db_cat2_url'); ?>"><?php echo get_option('db_cat2_nme'); ?></a>

			</li>

			<li>

				<a href="<?php echo get_option('db_cat3_url'); ?>"><?php echo get_option('db_cat3_nme'); ?></a>

			</li>

			<li>

				<a href="<?php echo get_option('db_cat4_url'); ?>"><?php echo get_option('db_cat4_nme'); ?></a>

			</li>

			<li>

				<a href="<?php echo get_option('db_cat5_url'); ?>"><?php echo get_option('db_cat5_nme'); ?></a>

			</li>

			<li>

				<a href="<?php echo get_option('db_cat6_url'); ?>"><?php echo get_option('db_cat6_nme'); ?></a>

			</li>

		</ul>

	</section>

<?php } ?>

</aside><!-- #secondary -->

