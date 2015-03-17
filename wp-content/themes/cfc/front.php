<?php
/*
 * Template Name: Start Page
 * Description: The main page of this site.
 */
 
get_header(); ?>

<div id="logoWords" style="height:100%;width: 82%;position: absolute;
bottom: 0;
right: 0;display: table;">
    <div id="gnom-blueline-sharebuttons">


	<!--<div id="logoImg1">
		<!--<a href="https://itunes.apple.com/in/app/cfc/id580661730?mt=12" target="_blank">
			<img  style="/*width: 8em*/" src="<?php echo get_template_directory_uri(); ?>/images/composition.png" />
		</a>
	</div>-->

        <div id="container1" >
        </div>
    <!--
    <h2>Welcome to the CFC world</h2>

    <h3>You can call anyone free of charge.</h3>-->
    <div class="front-middle-blue-line"><span style="padding-bottom: 20px;
  padding-top: 20px;    display: inline-block;
    vertical-align: middle;
    " id="span-cfc-front"><?php echo _e( 'CFC is a virtual SIM-card in your mobile for making free phone calls',twentyfourteen); ?></span></div>
    <div class="social-box">
        <div>
        <div class="social-box-android-apple"  onclick="window.location = 'https://play.google.com/store/apps/details?id=com.callsfreecalls.android'">
            <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png" >
        </div>
        <div class="social-box-android-apple" onclick="window.location = 'https://itunes.apple.com/app/id506916707?mt=8'">
            <img src="<?php echo get_template_directory_uri(); ?>/images/App_Store_Badge_small.png">
        </div>
        </div>
        <div id="share-box" style="height:50px;margin-top: 10px">

            <!-- Go to www.addthis.com/dashboard to customize your tools -->
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55054ee55f816240" async="async"></script>

            <!--
        <div id="fb-root" ></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>


        <div class="g-plusone" data-size="tall"  data-annotation="none" style="display: inline-block"></div>

        <a style="display: inline-block" class="twitter-share-button"
           href="https://twitter.com/share"
            data-count="none">
            <?php echo _e( 'Tweet',twentyfourteen); ?>
        </a>
        <script>
            window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
        </script>
        <div style="display: inline-block" class="fb-share-button" data-href="https://www.facebook.com/CallsFreeCalls" data-layout="button"></div>
        --></div>
    </div>
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
