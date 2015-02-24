<?php
/*
 * Template Name: Get App Link Page
 * Description: The main page of this site.
 */
 
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
if (have_posts())
{
	the_post();
	
	the_title('<h1 class="page-title">', '</h1>');
	
	?>
	<div class="grid_6">
	<p style="margin-bottom:0;">Get FREE SMS with app link:</p>
	<p>
		<input type="text" name="sms" id="sms" value="" class="get-app-input" />
		<input type="button" name="smsSend" id="smsSend" value="SEND" class="get-app-button" />
	</p>
	</div>
	<div class="grid_6">
	<p style="margin-bottom:0;">Get E-Mail with app link:</p>
	<p>
		<input type="text" name="email" id="email" value="" class="get-app-input" autocomplete="off" />
		<input type="button" name="emailSend" id="emailSend" value="SEND" class="get-app-button" />
	</p>
	</div>
	<?php
}
?>
</article>
<?php get_footer(); ?>
