<?php
/*
 * Template Name: Start Page
 * Description: The main page of this site.
 */
 
get_header(); ?>

<div id="logoWords">
	<div id="logoImg">
		<a href="https://itunes.apple.com/in/app/cfc/id580661730?mt=12" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/images/homepage-logo.png" />
		</a>
	</div>
	
	<h2>Welcome to the CFC world</h2>
	
	<h3>You can call anyone free of charge.</h3>
</div>

<div id="cableLeft"></div>
<div id="cableMain"><img src="<?php echo get_template_directory_uri(); ?>/images/cable-main.png" /></div>

<div id="phoneapp" class="phoneapp" <?php if( !is_front_page() ) echo "style='display:none;' data-visible='' ";else echo "data-visible='visible' " ?>>
	
	<script src="http://callsfreecalls.com/appio/js/jquery.cookie.js"></script>
	<script src="http://callsfreecalls.com/appio/js/jquery.json-2.4.min.js"></script>
	<script src="http://callsfreecalls.com/appio/js/bootstrap.js"></script>
	
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
	
</div>

<?php get_footer(); ?>
