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
		
			<div class="footer-social-links"><div class="items">

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=34873120&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/34873120/3_0_868686FF_666666FF_1_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:34873120,lang:'ru'});return false}catch(e){}" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->

<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter34873120 = new Ya.Metrika({
                    id:34873120,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/34873120" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
				
				<a data-provider="youtube" href="https://www.youtube.com/user/CallsFreeCalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_youtube.png" />
				</a>
				
				<a data-provider="facebook" href="https://www.facebook.com/CallsFreeCalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.png" />
				</a>
				
				<a data-provider="twitter" href="https://twitter.com/CallsFreeCalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" />
				</a>
				
				<a data-provider="vkontakte" href="http://vk.com/callsfreecalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_vk.png" />
				</a>
				
				<a data-provider="odnoklassniki" href="http://www.odnoklassniki.ru/callsfreecalls">
					<img src="<?php echo get_template_directory_uri(); ?>/images/icon_odnoklassniki.png" />
				</a>
		
			</div></div>
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
