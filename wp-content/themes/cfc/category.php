<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
    <style>
        p{
            font-size: 2vmax !important;
        }
        h2{
            font-size: 3vmax !important;
        }
        h2{
            font-size: 3.5vmax !important;
        }
    </style>
	<section id="primary" class="content-area">
		<div id="site-content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<!--header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->
			
			<?php
			$thiscat = get_the_category( get_the_ID() );
			$thiscat = array_slice( $thiscat, 0, 1);
			if($thiscat)
			{
				echo get_content_header('category', $thiscat[0]->term_id);
				/*foreach($thiscat as $category) {
					echo "<h1 class='category-banner'>" . $category->cat_name . "</h1>";
				}*/
			}
			?>
			<div class="category-scroll">
				<div class="breadcrumbs">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}?>
				</div>
				<div class="category-scroll-inner">
			
				<?php
					
					//twentyfourteen_paging_nav();
					
					// Start the Loop.
					while ( have_posts() ) : the_post();
						
						?>
						<div class="news-divs" style="background-color: rgba(235, 241, 253, 0.7);display: inline-block;margin-bottom: 5px;width: 100%;">
						<div class="entry-header" style="word-wrap: break-word;text-align: center;">
							<?php the_title( '<h1 class="entry-title" style="/*margin: 20px 0 12px;*/margin: 0;">', '</h1>' ); ?>
                            <?php the_date(); ?>
						</div><!-- .entry-header -->

						<div class="entry-summary" style="/*margin: 20px 0 12px;*/display: table;margin-left: 0;">
							<a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
						</div><!-- .entry-summary -->
						
						<!--<div class="entry-date">
							<?php the_date(); ?>
						</div><!-- .entry-date -->

						<div class="entry-summary-splitter" style="background: none;"></div>
						</div>
						<?php


					endwhile;
					// Previous/next page navigation.
					twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>


			</div>
			</div><!-- //category-scroll-all -->
		</div><!-- #content -->
	</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
