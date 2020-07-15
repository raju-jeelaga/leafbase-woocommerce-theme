<?php

/**

 * The template for displaying the footer

 *

 * Contains the closing of the #content div and all content after.

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package telecom-talk

 */



?>



	</div><!-- #content -->



<footer id="footer">
      <div class="container">
        <div class="footer-section">
          <div class="ft-blk-1">
            <ul class="ft-lst-itms-1">
				<div class="footer-logo">
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
              	<h5>Get 10% Off your first purchase</h5>
               	<form class="nws-letter">
                	<label>sign up for our news letter to get the latest news</label>
                  <input class="text" type="text" placeholder="Email Address">
                  <input class="submit" type="submit" value="Submit">
                </form>
              
            <ul class="social-icons">
              <li><a href="#"><i class="fab fa-instagram-square"></i>
                </a></li>
              <li><a href="#"><i class="fab fa-twitter"></i>
                </a></li>
              <li><a href="#"><i class="fab fa-facebook-f"></i>
                </a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i>
                </a></li>
            </ul>
          </div>
          <div class="ft-blk-2">
            <h2>Company</h2>
            <ul class="list-items">
              <li><a href="#">our team
                </a></li>
              <li><a href="#">our mission
                </a></li>
              <li><a href="#">newsroom
                </a></li>
              <li><a href="#">careers
                </a></li>
              <li><a href="#">investors
                </a></li>
            </ul>
          </div>
          <div class="ft-blk-2">
            <h2>Quick links</h2>
            <ul class="list-items">
              <li><a href="#">store locator
                </a></li>
              <li><a href="#">delivery
                </a></li>
              <li><a href="#">rewards
                </a></li>
              <li><a href="#">gift cards
                </a></li>

            </ul>
          </div>

          <div class="ft-blk-2">
            <h2>Help</h2>
            <ul class="list-items">
              <li><a href="#">contact us
                </a></li>
              <li><a href="#">faq
                </a></li>
              <li><a href="#">privacy options
                </a></li>
            </ul>
          </div>

        </div>
        <div class="footer-section-1">
          <div class="payment-block">
            <ul>
                <li>
                  <a href="<?php echo get_theme_mod('visa-url');?>">
                    <?php if(!empty(get_theme_mod( 'visa-img'))){?>
                        <img src="<?php echo get_theme_mod( 'visa-img');?>">
                      <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri().'/images/visa.png'; ?>">
                      <?php } ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_theme_mod('mastercard-url');?>">
                    <?php if(!empty(get_theme_mod( 'mastercard-img'))){?>
                        <img src="<?php echo get_theme_mod( 'mastercard-img');?>">
                      <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri().'/images/master-card.png'; ?>">
                      <?php } ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_theme_mod('amex-url');?>">
                    <?php if(!empty(get_theme_mod( 'amex-img'))){?>
                        <img src="<?php echo get_theme_mod( 'amex-img');?>">
                      <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri().'/images/amex.png'; ?>">
                      <?php } ?>
                  </a>
                </li>
                <li>
                  <a href="<?php echo get_theme_mod('discover-url');?>">
                    <?php if(!empty(get_theme_mod( 'discover-img'))){?>
                        <img src="<?php echo get_theme_mod( 'discover-img');?>">
                      <?php }else{ ?>
                        <img src="<?php echo get_template_directory_uri().'/images/discover.jpg'; ?>">
                      <?php } ?>
                  </a>
                </li>
            </ul>
          </div>
          <div class="lst-items">
            <ul class="list-items f-b">
              <li><a href="#">Privacy policy
                </a></li>
              <li><a href="#">terms of use
                </a></li>
              <li><a href="#">legals disclaimers
                </a></li>
              <li><a href="#">&copy; 2020 leafBase
                </a></li>

            </ul>
          </div>
        </div>
      </div>
</footer>

</div><!-- #page -->



<?php wp_footer(); ?>



</body>

</html>

