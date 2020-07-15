<?php

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package telecom-talk

 */



?>

<!doctype html> 

<html <?php language_attributes(); ?>>

<head>
	<?php echo get_theme_mod( 'adscripts'); ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#003f76">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php do_action("tt_show_metatags"); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'telecom-talk' ); ?></a>

		<div class="hdr-top">
			<span><?php echo get_theme_mod('header-top-text', $theme_options['header-top-text']['default'])?></span>
		</div>
		<div class="header-prt">
			<header class="wp-m">

			   	<div class="container">

			   		<div class="mobile-header">

				   		<nav id="site-navigation" class="main-nav drawer drawer--left" role="navigation">

				            <div class="mobile-menu">

				                <button type="button" class="drawer-toggle drawer-hamburger">

				                  <span class="sr-only">toggle navigation</span>

				                  <span class="drawer-hamburger-icon"></span>

				                </button>

				                <nav class="drawer-nav" role="navigation">

				                  <div class="drawer-menu">

				                      <h3><?php echo esc_attr_x( 'Navigate', 'leafbase' ) ?></h3>

				                    <?php

				                    //if ( has_nav_menu( 'mobile-menu' ) ) {
				                    //   wp_nav_menu(array(
				                    //   'theme_location' => 'mobile-menu',
				                    //   'menu_class'     => 'm-menu',
				                    // ));
				                    //} ?>
				                    <ul class="m-menu">
									<li class="menu-item menu-item-has-children"><a href="#">Shop</a>
										<ul class="sub-menu">
											<li class="menu-item">
												<a href="#">Sample Page 1</a>
											</li>
											<li class="menu-item">
												<a href="#">Sample Page 2</a>
											</li>
										</ul>
									</li>
									<li class="menu-item"><a href="#">Menu</a></li>
									<li class="menu-item"><a href="#">Delivery</a></li>
									<li class="menu-item"><a href="#">Stores</a></li>
									<li class="menu-item"><a href="#">Rewards</a></li>
									<li class="menu-item"><a href="#">Support</a></li>
								</ul>

				                  </div>

				                </nav>

				            </div><!-- /.mobile-menu -->

			            </nav><!-- .menu-1 -->

				        <div class="site-branding logo">
				            <a href="<?php echo esc_url( home_url() ); ?>">
				                <?php 
				                $custom_logo_id = esc_attr( get_theme_mod( 'custom_logo' ) );
				                if( $custom_logo_id ) {
				                	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				                }
				                if ( has_custom_logo() ) {       	
				                    echo '<img src="'. esc_url( $logo[0] ) .'" alt="logo">';
				                } else {
				                    echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1><span>'. esc_attr( get_bloginfo( 'description', 'display' ) ) .'</span>';
				                } ?>

				              </a>

				        </div><!-- .site-branding -->
						
						<div class="rght-prt">
							<ul>
								<?php if(is_user_logged_in()) { ?>
								<li><a class="sign-in fa fa-user-circle-o" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">My Account</a></li>
								<?php } else {?>
								<li><a class="sign-in fa fa-user-circle-o" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">Sign in</a></li>
								<?php } ?>
								<li><a class="cart" href="<?php echo wc_get_cart_url(); ?>"></a></li>
							</ul>
						</div>

			        </div>

			    </div>

		    </header>


			<header class="site-header header-navigation" id="header">

				<div class="head-2">

					<div class="container">

						<div class="hdr-tp">

							<div class="lg">

								<a href="<?php echo esc_url( home_url() ); ?>">

				                <?php 
				                $custom_logo_id = esc_attr( get_theme_mod( 'custom_logo' ) );
				                if( $custom_logo_id ) {
				                	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				                }
				                if ( has_custom_logo() ) {       	

				                    echo '<img src="'. esc_url( $logo[0] ) .'" alt="logo-2">';
				                } else {

				                    echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1><span>'. esc_attr( get_bloginfo( 'description', 'display' ) ) .'</span>';
				                } ?>
				              </a>

							</div><!-- /.lg -->

							<div class="rght-prt">
								<ul>
									<?php if(is_user_logged_in()) { ?>
									<li><a class="sign-in fa fa-user-circle-o" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">My Account</a></li>
									<?php } else {?>
									<li><a class="sign-in fa fa-user-circle-o" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">Sign in</a></li>
									<?php } ?>
									<li><a class="cart" href="<?php echo wc_get_cart_url(); ?>"></a></li>
								</ul>
							</div>

						
						</div><!-- /.h2 -->
						<div class="hdr-btm">
							<div class="primary-menu">
							 	<?php //if(has_nav_menu ('primary_nav'))
						    		// wp_nav_menu( array( 
						    		// 	'container' => '',
						    		// 	'container_id' => '',
						    		// 	'theme_location' => 'primary_nav',
						    		// 	'sort_column' => 'menu_order',
						    		// 	'menu_class' => 'menu',
						    		// )
						    	//);?>
						    	<ul class="menu">
									<li class="menu-item menu-item-has-children"><a href="#">Shop</a>
										<ul class="sub-menu">
											<li class="menu-item">
												<a href="#">Sample Page 1</a>
											</li>
											<li class="menu-item">
												<a href="#">Sample Page 2</a>
											</li>
										</ul>
									</li>
									<li class="menu-item"><a href="#">Menu</a></li>
									<li class="menu-item"><a href="#">Delivery</a></li>
									<li class="menu-item"><a href="#">Stores</a></li>
									<li class="menu-item"><a href="#">Rewards</a></li>
									<li class="menu-item"><a href="#">Support</a></li>
								</ul>
							</div><!-- /. p-m -->

							<div class="plc-ordr">
								<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">Track Your Order</a>
							</div>

						</div>

					</div><!-- /.container -->

				</div><!-- /. head-2 -->

			</header><!-- #masthead -->
		</div>
	<div id="content" class="site-content">

