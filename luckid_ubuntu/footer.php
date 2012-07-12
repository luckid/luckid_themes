<?php
/**
 * The template for displaying the footer.
 */
?>
	<div class="clearBoth"></div>

	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

	    <div id="site-info">
	    &copy; <?php echo date('Y'); ?>  <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name' ) ?>" ><?php bloginfo( 'name' ) ?> </a> All rights reserved<br />
	    Proudly powered by <a href="http://www.wordpress.org" title="wordpress">WordPress</a><br />
	    Theme by <a href="http://www.luckid.com/" title="幸运小子">luckid</a><br />
	    </div><!-- #site-info -->


		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<div class="go">
	<a title="到顶部" class="top" href="#top">至顶</a>
	<a title="到底部" class="bottom" href="#bottom">至底</a>
</div>

<a name="top" id="bottom"></a></body>
</html>
