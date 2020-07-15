<?php

/**

 * Accelerated Mobile Pages functions and definitions

 *

 * @link https://developer.wordpress.org/themes/basics/theme-functions/

 *

 * @package telecom-talk

 */



if ( ! function_exists( 'leafbase_setup' ) ) :

	/**

	 * Sets up theme defaults and registers support for various WordPress features.

	 *

	 * Note that this function is hooked into the after_setup_theme hook, which

	 * runs before the init hook. The init hook is too late for some features, such

	 * as indicating support for post thumbnails.

	 */

add_action('wp_enqueue_scripts', 'telecom_frontend_script');

function telecom_frontend_script(){
    
    wp_enqueue_style('slick', get_template_directory_uri() .'/css/slick.css'); 

	wp_enqueue_style('slick-theme', get_template_directory_uri() .'/css/slick-theme.css');

	wp_enqueue_style('font-awesome.min', get_template_directory_uri() .'/css/all.css');
}

	function leafbase_setup() {

		/*

		 * Make theme available for translation.

		 * Translations can be filed in the /languages/ directory.

		 * If you're building a theme based on Accelerated Mobile Pages, use a find and replace

		 * to change 'telecom-talk' to the name of your theme in all the template files.

		 */

		load_theme_textdomain( 'telecom-talk', get_template_directory() . '/languages' );



		// Add default posts and comments RSS feed links to head.

		add_theme_support( 'automatic-feed-links' );



		/*

		 * Let WordPress manage the document title.

		 * By adding theme support, we declare that this theme does not use a

		 * hard-coded <title> tag in the document head, and expect WordPress to

		 * provide it for us.

		 */


		add_theme_support( 'title-tag' );

		/*

		 * Enable support for Post Thumbnails on posts and pages.

		 *

		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

		 */

		add_theme_support( 'post-thumbnails' );

			// add_image_size( 'module-1', 740, 366, true );

			// add_image_size( 'module-2', 262, 150, true );

			// add_image_size( 'module-3', 120, 90, true );

			// add_image_size( 'module-4', 340, 200, true );

			// add_image_size( 'module-5', 230, 135, true );



		// This theme uses wp_nav_menu() in one location.

		register_nav_menus( array(


			'primary_nav' => esc_html__( 'Primary', 'leaf-base' ),

			'footer-menu' => esc_html__( 'Footer', 'leaf-base' ),

			'mobile-menu'   	=> esc_html__( 'Mobile Menu', 'leaf-base' ),

		) );



		/*

		 * Switch default core markup for search form, comment form, and comments

		 * to output valid HTML5.

		 */

		add_theme_support( 'html5', array(

			'search-form',

			'comment-form',

			'comment-list',

			'gallery',

			'caption',

		) );



		// Set up the WordPress core custom background feature.

		// Add theme support for selective refresh for widgets.

		add_theme_support( 'customize-selective-refresh-widgets' );
		/**

		 * Add support for core custom logo.

		 *

		 * @link https://codex.wordpress.org/Theme_Logo

		 */

		add_theme_support( 'custom-logo', array(

			'height'      => 250,

			'width'       => 250,

			'flex-width'  => true,

			'flex-height' => true,

		) );

	}

endif;

add_action( 'after_setup_theme', 'leafbase_setup' );



/**

 * Set the content width in pixels, based on the theme's design and stylesheet.

 *

 * Priority 0 to make it available to lower priority callbacks.

 *

 * @global int $content_width

 */

function leafbase_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'leafbase_content_width', 640 );

}

add_action( 'after_setup_theme', 'leafbase_content_width', 0 );



/**

 * Register widget area.

 *

 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

 */

function leafbase_widgets_init() {



	register_sidebar( array(

		'name'          => esc_html__( 'Sidebar', 'webnews' ),

		'id'            => 'sidebar-1',

		'description'   => esc_html__( 'Add widgets here.', 'webnews' ),

		'before_widget' => '<section class="widget %2$s">',

		'after_widget'  => '</section>',

		'before_title'  => '<h3 class="widget-title"><span>',

		'after_title'   => '</span></h4>',

	) );



	register_sidebar( array(

		'name'          => esc_html__( 'Archives', 'telecom-talk' ),

		'id'            => 'archives-sidebar',

		'description'   => esc_html__( 'Add widgets here.', 'telecom-talk' ),

		'before_widget' => '<section id="%1$s" class="widget %2$s arch">',

		'after_widget'  => '</section>',

		'before_title'  => '<h3 class="widget-title"><span>',

		'after_title'   => '</span></h3>',

	) );



}

