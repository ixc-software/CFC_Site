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
 	<meta name='yandex-verification' content='6798feeeb342ebcd' />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
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
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?36WdQ8aoH1oV3lFiktxFqivwVxZ9neV3";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->

<body <?php body_class(); ?>>


<div class="b-root">
	<img src="<?php echo get_template_directory_uri(); ?>/images/smile_hey_left.png" id="smile_hey_left">
	<img src="<?php echo get_template_directory_uri(); ?>/images/smile_hey_right.png" id="smile_hey_right">
	<?php
	$langs = icl_get_languages('skip_missing=1');
	//print_r($langs);
	if (count($langs) > 1)
	{
		?>
		<div class="languages">
		<?php
		foreach ($langs as $lang_code => $lang_data)
		{
			if (!$lang_data['active'])
			{
				echo '<a href="'.$lang_data['url'].'"><img src="'.get_template_directory_uri().'/images/icon_lang_'.$lang_data['language_code'].'.png"></a>';
			}
		}
		?>
		</div>
		<?php
	}
	?>
	<nav class="top-menu">
		<div class="top-menu-left-bg"></div>
		<div class="top-menu-main-bg left"></div>
		<div class="top-menu-main-bg right"></div>
		<div class="top-menu-right-bg"></div>
		<ul id="navigation" class="b-nav">
			<li data-action="menuleft" id="menuLeft">
				<a href="#"><span>About Us</span></a>
				<ol data-visible="">
					<?php wp_nav_menu( array( 'menu' => 'Contacts', 'items_wrap' => '%3$s' , 'container' => false ) ); ?>
				</ol>
			</li>
			<li class="top-menu-devider"></li>
			<li data-action="menucenter" id="menuCenter">
				<a href="#"><span>Get CFC</span></a>
				<ol data-visible="">
					<?php wp_nav_menu( array( 'menu' => 'Get CFC', 'items_wrap' => '%3$s' , 'container' => false ) ); ?>
				</ol>
			</li>
			<li class="top-menu-devider"></li>
			<li data-action="menuright" id="menuRight">
				<a href="#"><span>Support</span></a>
				<ol data-visible="">
					<?php wp_nav_menu( array( 'menu' => 'Support', 'items_wrap' => '%3$s' , 'container' => false ) ); ?>
				</ol>
			</li>
		</ul>
		<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_home.png" id="icon_home"></a>
	</nav>
	<div id="viewport" class="b-viewport">
		<div class="viewport-left-bg"></div>
		<div class="viewport-right-bg"></div>

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
		
		<div class="hfeed site b-content">
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