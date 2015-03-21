<?php
/*
 * Template Name: Tarrifs Page
 * Description: The main page of this site.
 */
 
get_header(); ?>

<article class="this-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
if (have_posts())
{
	the_post();
	

	
	?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
<?php

//the_title('<h2>', '</h2>');
?>

    <div class="category-banner-wrapper1 container-our-team-header-div" style="width: 100%;height: 3em;margin:0;">
        <h4 class="lbl-our-team" style="padding-top: 12px;"><?php echo _e( 'CFC Tariffs for Calls',twentyfourteen); ?></h4>

        <div class="category-banner-flare"><img src="http://presta.com/wp-content/themes/cfc/images/flare.png"></div><div class="clear"></div>
    </div>

	<div class="grid_12">

        <h3><?php echo _e( 'Phone number',twentyfourteen); ?></h3>
		<div>
			<!--<input type="text" name="phone_code" id="phone_code" value="" class="get-app-input" autocomplete="off" placeholder="Please enter first seven digits" />
			<input type="button" name="getTarrifs" id="getTarrifs" value="GET" class="get-app-button" />
			-->

                    <div class="input-group input-group-lg col-sm-3" style=" margin-left: auto;
            margin-right: auto;">

                        <input type="text" name="phone_code" id="phone_code" value="" class="form-control" autocomplete="off" placeholder="+____-___-____"  aria-describedby="sizing-addon1">

                        <span class="input-group-btn">
                            <button class="btn btn-default" id="getTarrifs" value="GET" type="button"><?php echo _e( 'Get',twentyfourteen); ?></button>
                      </span>

			<span id="ajaxLoader"></span>
		</div>
        </div>
		<h5><?php echo _e( 'Please enter first seven digits at least.',twentyfourteen); ?><br /><?php echo _e( 'Please paste the number without + and 00.',twentyfourteen); ?></h5>
	</div>

	<div class="clear"></div>
	
	<div class="tarrifs-result-wrapper">
		<div class="tarrifs-result-container">
			<table>
				<thead><tr>
					<th><?php echo _e( 'Country',twentyfourteen); ?></th>
					<th><?php echo _e( 'Price in USD',twentyfourteen); ?></th>
					<th><?php echo _e( 'Bonuses/min',twentyfourteen); ?></th>
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
<style>

</style>

<?php get_footer(); ?>