add_action( 'widgets_init', 'leafbase_widgets_init' );



/**

 * Enqueue scripts and styles.

 */

function leafbase_scripts() {

	// wp_enqueue_style( 'telecom-talk-style', get_stylesheet_uri() );

	wp_enqueue_style( 'footercss', get_template_directory_uri() . '/footer.min.css');



	//wp_enqueue_script( 'jquery' );

	wp_deregister_script( 'jquery' );

    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );

    wp_enqueue_script( 'jquery' );

    

    wp_deregister_script( 'jquery-migrate' );

    wp_register_script( 'jquery-migrate', includes_url( '/js/jquery/jquery-migrate.js' ), false, NULL, true );

    wp_enqueue_script( 'jquery-migrate' );



	// wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), '', true );

  // <script type="text/javascript" src="_ui/js/slick.js"></script>

  //   <script type="text/javascript" src="_ui/js/slick.min.js"></script>

	 wp_enqueue_script( 'drawer-min', get_template_directory_uri() . '/js/drawer.min.js', array( 'jquery' ), '', true );

	 wp_enqueue_script( 'iscroll', get_template_directory_uri() . '/js/iscroll.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'telecom-talk-navigation', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );

	// wp_enqueue_script( 'telecom-talk-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style( 'tn-style', get_stylesheet_uri() );



	



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );

	}

}

add_action( 'wp_enqueue_scripts', 'leafbase_scripts' );



/**

 * Custom template tags for this theme.

 */

require get_template_directory() . '/inc/template-tags.php';



/**

 * Functions which enhance the theme by hooking into WordPress.

 */

require get_template_directory() . '/inc/template-functions.php';



/**

 * Customizer additions.

 */

require get_template_directory() . '/inc/customizer.php';





/**

 * Filter the except length to 20 words.

 *

 * @param int $length Excerpt length.

 * @return int (Maybe) modified excerpt length.

 */

function leafbase_custom_excerpt_length( $length ) {

    return 40;

}

add_filter( 'excerpt_length', 'leafbase_custom_excerpt_length', 999 );





add_action( 'tgmpa_register', 'leafbase_register_required_plugins' );

/**

 * Register the required plugins for this theme.

 * The variable passed to tgmpa_register_plugins() should be an array of plugin

 * arrays.

 *

 * This function is hooked into tgmpa_init, which is fired within the

 * TGM_Plugin_Activation class constructor.

 */

function leafbase_register_required_plugins() {

	/*

	 * Array of plugin arrays. Required keys are name and slug.

	 * If the source is NOT from the .org repo, then source is also required.

	 */

	$plugins = array(



	array(

			'name'      => 'Accelerated Mobile Pages',

			'slug'      => 'telecom-talk',

			'required'  => false,

		),

	);



	/*

	 * Array of configuration settings. Amend each line as needed.

	 *

	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard

	 * strings available, please help us make TGMPA even better by giving us access to these translations or by

	 * sending in a pull-request with .po file(s) with the translations.

	 *

	 * Only uncomment the strings in the config array if you want to customize the strings.

	 */

	$config = array(

		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.

		'default_path' => '',                      // Default absolute path to bundled plugins.

		'menu'         => 'tgmpa-install-plugins', // Menu slug.

		'parent_slug'  => 'themes.php',            // Parent menu slug.

		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.

		'has_notices'  => true,                    // Show admin notices or not.

		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.

		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.

		'is_automatic' => true,                   // Automatically activate plugins after installation or not.

		'message'      => '',                      // Message to output right before the plugins table.



	);



	tgmpa( $plugins, $config );

}





add_action( 'init', 'leafbase_add_editor_styles' );

/**

 * Apply theme's stylesheet to the visual editor.

  * @uses add_editor_style() Links a stylesheet to visual editor

 */

