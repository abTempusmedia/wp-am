<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package akcija-mladih
 */

get_header(); ?>

	<!-- Page wrapper -->
		<div id="cs-page-wrapper">
			<div class="cs-container">
				<!-- Main content -->
				<div class="cs-main-content cs-sidebar-on-the-right">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- Single article -->
					<article class="cs-post-single cs-post-type">
						<header>
							<h1><?php the_title(); ?></h1>
						</header>
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
						<figure class="cs-post-image">
						<?php if( has_post_thumbnail() ): ?>

							<?php the_post_thumbnail(); ?>
						<?php else: ?>
							<img src="http://placehold.it/800x450" alt="Akcija mladih">
						<?php endif; ?>
						</figure>
						<div class="cs-post-single-content">
							<?php the_content(); ?>
						</div>
						<div class="cs-post-single-tags">	
							<?php the_tags(); ?>
						</div>
					</article><!-- end .cs-post-single -->
					<?php endwhile; endif; ?>
					<?php include_once('inc/related-posts.php'); ?>
				</div><!-- end .cs-main-content -->
		
		<?php get_sidebar(); ?>
		</div><!-- #container -->
		
	</div><!-- #wrapper -->

<?php

get_footer();


				