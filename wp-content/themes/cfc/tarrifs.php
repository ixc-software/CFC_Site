<?php
/*
 * Template Name: Tarrifs Page
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
	<div class="grid_12">
		<p style="margin-bottom:0;">Phone Number:</p>
		<div>
			<input type="text" name="phone_code" id="phone_code" value="" class="get-app-input" autocomplete="off" placeholder="Please enter first seven digits" />
			<input type="button" name="getTarrifs" id="getTarrifs" value="GET" class="get-app-button" />
			<span id="ajaxLoader"></span>
		</div>
		<p class="tarrifs-warn">Please enter first seven digits at least.<br />Please paste the number without "+" and "00".</p>
	</div>
	
	<div class="clear"></div>
	
	<div class="tarrifs-result-wrapper">
		<div class="tarrifs-result-container">
			<table>
				<thead><tr>
					<th>Country</th>
					<th>Price in USD</th>
					<th>Bonuses/min</th>
				</tr></thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
	
	<?php
}
?>
</article>
<?php get_footer(); ?>