function leafbase_add_editor_styles() {

	add_editor_style( 'custom-editor-style.css');

}



function  webnews_excerpt_length($number) { 

  $content = '';

  if(has_excerpt()){

    $content = get_the_excerpt();

  }else{

    $content = get_the_content();

  }

  return  wp_trim_words( strip_shortcodes( $content ) , $number  );

}





require_once get_template_directory().'/admin/options.php';



if ( ! function_exists( 'post_pagination' ) ) :

   function post_pagination() {

     global $wp_query;

     $pager = 999999999999; // need an unlikely integer
    
 //    $big = 234234; // need an unlikely integer

	// echo paginate_links( array(
	// 	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	// 	'format' => '?paged=%#%',
	// 	'current' => max( 1, get_query_var('paged') ),
	// 	'total' => $loop->max_num_pages
	// ) );
    /*$args= array(

				'post_type' => 'post', // You can add a custom post type if you like
				//'posts_per_page' => 8 // limit of posts
				);
$wp_query = new WP_Query( $args );*/

        echo paginate_links( array(

             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),

             'format' => '?paged=%#%',

             'current' => max( 1, get_query_var('paged') ),

             'total' => $wp_query->max_num_pages

        ) );


   }

endif;





add_filter( 'get_the_archive_title', function ($title) {



    if ( is_category() ) {



            $title = single_cat_title( '', false );



        } elseif ( is_tag() ) {



            $title = single_tag_title( '', false );



        } elseif ( is_author() ) {



            $title = '<span class="vcard">' . get_the_author() . '</span>' ;



        }



    return $title;



});



// customizer options panel

	function newspapertimes_demo_styles() {

		

	}

	if ( file_exists ( get_template_directory() . '/inc/customizer-library/customizer-library.php' ) ) :



	// Helper library for the theme customizer.

	require get_template_directory() . '/inc/customizer-library/customizer-library.php';



	// Define options for the theme customizer.

	require get_template_directory() . '/inc/customizer-options.php';

	

	require get_template_directory() . '/inc/tt_aq_resize.php';



	else :



	add_action( 'customizer-library-notices', 'newspapertimes_demo_customizer_library_notice' );



	endif;



function custom_post_thumbnail_resize( $post_id, $width = 262 , $height = 150 ){

	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'large', false );

    $thumb_url_2 = $image[0];

    if($thumb_url_2){

    	$thumb_url_2 = tt_aq_resize( $thumb_url_2, $width , $height , true, false, true );

    	return $thumb_url_2[0];

    }

}


function techblog_checkContentLength(){
	global $post;
	$checklength = sizeof(explode(" ", $post->post_content));//esc_html($content);
	if($checklength < 250){
		return false;
	}else{
		return true;
	}	
}

add_action("the_content", "techblog_the_content_ads");

function techblog_the_content_ads($content){
	global $post;
	/*$checklength = sizeof(explode(" ", $content));//esc_html($content);

	if($checklength < 150){

		return $content;

	}*/

	if(!techblog_checkContentLength()){
		return $content;
	}
	$template = get_post_meta( $post->ID, '_wp_page_template', true );

	if($template == 'default' || $template == 'templates/full-width.php' || $template == 'templates/custom-template.php'){ return $content; }
	
	if (!get_theme_mod ( 'ads9-enable') ) { 
		return $content;
	 } 

	$break_point = '</p>';

	$content_parts = explode($break_point, $content);

	array_walk($content_parts, function(&$value, $key) {

		 	$value = trim($value);

			if( !empty($value) && strpos($value, "<p>")!==false ){

			         $value .= '</p>';

			}

		}

	);

	if(count($content_parts)>2){

		$no_of_parts = count($content_parts);

		$insertedAds = get_theme_mod( 'ads9');
		
		$part1 = array_slice( $content_parts, 0, 2 ); 
		$part2 = array_slice( $content_parts, 2, count($content_parts) ); 
		if ( !is_amp_endpoint() ) {
			$part1[] = "<div class='ad9'>".$insertedAds. "</div>";
		}
		$content_parts = array_merge($part1,$part2);
		

		$final_content ='';

		$final_content .= implode("", $content_parts);

		$content = $final_content;

	}



	return $content;

}



