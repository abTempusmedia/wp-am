<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package akcija-mladih
 */

?>

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
