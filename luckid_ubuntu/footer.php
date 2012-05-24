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
				&copy; 2008 - <?php echo date('Y'); ?>  <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name' ) ?>" ><?php bloginfo( 'name' ) ?> </a> 
				<p>Theme design by: <strong>Ubuntu Planet</strong> | Imitation by <a href="http://www.luckid.com/" title="幸运小子">幸运小子</a>
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
<div id="gotopbtn"></div>
<script type="text/javascript">
backTop=function (btnId){
	var btn=document.getElementById(btnId);
	var d=document.documentElement;
	window.onscroll=set;
	btn.onclick=function (){
		btn.style.display="none";
		window.onscroll=null;
		this.timer=setInterval(function(){
			d.scrollTop-=Math.ceil(d.scrollTop*0.1);
			if(d.scrollTop==0) clearInterval(btn.timer,window.onscroll=set);
		},10);
	};
	function set(){btn.style.display=d.scrollTop?'block':"none"}
};
backTop('gotopbtn');
</script>
</body>
</html>
