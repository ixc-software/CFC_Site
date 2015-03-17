<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>

<!-- SendGrid -->
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>



	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=.5">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rrssb.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover.css">
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/libs/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/cookie.js"></script>


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>

	<![endif]-->

	<?php wp_head(); ?>
	<meta name="apple-itunes-app" content="app-id=506916707">

</head>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?1lvtHDkNTmJYdMsZPt5owbbQ0yi4Bdzc';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->

<body <?php body_class(); ?>>


<div class="b-root">
	<img src="<?php echo get_template_directory_uri(); ?>/images/smile_hey_left.png" id="smile_hey_left">
	<img src="<?php echo get_template_directory_uri(); ?>/images/smile_hey_right.png" id="smile_hey_right">

	<nav class="top-menu">
        <!--
		<div class="top-menu-left-bg"></div>
		<div class="top-menu-main-bg left"></div>
		<div class="top-menu-main-bg right"></div>
		<div class="top-menu-right-bg"></div>
		-->

            <div class="row row-margined-top">
                <div style="float:left;margin-left: 3em;">


        <?php
            $langs = icl_get_languages('skip_missing=1');

            if (count($langs) >= 1)
            {
                ?>

                    <?php
                    foreach ($langs as $lang_code => $lang_data)
                    {
                        if (!$lang_data['active'])
                        {
                           // echo '<a href="'.$lang_data['url'].'"><img src="'.get_template_directory_uri().'/images/icon_lang_'.$lang_data['language_code'].'.png"></a>';
                        }


                    }
                   // echo ' <div onclick="window.location =\''.$langs['ru']['url'] .'\'" class="lang-div hvr-back-pulse ' . ($langs['ru']['active']?'lang-active':'') . '">RU</div>
                    //<div onclick="window.location =\''.$langs['en']['url'] .'\'" class="lang-div hvr-back-pulse ' . ($langs['en']['active']?'lang-active':'') . '">EN</div>
                    //<div onclick="window.location =\''.$langs['fr']['url'] .'\'" class="lang-div hvr-back-pulse ' . ($langs['fr']['active']?'lang-active':'') . '">FR</div>';

                echo ' <div style="font-size: 1.5vmax" onclick="setCookie(\'lang\',\'ru\',365);window.location =\''.$langs['ru']['url'] .'\'"  class="lang-div hvr-back-pulse ' . ($_COOKIE['lang']=='ru'?'lang-active':'') . '">RU</div>
                <div style="font-size: 1.5vmax" onclick="setCookie(\'lang\',\'en\',365);window.location =\''.$langs['en']['url'] .'\'" class="lang-div hvr-back-pulse ' . ($_COOKIE['lang']!='fr' && $_COOKIE['lang']!='ru'?'lang-active':'') . '">EN</div>
                <div style="font-size: 1.5vmax" onclick="setCookie(\'lang\',\'fr\',365);window.location =\''.$langs['fr']['url'] .'\'"  class="lang-div hvr-back-pulse ' . ($_COOKIE['lang']=='fr'?'lang-active':'') . '">FR</div>';
               // echo ' <div onclick="setCookie(\'lang\',\'ru\',365);location.reload();"  class="lang-div hvr-back-pulse ' . ($_COOKIE['lang']=='ru'?'lang-active':'') . '">RU</div>
               // <div onclick="setCookie(\'lang\',\'en\',365);location.reload();" class="lang-div hvr-back-pulse ' . ($_COOKIE['lang']!='fr' && $_COOKIE['lang']!='ru'?'lang-active':'') . '">EN</div>
                //<div onclick="setCookie(\'lang\',\'fr\',365);location.reload();"  class="lang-div hvr-back-pulse ' . ($_COOKIE['lang']=='fr'?'lang-active':'') . '">FR</div>';



                ?>

            <?php
            }
            ?>
                </div>
            </div>
                <?php
                    $lang = $_COOKIE['lang'];
                    if(!isset($_COOKIE['lang'])){
                        $lang = 'en';
                    }
                    if(!$langs[$lang]['active'] && isset($langs[$lang]['url'])){
                       // try {
                        //    header("Location: " . $langs[$lang]['url']);
                       //     die("Location: " . $langs[$lang]['url']);
                       // }catch (Exception $e){}
                    }

                ?>


        <div style="margin-left: 5%; height: 71px;">
            <div style="display: block;">
                <div class="about-header-div hvr-back-pulse" id="home" onclick="window.location = '/'"><?php echo _e( 'Home',twentyfourteen); ?></div>
                <div class="about-header-div hvr-back-pulse" id="about-us" onclick="aboutUsClicked()"><?php echo _e( 'ABOUT US',twentyfourteen); ?></div>
                <div class="about-header-div hvr-back-pulse" id="get-cfc" onclick="getCfcClicked()"><?php echo _e( 'GET CFC',twentyfourteen); ?></div>
                <div class="about-header-div hvr-back-pulse" id="support" onclick="supportClicked()"><?php echo _e( 'SUPPORT',twentyfourteen); ?></div>
            </div>


            <!--inline-table-->
            <div style="display: none;" id="submenu-about-us" class="submenu">
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = '<?php echo _e('news-page-link');?>'"><?php echo _e( 'News',twentyfourteen); ?></div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = '<?php echo _e('our-team-page-link');?>';"><?php echo _e( 'Our team',twentyfourteen); ?></div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = '<?php echo _e('contacts-page-link');?>';"><?php echo _e( 'Contacts',twentyfourteen); ?></div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = 'https://www.dropbox.com/sh/0r9bhx0vhklp6sm/AACzI9cD9HUYYPnh9d2hV2C9a?dl=0';"><?php echo _e( 'Media kit',twentyfourteen); ?></div>
            </div>
            <div style="display: none;" id="submenu-get-cfc" class="submenu">
                <div class="news-hheader-div hvr-underline-from-center"  onclick="window.location = 'https://itunes.apple.com/app/id506916707?mt=8'">iOs</div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = 'https://itunes.apple.com/in/app/cfc/id580661730?mt=12'">Mac OS X</div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = 'https://play.google.com/store/apps/details?id=com.callsfreecalls.android'">Android</div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = '<?php echo _e('get-app-page-link');?>';"><?php echo _e( 'Get the Apps link',twentyfourteen); ?></div>
            </div>
            <div style="display: none;" id="submenu-support"  class="submenu">
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = '<?php echo _e('faq-page-link');?>';"><?php echo _e( 'FAQs',twentyfourteen); ?></div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = '<?php echo _e('getting-started-page-link');?>';"><?php echo _e( 'Getting Started',twentyfourteen); ?></div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = '<?php echo _e('featurest-and-function-page-link');?>';"><?php echo _e( 'Features and Functions',twentyfourteen); ?></div>
                <div class="news-hheader-div hvr-underline-from-center" onclick="window.location = '<?php echo _e('cfc-tarifs-page-link');?>';"><?php echo _e( 'CFC Tariffs',twentyfourteen); ?></div>
            </div>
        </div>
        <ul id="navigation" class="b-nav" style="display: none;">
            <li data-action="menuleft" style="display: none;" id="menuLeft">
		</ul>
		<!--<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_home.png" id="icon_home"></a>
        -->
	<div id="viewport" class="b-viewport">


