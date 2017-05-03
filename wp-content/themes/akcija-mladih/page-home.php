<?php 
/**
 * Template name: Home
 */

get_header() 

?>
	<!-- Page wrapper -->
		<div id="cs-page-wrapper">
			<div class="cs-container">
				<!-- Main content -->
				<div class="cs-main-content cs-sidebar-on-the-right">
						<?php 
							$args = array(
								
								'post_type' => array('post'),
								'cat' =>4,				
								//Order & Orderby Parameters
								'order'               => 'DESC',
								'orderby'             => 'date',
								//Pagination Parameters
								'posts_per_page'         => 1,
								
							);
						
							$posts = get_posts( $args );
							
						 ?>						 
				 	
					<!-- Featured post -->
					<div class="cs-featured-post">
						<div class="cs-featured-caption">
						<?php  foreach ( $posts as $post ) :  setup_postdata( $post ); ?>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							
						
						</div>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<?php endforeach; wp_reset_postdata(); ?>
					</div><!-- end .cs-featured-post -->										
					<!-- Big posts column -->
					<div class="cs-posts-column big">

						<?php 
							$args = array(
								
								'post_type' => array('post'),
								'category' => 3,			
								//Order & Orderby Parameters
								'order'               => 'DESC',
								'orderby'             => 'date',
								//Pagination Parameters
								'posts_per_page'    => 4,
								
							);
						
							$posts = get_posts( $args );							
						 ?>
						 <?php  foreach ( $posts as $post ) :  setup_postdata( $post ); 

				 		get_template_part( 'template-parts/content', get_post_format() ); 
						
						 endforeach; wp_reset_postdata(); ?>
					</div><!-- end .cs-posts-column -->
					

					<?php $args2 = array(
					
					'post_type' => array('post'),
					'cat' => 2,				
					//Order & Orderby Parameters
					'order'               => 'DESC',
					'orderby'             => 'date',
					//Pagination Parameters
					'posts_per_page'         => 4,
					
					);
			
					$smallposts = get_posts( $args2 );
					 ?>
					<!-- Small posts column -->
				<div class="cs-posts-column small">

					  <?php  foreach ( $smallposts as $post ) :  setup_postdata( $post ); ?>
						
						<!-- Post -->
						
						<article class="cs-post-type">
							<figure class="cs-post-image">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							</figure>
							<div class="cs-post-meta">
								<time><?php the_date(); ?></time>
								<div class="cs-post-share" title="Podijeli članak">
									<div class="cs-share-open">
										<i class="fa fa-share-alt" aria-hidden="true"></i>
									</div>
									<div class="cs-share-icons">
										<a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
										<a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
										<a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
							<div class="cs-post-body">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php the_excerpt(); ?></p>
							</div>
						</article><!-- end .cs-post-type -->
						<?php endforeach; wp_reset_postdata(); ?>
					</div><!-- end .cs-posts-column -->
				
				
				</div><!-- end .cs-main-content -->
				<?php get_sidebar(); ?>
			</div>
		</div><!-- end #cs-page-wrapper -->

		<?php get_footer(); ?>