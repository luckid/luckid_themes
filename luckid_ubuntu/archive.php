<?php
/**
 * The template for displaying Archive pages.
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<h1 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'luckid' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'luckid' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'luckid' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'luckid' ); ?>
<?php endif; ?>
			</h1>

<?php if ( have_posts() ) : ?>
		
				
					
							<?php while (have_posts()) : the_post(); ?>
							<div class="post">	
								
								<div class=postHeader>
									<h2 class="entry-title">
									<a href="<?php echo get_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
									</a>			
									<p><?php the_time('Y年n月j日'); ?></p>
									</h2>			
								</div>
								
								<div class="entry-content">
								  <?php the_content(); ?>
								</div>
								
								<div class="entry-utility">
									<span class="cat-links">									
										<p class="post_meta">	
										<?php the_tags('Tagged as: ', ' , ' , ''); ?>
										</p>
									</span>
								</div>
								<div class="clear"></div>
		
							</div><!-- end post -->
				<?php endwhile; ?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'luckid' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'luckid' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
								<div class="wptagcloud">
									<span class="cat-links">
										
										<p class="post_meta">	
										<?php wp_tag_cloud('smallest=14&largest=14&orderby=count'); ?>
										</p>
									</span>
								</div>
								<div class="clear"></div>
				</div><!-- #post-0 -->
<?php endif; ?>
			</div><!-- #content -->
						
<?php if ( function_exists ( 'wp_pagenavi' ) ) { wp_pagenavi ( ) ; } else { ?> 
  
<div class="nav-previous"> 
<?php next_posts_link ( '&larr; Previous Entries' ) ?> 
</div> 
<div class="nav-next"> 
<?php previous_posts_link ( 'Next Entries &rarr;' ) ?> 
</div> 
  
<?php } ?> 

		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
