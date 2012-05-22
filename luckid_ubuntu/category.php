<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';
				?>
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
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
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
