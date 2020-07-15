<?php

/**

 * Defines customizer options

 *

 * @package Customizer Library Demo

 */



function customizer_library_demo_options() {



	// Theme defaults

	// $primary_color = '#5bc08c';

	// $secondary_color = '#666';



	// Stores all the controls that will be added

	$options = array();



	// Stores all the sections to be added

	$sections = array();



	// Stores all the panels to be added

	$panels = array();



	// Adds the sections to the $options array

	$options['sections'] = $sections;



// Theme Option section //

  $section = 'Theme-Option-panel-section';

  //Header Top Section
  	$section = 'header-top-text';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Header Top Section', 'leafbase' ),
		'priority' => '99',
		//'panel' => $panel
	);

	$options['header-top-text'] = array(
		'id' => 'header-top-text',
		'label'   => __( 'Header Top Text', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'Free Nationwide Shipping on All Orders',
	);


	// Background Banner Image
	$section = 'leafbasebg-upload';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Banner Section', 'leafbase' ),
		'priority' => '99',
		//'panel' => $panel
	);

	$options['leafbasebg-upload'] = array(
		'id' => 'leafbasebg-upload',
		'label'   => __( 'Banner Background Image', 'leafbase' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['banner-top-text'] = array(
		'id' => 'banner-top-text',
		'label'   => __( 'Banner Top Text', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'Shop Our New & Improved Broad Spectrum CBD Oil Line',
	);

	// Block Section 1 
	$section = 'block-section-1';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Block Section 1', 'leafbase' ),
		'priority' => '99',
	);

	//BS1
	$options['bs1-img'] = array(
		'id' => 'bs1-img',
		'label'   => __( 'Block-1 Image', 'leafbase' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['bs1-title'] = array(
		'id' => 'bs1-title',
		'label'   => __( 'Block-3 Title', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'Our menu',
	);

	$options['bs1-textarea'] = array(
		'id' => 'bs1-textarea',
		'label'   => __( 'Block-1 Textarea', 'leafbase' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => __( 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting', 'leafbase'),
	);
	$options['bs1-text'] = array(
		'id' => 'bs1-text',
		'label'   => __( 'Block-1 Text', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Read more', 'leafbase' ),
	);
	$options['bs1-url'] = array(
		'id' => 'bs1-url',
		'label'   => __( 'Block-1 URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);
		// Block Section 1 
	$section = 'block-section-2';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Block Section 2', 'leafbase' ),
		'priority' => '99',
	);

	// BS2
	$options['bs2-img'] = array(
		'id' => 'bs2-img',
		'label'   => __( 'Block-2 Image', 'leafbase' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['bs2-title'] = array(
		'id' => 'bs2-title',
		'label'   => __( 'Block-2 Title', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'Delivery',
	);
	$options['bs2-textarea'] = array(
		'id' => 'bs2-textarea',
		'label'   => __( 'Block-2 Textarea', 'leafbase' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => __( 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting', 'leafbase'),
	);
	$options['bs2-text'] = array(
		'id' => 'bs2-text',
		'label'   => __( 'Block-2 Text', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Read more', 'leafbase' ),
	);
	$options['bs2-url'] = array(
		'id' => 'bs2-url',
		'label'   => __( 'Block-2 URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);

	// BS3
	$section = 'block-section-3';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Block Section 3', 'leafbase' ),
		'priority' => '99',
	);
	$options['bs3-img'] = array(
		'id' => 'bs3-img',
		'label'   => __( 'Block-3 Image', 'leafbase' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['bs3-title'] = array(
		'id' => 'bs3-title',
		'label'   => __( 'Block-3 Title', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'Our rewards',
	);
	$options['bs3-textarea'] = array(
		'id' => 'bs3-textarea',
		'label'   => __( 'Block-3 Textarea', 'leafbase' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => __( 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting', 'leafbase'),
	);
	$options['bs3-text'] = array(
		'id' => 'bs3-text',
		'label'   => __( 'Block-3 Text', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Read more', 'leafbase' ),
	);
	$options['bs3-url'] = array(
		'id' => 'bs3-url',
		'label'   => __( 'Block-3 URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);

	// BS3
	$section = 'woo-products';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Products Section', 'leafbase' ),
		'priority' => '99',
	);
	$options['slider-product'] = array(
		'id' => 'slider-product',
		'label'   => __( 'Number of Products', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 16,
	);
	$choices = array(
		'recent-product' => 'Recent Products',
	);
		$cat_args = array(
		    'orderby'    => 'name',
		    'order'      => 'asc',
		    'hide_empty' => false,
		);
		 
		$product_categories = get_terms( 'product_cat', $cat_args );
		 
		if( !empty($product_categories) ){
		    
		    foreach ($product_categories as $key => $category) {

		    	$choices[$category->slug] = $category->name;
		       
		    }
		}

	$options['product-cat'] = array(
		'id' => 'product-cat',
		'label'   => __( 'Product Category', 'leafbase' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $choices,
		'default' => 'recent-product'
	);

	// Content Section 1
	$section = 'content-section-1';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Content Section 1', 'leafbase' ),
		'priority' => '99',
	);
	$options['cntn1-title'] = array(
		'id' => 'cntn1-title',
		'label'   => __( 'Title', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'Shared Channels bring companies togehter',
	);
	$options['cntn1-textarea'] = array(
		'id' => 'cntn1-textarea',
		'label'   => __( 'Textarea', 'leafbase' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => __( 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting', 'leafbase'),
	);
	$options['cntn1-text'] = array(
		'id' => 'cntn1-text',
		'label'   => __( 'Text', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'Read more about channels', 'leafbase' ),
	);
	$options['cntn1-url'] = array(
		'id' => 'cntn1-url',
		'label'   => __( 'URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);

	// Content Section 2
	$section = 'content-section-2';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Content Section 2', 'leafbase' ),
		'priority' => '99',
	);
	$options['cntn2-title'] = array(
		'id' => 'cntn2-title',
		'label'   => __( 'Title', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => 'Make the change to Channels',
	);
	$options['cntn2-textarea'] = array(
		'id' => 'cntn2-textarea',
		'label'   => __( 'Textarea', 'leafbase' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => __( 'What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting', 'leafbase'),
	);
	$options['cntn2-text'] = array(
		'id' => 'cntn2-text',
		'label'   => __( 'Text', 'leafbase' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'See how with shared channels', 'leafbase' ),
	);
	$options['cntn2-url'] = array(
		'id' => 'cntn2-url',
		'label'   => __( 'URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);


	// Footer Payment Icons
	$section = 'payemnt-images';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Payment Section', 'leafbase' ),
		'priority' => '99',
	);
	$options['visa-img'] = array(
		'id' => 'visa-img',
		'label'   => __( 'Visa', 'leafbase' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['visa-url'] = array(
		'id' => 'visa-url',
		'label'   => __( 'Visa URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);
	$options['mastercard-img'] = array(
		'id' => 'mastercard-img',
		'label'   => __( 'Master Card', 'leafbase' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['mastercard-url'] = array(
		'id' => 'mastercard-url',
		'label'   => __( 'Master Card URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);
	$options['amex-img'] = array(
		'id' => 'amex-img',
		'label'   => __( 'Amex', 'leafbase' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['amex-url'] = array(
		'id' => 'amex-url',
		'label'   => __( 'Amex URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);
	$options['discover-img'] = array(
		'id' => 'discover-img',
		'label'   => __( 'Discover', 'leafbase' ),
		'section' => $section,
		'type'    => 'upload',
		'default' => '',
	);
	$options['discover-url'] = array(
		'id' => 'discover-url',
		'label'   => __( 'Discover URL', 'leafbase' ),
		'section' => $section,
		'type'    => 'url',
		'default' => '#',
	);



	// Adds the sections to the $options array

	$options['sections'] = $sections;



	// Adds the panels to the $options array

	$options['panels'] = $panels;

	global $theme_options;
	$theme_options = $options;

	$customizer_library = Customizer_Library::Instance();

	$customizer_library->add_options( $options );



	// To delete custom mods use: customizer_library_remove_theme_mods();



}

add_action( 'init', 'customizer_library_demo_options' );

