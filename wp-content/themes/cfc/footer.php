<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
		
	</div><!-- #content -->
	<div class="content-bottom"></div>
	</div><!--.b-content-inner -->
	</div><!--.b-content-decoration -->
	

	</div><!-- //viewport-->

<!--
	<footer id="colophon" class="b-footer" role="contentinfo">

		
		<?php get_sidebar( 'footer' ); ?>

		<div class="site-info">
		
			<div class="footer-social-links"><div class="items">
				
				<a data-provider="youtube" href="https://www.youtube.com/user/CallsFreeCalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_youtube.png" />
				</a>
				
				<a data-provider="facebook" href="https://www.facebook.com/CallsFreeCalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.png" />
				</a>
				
				<a data-provider="twitter" href="https://twitter.com/CallsFreeCalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" />
				</a>
				
				<a data-provider="vkontakte" href="http://vk.com/callsfreecalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_vk.png" />
				</a>
				
				<a data-provider="odnoklassniki" href="http://www.odnoklassniki.ru/callsfreecalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_odnoklassniki.png" />
				</a>
		
			</div></div>
<?php	/*
			<?php do_action( 'twentyfourteen_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
*/ ?>
		</div>
	</footer>
-->
<footer style="/*background-color: rgb(41,128,185);color:#ffffff;*/
  background-color: transparent;
   font-size: 3.0vh;  position: absolute;
  bottom: 0;
  z-index: 199;
  height: 0px;" id="colophon" class="b-footer" role="contentinfo">
      <!--  <span><?php echo _e( 'Copyright 2015 CallsFreeCalls.All right reserved.',twentyfourteen); ?></span>-->
    <span><?php echo _e( ' ',twentyfourteen); ?></span>
    </footer>
<div id="phoneapp" class="phoneapp" <?php if( !is_front_page() ) echo "style='display:none;' data-visible='' ";else echo "data-visible='visible' " ?>>

    <script src="http://callsfreecalls.com/appio/js/jquery.cookie.js"></script>
    <script src="http://callsfreecalls.com/appio/js/jquery.json-2.4.min.js"></script>
    <script src="http://callsfreecalls.com/appio/js/bootstrap.js"></script>
    <!--
	<div id="phoneslider" class="fotorama" data-autoplay="3000" data-arrows="false" data-loop="true">
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_01.jpg"><a href="#"></a></div>
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_02.jpg"><a href="#"></a></div>
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_03.jpg"><a href="#"></a></div>
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_04.jpg"><a href="#"></a></div>
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_05.jpg"><a href="#"></a></div>
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_06.jpg"><a href="#"></a></div>
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_07.jpg"><a href="#"></a></div>
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_08.jpg"><a href="#"></a></div>
		<div data-img="<?php echo get_template_directory_uri(); ?>/images/slide_09.jpg"><a href="#"></a></div>
	</div>
	-->
</div>
</div><!--//root-->

<?php wp_footer(); ?>
<!-- Required Javascript files. Copy these to your document. -->



</body>
</html>
