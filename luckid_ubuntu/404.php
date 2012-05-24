<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

	<div id="container">
		<div id="content" role="main">

			<div id="post-0" class="post error404 not-found">
				<h1 class="entry-title"><?php _e( 'Not Found', 'luckid' ); ?></h1>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'luckid' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
								<div class="wptagcloud">
									<span class="cat-links">
										<p class="post_meta">	
										<?php wp_tag_cloud('smallest=14&largest=14&orderby=count'); ?>
										</p>
									</span>
								</div>
			</div><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #container -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>