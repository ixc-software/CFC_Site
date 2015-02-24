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
	
	<footer id="colophon" class="b-footer" role="contentinfo">
		<div class="footer-left-bg"></div>
		<div class="footer-main-bg"></div>
		<div class="footer-right-bg"></div>
		
		<?php get_sidebar( 'footer' ); ?>

		<div class="site-info">
<?php	/*
			<?php do_action( 'twentyfourteen_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
*/ ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
		
</div><!--//root-->

<?php wp_footer(); ?>

</body>
</html>
