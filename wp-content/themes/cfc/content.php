<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<?php if ( is_single() ) :
		
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
			
			<?php
			if (has_post_thumbnail())
			{
				$inner_class = 'has_post_thumbnail';
			}
			else
			{
				$inner_class = '';
			}
			
			$meta = get_post_meta(get_the_ID(), 'inpost_gallery_data');
			$scroll = $mobile_thumb = '';

			if (isset($meta[0]) && is_array($meta[0]))
			{
				$scroll = ' with-slider';
				$gallery = $meta[0];
				
				echo '<div class="slider-wrapper"><ul id="contentSlider">';
				foreach ($gallery as $item)
				{
					echo '<li><img src="'.$item['imgurl'].'"></li>';
					$mobile_thumb = $item['imgurl'];
				}
				
				echo '</ul></div>';			
			}
			?>
			
			<div class="category-scroll-inner <?php echo $inner_class; ?><?php echo $scroll; ?>">
	<?php endif; ?>

	<?php //twentyfourteen_post_thumbnail(); ?>

	<header class="entry-header">
		<?php /* if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?>:</span>
		</div>
		<?php
			endif; */

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>

	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			
			if ($mobile_thumb)
			{
				echo '<img src="'.$mobile_thumb.'" class="mobile-thumb">';
			}
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );

			//edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
	
			if ( 'post' == get_post_type() )
				twentyfourteen_posted_on();

/*			if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>

			<?php endif;
*/

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>

<?php if ( is_single() ) : ?>
		</div>
	</div><!-- //category-scroll -->
<?php endif; ?>

</article><!-- #post-## -->
