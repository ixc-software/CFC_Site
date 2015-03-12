
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
	
	//the_title('<h1 class="page-title">', '</h1>');
	
	?>

    <script>
        $(function(){
            successMessage ='<?php echo _e( 'SMS was sent successfully. Enjoy!',twentyfourteen); ?>';
            successEmail =     '<?php echo _e( 'E-Mail was sent successfully. Enjoy!',twentyfourteen); ?>';
            badMessage =     '<?php echo _e( 'Please enter valid phone.12',twentyfourteen); ?>';
            badEmail =     '<?php echo _e( 'Please enter valid E-Mail.',twentyfourteen); ?>';

        });

    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <h2><?php echo _e( 'Get App Link',twentyfourteen); ?></h2>


	<h3 style="margin-bottom:0;"><?php echo _e( 'Get FREE SMS with app link',twentyfourteen); ?>:</h3>

        <div class="row">
            <div class="input-group input-group-lg col-sm-3" style=" margin-left: auto;
    margin-right: auto;">

                <input type="text" name="sms" id="sms" value="" class="form-control" autocomplete="off"  aria-describedby="sizing-addon1">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" value="SEND" name="smsSend" id="smsSend"><?php echo _e( 'Send',twentyfourteen); ?></button>
              </span>
            </div>
            </div>
        <!--
		<input type="text" name="sms" id="sms" value="" class="get-app-input" />
		<input type="button" name="smsSend" id="smsSend" value="SEND" class="get-app-button" />
        -->


	<h3 style="margin-bottom:0;"><?php echo _e( 'Get E-Mail with app link',twentyfourteen); ?>:</h3>
        <!--<p>
            <input type="text" name="email" id="email" value="" class="get-app-input" autocomplete="off" />
            <input type="button" name="emailSend" id="emailSend" value="SEND" class="get-app-button" />
	</p>-->

        <div class="row">
            <div class="input-group input-group-lg col-sm-3" style=" margin-left: auto;
    margin-right: auto;">

                <input type="text" name="email" id="email" value="" class="form-control" autocomplete="off"  aria-describedby="sizing-addon1">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" name="emailSend" id="emailSend" value="SEND"><?php echo _e( 'Send',twentyfourteen); ?></button>
              </span>
            </div>
        </div>

	<?php
}
?>
</article>
<?php get_footer(); ?>