<div class="b-content-decoration<?php if( !is_front_page() ) echo ' __opened'; ?>" >
	<?php
	if (is_page_template('get-app-link.php') || is_page_template('tarrifs.php'))
	{
	?>
	<div id="getAppContent" class="b-content-inner">
	<?php
	}
	else if (!is_front_page() && !is_home())
	{
	?>
	<div id="content" class="b-content-inner" style="display:none" <?php //echo !is_front_page() && !is_home() ? 'data-animate="true"' : ''; ?>>
	<?php
	}
	else
	{
	?>
	<div id="homeContent" class="b-content-inner">
	<?php
	}
	?>
		
		<div class="content-left-top"></div>
		<div class="content-left"></div>
		<div class="content-left-bottom"></div>
		<div class="content-right-top"></div>
		<div class="content-right"></div>
		<div class="content-right-bottom"></div>
		
		<div class="content-top"></div>
		
		<div class="hfeed site b-content" style="bottom: 0;position: absolute;height: 100%;">
			<?php if ( get_header_image() ) : ?>
			<div id="site-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
			</div>
			<?php endif; ?>

		<?php /*
			<header id="masthead" class="site-header" role="banner">
				<div class="header-main">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

					<div class="search-toggle">
						<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
					</div>

					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
						<h1 class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></h1>
						<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</nav>
				</div>

				<div id="search-container" class="search-box-wrapper hide">
					<div class="search-box">
						<?php get_search_form(); ?>
					</div>
				</div>
			</header><!-- #masthead -->
		*/ ?>

			<div id="main" class="site-main">
