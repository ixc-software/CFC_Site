<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="site-content" class="site-content" role="main">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
					<?php echo get_content_header(); ?>
					
					
						<div id="contactPage" class="category-scroll">
							
							<div class="breadcrumbs">
								<?php if(function_exists('bcn_display'))
								{
									bcn_display();
								}?>
							</div>
							
							<div class="category-scroll-inner">
								
								<div class="entry-content">
									<?php
										the_content();
									?>
								</div><!-- .entry-content -->
							</div>
							
							<?php echo do_shortcode('[social_links]'); ?>
							
							<div class="clear"></div>
							
						</div><!-- //category-scroll-all -->
				</article><!-- #post-## -->

					<?php
				endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
