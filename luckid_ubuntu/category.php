<?php
/**
 * The template for displaying Category Archive pages.
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php
					printf( __( 'Category Archives: %s', 'luckid' ), '<span>' . single_cat_title( '', false ) . '</span>' );
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
									</h2>	
		     							<div class="post_time"><?php the_time('Y年n月j日'); ?></div>
		        						<div class="post_comments"><?php comments_popup_link ('抢沙发','1条评论','%条评论'); ?></div>
		        						<div class="clearBoth"></div>											
								</div>
								
								<div class="entry-content">
								  <?php the_content(); ?>
								</div>
								
		    <div class="entry-utility">
	
				<?php the_tags('Tagged as: ', ' , ' , ''); ?> | 
			        <a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark">阅读全文 &rarr;</a>	|			

		    </div><!-- end entry-utility -->
		    <div class="clear"></div><!-- clear entry-utility -->
		
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
