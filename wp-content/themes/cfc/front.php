<?php
/*
 * Template Name: Start Page
 * Description: The main page of this site.
 */
 
get_header(); ?>
<style>
    body{
        background-image: url('/wp-content/themes/cfc/images/background1.png') !important;
    }



</style>


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
    vertical-align: middle;width: 85%;
    " id="span-cfc-front">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo _e( 'CFC is a virtual SIM-card in your mobile for making free phone calls',twentyfourteen); ?></span></div>
    <div class="social-box">
        <div>
        <div class="social-box-android-apple"  onclick="window.location = 'https://play.google.com/store/apps/details?id=com.callsfreecalls.android'">
            <img src="<?php echo get_template_directory_uri(); ?>/images/googleplay.png" >
        </div>
        <div class="social-box-android-apple" onclick="window.location = 'https://itunes.apple.com/app/id506916707?mt=8'">
            <img src="<?php echo get_template_directory_uri(); ?>/images/App_Store_Badge_small.png">
        </div>
        </div>

            <div class="share-container clearfix" >


                <!-- Buttons start here. Copy this ul to your document. -->
                <ul class="rrssb-buttons clearfix" style="margin: 0;height: 53px;">

                    <li class="rrssb-facebook">
                        <!-- Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
                        https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://cfc.io/" class="popup">
                            <span class="rrssb-icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                                    <path d="M27.825,4.783c0-2.427-2.182-4.608-4.608-4.608H4.783c-2.422,0-4.608,2.182-4.608,4.608v18.434
                                        c0,2.427,2.181,4.608,4.608,4.608H14V17.379h-3.379v-4.608H14v-1.795c0-3.089,2.335-5.885,5.192-5.885h3.718v4.608h-3.726
                                        c-0.408,0-0.884,0.492-0.884,1.236v1.836h4.609v4.608h-4.609v10.446h4.916c2.422,0,4.608-2.188,4.608-4.608V4.783z"/>
                                </svg>
                            </span>
                            <span class="rrssb-text">facebook</span>
                        </a>
                    </li>

                    <li class="rrssb-twitter">
                        <!-- Replace href with your Meta and URL information  -->
                        <a href="http://twitter.com/home?status=Calls%20Free%20Calls%20Free%20phone%20calls%20and%20SMS%20texting%20with%20CFC.io%20-%20virtual%20Sim-card%20app%20in%20your%20mobile%20http://cfc.io/" class="popup">
                            <span class="rrssb-icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                                <path d="M24.253,8.756C24.689,17.08,18.297,24.182,9.97,24.62c-3.122,0.162-6.219-0.646-8.861-2.32
                                    c2.703,0.179,5.376-0.648,7.508-2.321c-2.072-0.247-3.818-1.661-4.489-3.638c0.801,0.128,1.62,0.076,2.399-0.155
                                    C4.045,15.72,2.215,13.6,2.115,11.077c0.688,0.275,1.426,0.407,2.168,0.386c-2.135-1.65-2.729-4.621-1.394-6.965
                                    C5.575,7.816,9.54,9.84,13.803,10.071c-0.842-2.739,0.694-5.64,3.434-6.482c2.018-0.623,4.212,0.044,5.546,1.683
                                    c1.186-0.213,2.318-0.662,3.329-1.317c-0.385,1.256-1.247,2.312-2.399,2.942c1.048-0.106,2.069-0.394,3.019-0.851
                                    C26.275,7.229,25.39,8.196,24.253,8.756z"/>
                                </svg>
                           </span>
                            <span class="rrssb-text">twitter</span>
                        </a>
                    </li>

                    <li class="rrssb-googleplus">
                        <!-- Replace href with your meta and URL information.  -->
                        <a href="https://plus.google.com/share?url=Calls%20Free%20Calls%20Free%20phone%20calls%20and%20SMS%20texting%20with%20CFC.io%20-%20virtual%20Sim-card%20app%20in%20your%20mobile%20http://cfc.io/" class="popup">
                            <span class="rrssb-icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 28 28" enable-background="new 0 0 28 28" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M14.703,15.854l-1.219-0.948c-0.372-0.308-0.88-0.715-0.88-1.459c0-0.748,0.508-1.223,0.95-1.663
                                                c1.42-1.119,2.839-2.309,2.839-4.817c0-2.58-1.621-3.937-2.399-4.581h2.097l2.202-1.383h-6.67c-1.83,0-4.467,0.433-6.398,2.027
                                                C3.768,4.287,3.059,6.018,3.059,7.576c0,2.634,2.022,5.328,5.604,5.328c0.339,0,0.71-0.033,1.083-0.068
                                                c-0.167,0.408-0.336,0.748-0.336,1.324c0,1.04,0.551,1.685,1.011,2.297c-1.524,0.104-4.37,0.273-6.467,1.562
                                                c-1.998,1.188-2.605,2.916-2.605,4.137c0,2.512,2.358,4.84,7.289,4.84c5.822,0,8.904-3.223,8.904-6.41
                                                c0.008-2.327-1.359-3.489-2.829-4.731H14.703z M10.269,11.951c-2.912,0-4.231-3.765-4.231-6.037c0-0.884,0.168-1.797,0.744-2.511
                                                c0.543-0.679,1.489-1.12,2.372-1.12c2.807,0,4.256,3.798,4.256,6.242c0,0.612-0.067,1.694-0.845,2.478
                                                c-0.537,0.55-1.438,0.948-2.295,0.951V11.951z M10.302,25.609c-3.621,0-5.957-1.732-5.957-4.142c0-2.408,2.165-3.223,2.911-3.492
                                                c1.421-0.479,3.25-0.545,3.555-0.545c0.338,0,0.52,0,0.766,0.034c2.574,1.838,3.706,2.757,3.706,4.479
                                                c-0.002,2.073-1.736,3.665-4.982,3.649L10.302,25.609z"/>
                                            <polygon points="23.254,11.89 23.254,8.521 21.569,8.521 21.569,11.89 18.202,11.89 18.202,13.604 21.569,13.604 21.569,17.004
                                                23.254,17.004 23.254,13.604 26.653,13.604 26.653,11.89      "/>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class="rrssb-text">google+</span>
                        </a>
                    </li>

                </ul>
                <!-- Buttons end here -->
            </div>



                <!-- Buttons end here -->

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
        -->
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