add_action( 'show_user_profile', 'show_extra_profile_fields', 10 );

add_action( 'edit_user_profile', 'show_extra_profile_fields', 10 );

function show_extra_profile_fields( $user ) { ?>

	<h3><?php _e('Extra Profile Information'); ?></h3>

	<table class="form-table">

		<tr>
			<th><label for="designation"><?php _e('Designation'); ?></label></th>
			<td>
				<input type="text" name="designation" id="designation" value="<?php echo esc_attr( get_user_meta( $user->ID, 'designation', true ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter the designation.'); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="social-profile"><?php _e('Twitter Profile Link'); ?></label></th>
			<td>
				<input type="text" name="twitterprofilelink" id="twitterprofilelink" value="<?php echo esc_attr( get_user_meta( $user->ID, 'twitterprofilelink', true ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter the Twitter Profile Link.'); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="social-profile"><?php _e('Linkedin Username'); ?></label></th>
			<td>
				<input type="text" name="linkedusername" id="linkedusername" value="<?php echo esc_attr( get_user_meta( $user->ID, 'linkedusername', true ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter the Linkedin Username'); ?></span>
			</td>
		</tr>
	</table>

<?php }

add_action( 'personal_options_update', 'save_extra_profile_fields' );

add_action( 'edit_user_profile_update', 'save_extra_profile_fields' );

function save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) ) return false;
	
	update_user_meta( $user_id, 'designation', trim(esc_attr( $_POST['designation'] )) );
	update_user_meta( $user_id, 'twitterprofilelink', trim(esc_attr( $_POST['twitterprofilelink'] )) );
	update_user_meta( $user_id, 'linkedusername', trim(esc_attr( $_POST['linkedusername'] )) );

}


// Custom post title 
function info_posts( $post_type, $post ) {
    add_meta_box(
        'intro_post',               // $id
        'Post Subtitle',     // $title
        'meta_info',                // $callback
        'post',                     // $page
        'advanced',                   // $context
        'default');                    // $priority
}
add_action('add_meta_boxes', 'info_posts', 10, 2);

function meta_info() {
    global $post;  
    $meta = get_post_meta($post->ID, 'intro_post', true);
    echo '<input type="hidden" name="info_post" value="'.wp_create_nonce(basename(__FILE__)).'" />';  
    echo '<table class="form-table sub-t">';           
        echo '<tr>
        <td>
        	<input type="text" name="intro_post" value="'.$meta.'" id="intro_post" style="margin-top: 0px;width: 100%;resize:none;font-size: 20px;"></textarea>
        </td>
            </tr>';
    echo '</table>';
}
function guardar_intro($post_id) {   
    if (!wp_verify_nonce($_POST['info_post'], basename(__FILE__)))
        return $post_id;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;

    if ('page' == $_POST['post_type'] || 'post' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }  

    $old = get_post_meta($post_id, "intro_post", true);
    $new = $_POST["intro_post"];

    if ($new && $new != $old) {
        update_post_meta($post_id, "intro_post", $new);
    } elseif ('' == $new && $old) {
        delete_post_meta($post_id, "intro_post", $old);
    }
}
add_action('save_post', 'guardar_intro');


add_action('edit_form_after_title', function() {
    global $post, $wp_meta_boxes;
    do_meta_boxes(get_current_screen(), 'advanced', $post);
    unset($wp_meta_boxes[get_post_type($post)]['advanced']);
});

function remove_nofollow($return, $author, $comment_ID) {
        $return= preg_replace("/(<a[^>]*[^\s])(\s*nofollow\s*)/i", "$1", $return);
        $return= preg_replace("/(<a[^>]*[^\s])(\s*rel=[\"\']\s*[\"\'])/i", "$1", $return);
        return $return;
}
add_filter( 'get_comment_author_link', 'remove_nofollow', 10, 3);

// Exclude Category Posts from Home Page
function themeprefix_exclude_category( $query ) {
	if ( $query->is_home() ) {
	$query->set( 'cat', '-900' );//add your category number
	}
	return $query;
}
add_action( 'pre_get_posts', 'themeprefix_exclude_category' );


