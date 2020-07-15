<?php

/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query.

 * E.g., it puts together the home page when no home.php file exists.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package telecom-talk

 */



get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main-home">

            <?php if ( wp_is_mobile() ) { 

                // Empty

            } else { ?>

            <div class="slider">

                <div class="container">

                    <div class="single-slider">

                        <?php 

                        $arg = array('posts_per_page'=>4);

                        $allPostIds = getThemeSettingValues('slider_post_ids');

                        if(!empty($allPostIds)){

                            $arg['post__in']=explode(',', $allPostIds); 

                        }

                        $custom_query = new WP_Query($arg); // exclude posts 5

                        while($custom_query->have_posts()) : $custom_query->the_post(); ?>

                                <div class="slider-title"  data-title="<?php echo wp_trim_words( get_the_title(), 8 ).'...'; ?>">

                                    <div class="pst-cat">

                                    <?php 

                                        $category = get_the_category(); 

                                        if($category[0]){

                                        echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';

                                        }

                                        ?>

                                    </div>

                                    <div class="pst-tlt">
                                        <a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 10 ); ?></a>

                                    </div>

                                </div><!-- /.slider-text -->

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); // reset the query ?>

                    </div><!-- /.single-slider -->

                </div><!-- /.container -->

            </div>

            <?php } ?>

            <div class="container">

                <?php if ( get_theme_mod ( 'ads1-enable') ) { ?>

                    <div class="ad1">

                      <?php echo get_theme_mod( 'ads1')?>

                    </div><!-- /# id -->

                <?php } ?>

                <div class="sec">

                    <div class="blk-lft">

                        <h2 CLASS="lst-txt sec-tlt">
                            <span>LATEST ARTICLES </span>
                        </h2>
                            <?php $args=array(
                            'post_status' => 'publish',
                            //'category_name' =>'news',
                            'posts_per_page' =>4,
                             );     
                            $my_query = new WP_Query($args);
                            $totalPost = $my_query->post_count;
                            $categoryId = 0;
                            $iCount=1;
                            if( $my_query->have_posts() ) :?>
                            <?php while ($my_query->have_posts()) : $my_query->the_post(); 
                                if($categoryId==0){
                                    $categoryInfo = get_the_category();
                                    $categoryId = $categoryInfo[0]->term_id;
                                }

                            if($iCount==1){
                                echo '<div class="lst-nws">';
                                 $thumb_url = custom_post_thumbnail_resize(get_the_ID(), 740, 366); ?>
                            <div class="featured-img">
                                <div class="f-img">
                                    <a href="<?php the_permalink() ?>">
                                        <?php if(!empty($thumb_url)){
                                            echo '<img src="'.$thumb_url.'" alt="module-1-img">';
                                        } else{
                                            echo "";
                                        } ?>
                                    </a>
                                </div>
                                <div class="f-cnt">
                                    <span class="cat-lst">
                                        <?php $category = get_the_category(); 
                                        if($category[0]){
                                        echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
                                        } ?>
                                    </span>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"><?php the_title() ;?></a>
                                    </h3>
                                    <div class="author-info">
                                        <span>By</span>
                                        <span class="author-link"><?php the_author_posts_link(); ?></span>
                                        <span class="posted-date"><?php the_time('F jS, Y') ?></span>
                                        <span class="post-comments">
                                            <?php comments_popup_link ( __( '0'.'<span>Comment</span>', 'telecomtalk' ), __( '1'.'<span>Comment</span>', 'telecomtalk' ), __( '%'.'<span>Comments</span>', 'telecomtalk' )); ?>
                                        </span>
                                    </div>
                                    <p><?php echo wp_trim_words( get_the_excerpt(), 35, '...' ); ?></p>
                                </div>
                            </div>
                            <?php 
                             echo '</div>';
                            }else{
                                if( $iCount==2){
                                    echo '<div class="lst-sm-p">';
                                }
                                if( $iCount==3){ 
                                    if ( get_theme_mod ( 'ads2-enable') ) { ?>
                                        <div class="ad2">
                                          <?php echo get_theme_mod( 'ads2')?>
                                        </div><!-- /# id -->
                                    <?php } 
                                } 
								?>
                            <div class="sf-cnt">
                                <span class="cat-lst">
                                    <?php $category = get_the_category(); 
                                    if($category[0]){
                                    echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
                                    } ?>
                                </span>
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title() ;?></a>
                                </h3>
                                <div class="author-info">
                                    <span>By</span>
                                    <span class="author-link"><?php the_author_posts_link(); ?></span>
                                    <span class="posted-date"><?php the_time('F jS, Y') ?></span>
                                    <span class="post-comments">
                                            <?php comments_popup_link ( __( '0'.'<span>Comment</span>', 'telecomtalk' ), __( '1'.'<span>Comment</span>', 'telecomtalk' ), __( '%'.'<span>Comments</span>', 'telecomtalk' )); ?>
                                    </span>
                                </div>
                                <?php $thumb_url = custom_post_thumbnail_resize(get_the_ID(), 120, 90); ?>
                                <div class="smp">
                                    <div class="smp-image">
                                        <a href="<?php the_permalink() ?>">
                                        <?php if(!empty($thumb_url)){
                                            echo '<img src="'.$thumb_url.'" alt="smp-img">';
                                            }else{
                                                echo "";
                                            }?>
                                        </a>
                                    </div>
                                    <p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p>
                                </div>
                            </div>

                            <?php
                            
                             if( $iCount==$totalPost){

                                echo '</div>';

                            } 

                            } $iCount++;
                            endwhile; 
                        endif;?>
                            <?php wp_reset_postdata(); // reset the query ?>
                       <div class="l-m">
                            <?php
                            $link  = '#';
                            if($categoryId!=0){
                               $link = get_category_link( $categoryId ); 
                            }
                            ?>
                            <a href="https://aviationscoop.com/category/news/aviation-news">More News</a>
                        </div>
                        <div class="custom-fld">
                            <h4><span><?php echo get_option('db_lnp_hdng'); ?></span></h4>
                            <div class="csm-flds">
                                <div class="csm-title">
                                    <a href="<?php echo get_option('db_lnp1_url'); ?>" target="_blank">
                                        <span><?php echo get_option('db_lnp1_cat')?></span>
                                        <h5><?php echo get_option('db_lnp1_tlt'); ?></h5>
                                    </a>
                                </div>
                                <div class="csm-image"> 
                                    <?php 
                                         $thumb_url_c = get_option('db_lnp1_img');
                                         $thumb_url_c = tt_aq_resize( $thumb_url_c, 120 , 90 , true, false, true ); ?>
                                    <a href="<?php echo get_option('db_lnp1_url'); ?>" target="_blank">
                                        <img src="<?php echo $thumb_url_c[0]; ?>" alt="custom-image">
                                    </a>
                                </div>
                            </div>
                            <div class="csm-flds">
                                <div class="csm-title">
                                    <a href="<?php echo get_option('db_lnp2_url'); ?>" target="_blank">
                                        <span><?php echo get_option('db_lnp2_cat')?></span>
                                        <h5><?php echo get_option('db_lnp2_tlt'); ?></h5>
                                    </a>
                                </div>
                                <div class="csm-image">
                                    <?php 
                                         $thumb_url_c = get_option('db_lnp2img');
                                         $thumb_url_c = tt_aq_resize( $thumb_url_c, 120 , 90 , true, false, true ); ?>
                                    <a href="<?php echo get_option('db_lnp2_url'); ?>" target="_blank">
                                        <img src="<?php echo $thumb_url_c[0]; ?>" alt="custom-image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="blk-rgt">

                        <?php if ( get_theme_mod ( 'ads3-enable') ) { ?>

                            <div class="ad3">

                              <?php echo get_theme_mod( 'ads3')?>

                            </div><!-- /# id -->

                        <?php } ?>

                        <div class="most-views-posts">

                            <h4 class="v-h sec-tlt-sm"><span>Most Discussed Now</span></h4>

                            <ul class="m-v-c">

                                <?php 

                                $week = date('W');

                                $year = date('Y');

                                $popular = new WP_Query('orderby=comment_count&posts_per_page=4&year=' . $year . '&w=' . $week); 

                                if($popular->found_posts==0){

                                    $popular = new WP_Query('orderby=comment_count&posts_per_page=4'); 

                                }

                                ?>

                                <?php while ($popular->have_posts()) : $popular->the_post(); ?>

                                <li>

                                    <span class="v-tlt">

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                    </span>

                                    <span class="v-cmts">

                                       <?php comments_popup_link ( __( '0'.'<span>Comment</span>', 'telecomtalk' ), __( '1'.'<span>Comment</span>', 'telecomtalk' ), __( '%'.'<span>Comments</span>', 'telecomtalk' )); ?>

                                    </span>

                                </li>

                            <?php endwhile; ?>

                            </ul>

                        </div>
                         <?php if ( wp_is_mobile() ) { 

                            // Empty

                        } else { ?>       
                        <div class="h-reviews">

                           <h4 class="sec-tlt-sm"><span>Recent Reviews</span></h4>

                           <div class="rev-sec">

                            <?php

                                $args=array(

                                'post_status' => 'publish',

                                'category_name' =>'indigo',

                                'posts_per_page' =>4,

                                 );     

                                $my_query = new WP_Query($args);

                                if( $my_query->have_posts() ) :?>

                                <?php while ($my_query->have_posts()) : $my_query->the_post(); 

                                    $thumb_url = custom_post_thumbnail_resize(get_the_ID(), 120, 90); ?>

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

                            </div>

                        </div><!-- /.h-reviews -->
                    <?php } ?>
                        <div class="trending-topics">
                            <h4 class="sec-tlt-sm"><span>TRENDING TOPICS</span></h4>
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
                        </div>
                   </div>

               </div><!-- /sec -->

               <?php if ( get_theme_mod ( 'ads4-enable') ) { ?>

                    <div class="ad4">

                      <?php echo get_theme_mod( 'ads4')?>

                    </div><!-- /# id -->

                <?php } ?>

           </div><!-- /.container -->

           

            <div class="latest-post">
                
                    <div class="container">
                    <div class="trending-now">
                    <h4 class="sec-tlt"><span>Latest News</span></h4>

                       <?php

                       $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        //query_posts(array(
                        $obj = new WP_Query(array(

                            'post_type' => 'post', // You can add a custom post type if you like

                            'paged' => $paged,

                            'category_name' =>'news',

                            'posts_per_page' => 8 // limit of posts

                        )); 

                    if ( $obj->have_posts() ) :  ?>

                        <ul class="trnd-psts">

                            <?php  

                            $i = 1;
                            while ( $obj->have_posts() ) : $obj->the_post();

                                if($i==5){ 

                                     if ( get_theme_mod ( 'ads5-enable') ) { ?>

                                        </ul>

                                        <div class="ad5">

                                          <?php echo get_theme_mod( 'ads5')?>

                                        </div><!-- /# id -->

                                        <ul class="trnd-psts">

                                <?php } 

                                }

                                $thumb_url = custom_post_thumbnail_resize(get_the_ID(), 262, 150); ?>

                                <li>

                                 <div class="latest-img">

                                   <a href="<?php the_permalink() ?>">

                                   <?php if(!empty($thumb_url)){

                                            echo '<img src="'.$thumb_url.'" alt="module-2-img">';

                                        }else{

                                            echo "";

                                        } ?>

                                   </a>

                                   <span class="latest-cat"><?php 

                                        $category = get_the_category(); 

                                        if($category[0]){

                                        echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';

                                        }

                                    ?></span>

                                 </div>

                                 <div class="latest-tlt">

                                    <a href="<?php the_permalink() ?>">

                                        <h2><?php the_title();?></h2>

                                    </a>

                                    <div class="t-ne">

                                        <span class="lst-pst-dt"><?php the_time('F jS, Y') ?></span>

                                        <span class="post-comments">

                                                <?php comments_popup_link ( __( '0'.'<span>Comment</span>', 'telecomtalk' ), __( '1'.'<span>Comment</span>', 'telecomtalk' ), __( '%'.'<span>Comments</span>', 'telecomtalk' )); ?>

                                        </span>

                                    </div>

                                 </div>

                                </li>

                            <?php 

                            $i++;

                            endwhile; ?>

                        </ul>

                        <div class="pag-nav">

                            <?php post_pagination(); 
                            	wp_reset_query();
								wp_reset_postdata();
							?>

                        </div>

                    <?php endif; ?> 
                </div>
            </div><!-- /.container -->
                
            </div><!-- lst-pst -->



            <div class="b-w-s">

                <div class="container">

                    <div class="r-w-s">
                        <div class="h-sidebar fl">
                            <h3 class="sec-tlt-sm"><span>RECENT COMMENTS</span></h3>
                            <ul class="sidb-co">
                                <?php
                                // Get the 5 most recent comments
                                $recent_comments = get_comments( array(
                                    'orderby' => 'comment_date',
                                    'comment_post_ID' => array(),
                                    'number' =>40
                                ) );

                                // If there are any posts with comments
                                if ( count( $recent_comments ) > 0 ) {
                                
                                    // Get the post ID associated with each comment
                                    $post_ids = array();
                                    foreach ( $recent_comments as $comment ){
                                        $post_ids[$comment->comment_post_ID] = $comment->comment_post_ID;
                                        if(count($post_ids)==4){
                                            break;
                                        }
                                    }
                                    // Query for the posts with the IDs collected
                                    foreach($post_ids as $postid){
                                        $popular = new WP_Query( array(
                                            'post__in' =>  array($postid) 
                                        ) );
                                    
                                        // Get your loop on
                                        if ( $popular->have_posts() ) {
                                            while ( $popular->have_posts() ) {
                                                $popular->the_post(); ?>
                                                
                                                <li>
                                                    <div class="cmt-numb">
                                                        <?php comments_popup_link ( __( '0', 'telecomtalk' ), __( '1', 'telecomtalk' ), __( '%', 'telecomtalk' )); ?>
                                                    </div>
                                                    <div class="sid-comt">
                                                        <h4 class="s-tlt">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h4>
                                                        <span class="s-cat">
                                                            <?php 
                                                                $category = get_the_category(); 
                                                                if($category[0]){
                                                                echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
                                                                }
                                                            ?>
                                                        </span>
                                                    </div>
                                                </li>
                                        <?php
                                        }
                                    }
                                }
                            } ?>
                            </ul>
                        </div>
                        <div class="hm-sidebar fl">

                            <h3 class="sec-tlt-sm"><span>FEATURES</span></h3>

                            <div class="features-spec">

                                <ul>

                                    <li><a href="<?php echo get_option('db_f1url'); ?>">

                                        <?php if( get_option('db_f1img') != "" ): 

                                            $thumb_url_2 = get_option('db_f1img');

                                            $thumb_url_2 = tt_aq_resize( $thumb_url_2, 120 , 100 , true, false, true );

                                         ?>

                                        <div class="feature-image">

                                            <img src="<?php echo $thumb_url_2[0]; ?>" alt="ft-img-1">

                                        </div>

                                        <?php endif; 

                                        if( get_option('db_f1title') != "" ):   ?>

                                        <div class="feature-title">

                                            <h4><?php echo get_option('db_f1title'); ?></h4>

                                        </div>

                                    <?php endif; ?>

                                    </a></li>

                                    <li><a href="<?php echo get_option('db_f2url'); ?>">

                                        <?php if( get_option('db_f2img') != "" ):   

                                            $thumb_url_2 = get_option('db_f2img');

                                            $thumb_url_2 = tt_aq_resize( $thumb_url_2, 120 , 100 , true, false, true );

                                        ?>

                                        <div class="feature-image">

                                            <img src="<?php echo $thumb_url_2[0]; ?>" alt="ft-img-2">

                                        </div>

                                        <?php endif; 

                                        if( get_option('db_f2title') != "" ):   ?>

                                        <div class="feature-title">

                                            <h4><?php echo get_option('db_f2title'); ?></h4>

                                        </div>

                                    <?php endif; ?>

                                    </a></li>

                                    <li><a href="<?php echo get_option('db_f3url'); ?>">

                                        <?php if( get_option('db_f3img') != "" ):  

                                            $thumb_url_2 = get_option('db_f3img');

                                            $thumb_url_2 = tt_aq_resize( $thumb_url_2, 120 , 100 , true, false, true );

                                         ?>

                                        <div class="feature-image">

                                            <img src="<?php echo $thumb_url_2[0]; ?>" alt="ft-img-2">

                                        </div>

                                        <?php endif; 

                                        if( get_option('db_f3title') != "" ):   ?>

                                        <div class="feature-title">

                                            <h4><?php echo get_option('db_f3title'); ?></h4>

                                        </div>

                                    <?php endif; ?>

                                    </a></li>

                                    <li><a href="<?php echo get_option('db_f4url'); ?>">

                                        <?php if( get_option('db_f4img') != "" ):   

                                            $thumb_url_2 = get_option('db_f4img');

                                            $thumb_url_2 = tt_aq_resize( $thumb_url_2, 120 , 100 , true, false, true );

                                        ?>

                                        <div class="feature-image">

                                            <img src="<?php echo $thumb_url_2[0]; ?>" alt="ft-img-2">

                                        </div>

                                        <?php endif; 

                                        if( get_option('db_f4title') != "" ):   ?>

                                        <div class="feature-title">

                                            <h4><?php echo get_option('db_f4title'); ?></h4>

                                        </div>

                                    <?php endif; ?>

                                    </a></li>

                                </ul>

                            </div>
                        </div>
                        <div class="video-part fl">

                            <?php if( get_option('db_chckbx') =='true'){ ?>

                                <h3 class="sec-tlt-sm"><span>Latest Videos</span></h3>

                                <div class="vdo-sec">

                                    <div class="vdo-1">

                                        <a rel="nofollow" href="<?php echo get_option('db_videourl'); ?>" target="_blank">

                                            <?php if( get_option('db_bigimg') != "" ):   

                                                $thumb_url_2 = get_option('db_bigimg');

                                                $thumb_url_2 = tt_aq_resize( $thumb_url_2, 380 , 200 , true, false, true );

                                            ?>

                                                <div class="vd-img">

                                                    <img src="<?php echo $thumb_url_2[0]; ?>" alt="Video-1">

                                                </div>

                                            <?php endif; 

                                            if( get_option('db_bigtitle') != "" ):   ?>               

                                                <div class="vd-tlt">

                                                    <h3><?php echo get_option('db_bigtitle'); ?></h3>

                                                </div>

                                            <?php endif; ?>    

                                        </a>                            

                                    </div>

                                    <a rel="nofollow" href="<?php echo get_option('db_sm1videourl'); ?>" target="_blank">

                                        <div class="vdo-2">

                                            <?php if( get_option('db_sm1img') != "" ):  

                                                $thumb_url_2 = get_option('db_sm1img');

                                                $thumb_url_2 = tt_aq_resize( $thumb_url_2, 118 , 94 , true, false, true );

                                             ?>

                                                <div class="vd1-img">

                                                    <img src="<?php echo $thumb_url_2[0]; ?>" alt="Video-2">

                                                </div>

                                            <?php endif; 

                                            if( get_option('db_sm1title') != "" ):   ?>

                                                <h4 class="vd-2-tlt"><?php echo get_option('db_sm1title'); ?></h4>

                                            <?php endif; ?>

                                        </div>

                                    </a>

                                    <a rel="nofollow" href="<?php echo get_option('db_sm2videourl'); ?>" target="_blank">

                                        <div class="vdo-2">

                                            <?php if( get_option('db_sm1img') != "" ): 

                                                $thumb_url_2 = get_option('db_sm2img');

                                                $thumb_url_2 = tt_aq_resize( $thumb_url_2, 118 , 94 , true, false, true );

                                              ?>

                                                <div class="vd1-img">

                                                    <img src="<?php echo $thumb_url_2[0]; ?>" alt="Video-3">

                                                </div>

                                            <?php endif; 

                                            if( get_option('db_sm1title') != "" ):   ?>

                                                <h4 class="vd-2-tlt"><?php echo get_option('db_sm2title'); ?></h4>

                                            <?php endif; ?>

                                        </div>

                                    </a>

                                </div>

                            <?php } else { ?>

                               <?php if ( get_theme_mod ( 'ads10-enable') ) { ?>

                                    <div class="ad10">

                                      <?php echo get_theme_mod( 'ads10')?>

                                    </div><!-- /# id -->

                                <?php } ?>

                            <?php } ?>
                        </div>
                    </div>

                </div><!-- /.container -->

            </div><!-- /.b-w-s -->

        </main><!-- #main -->

    </div><!-- #primary -->



<?php get_footer();

