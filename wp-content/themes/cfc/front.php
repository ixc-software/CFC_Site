<?php
/*
 * Template Name: Start Page
 * Description: The main page of this site.
 */
 
get_header(); ?>

<div id="logoWords" style="width: 90%;
float: right;">
	<div id="logoImg">
		<a href="https://itunes.apple.com/in/app/cfc/id580661730?mt=12" target="_blank">
			<img  style="width: 8em" src="<?php echo get_template_directory_uri(); ?>/images/composition.png" />
		</a>
	</div>
    <!--
    <h2>Welcome to the CFC world</h2>

    <h3>You can call anyone free of charge.</h3>-->
    <div class="front-middle-blue-line"><span style="margin-left: 11em" id="span-cfc-front">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFC is a virtual SIM-card in your mobile for making
            free phone calls</span></div>
    <div class="social-box">
        <button class="social-box-start">
            Start
        </button>
        <div class="social-box-android-apple">
            <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png">
        </div>
        <div class="social-box-android-apple">
            <img src="<?php echo get_template_directory_uri(); ?>/images/App_Store_Badge_small.png">
        </div>


        <div id="fb-root" ></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Place this tag where you want the +1 button to render. -->
        <div class="g-plusone" data-size="tall" style="display: inline-block"></div>

        <a style="display: inline-block" class="twitter-share-button"
           href="https://twitter.com/share"
            data-count="vertical">
            Tweet
        </a>
        <script>
            window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
        </script>
        <div style="display: inline-block" class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count"></div>

    </div>
</div>
<div id="cableLeft"  style="display: none;"></div>
<div id="cableMain"  style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/cable-main.png" /></div>
<!--

-->

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

<?php get_footer(); ?>
