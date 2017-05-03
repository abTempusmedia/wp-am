<?php  
$posts = get_field('related_posts'); 
?>
<div class="cs-related-articles">
	<!-- Post -->
<?php if ($posts):  ?>
	
<!-- Related articles -->
<h4>Vezani članci</h4>
    
    <p>
    <?php foreach($posts as $post) : setup_postdata($post); ?>

    <article class="cs-post-type">
		<figure class="cs-post-image">

			<a href="<?php the_permalink(); ?>">
			<?php if( has_post_thumbnail() ) :?>
				<?php the_post_thumbnail(); ?>
			<?php else: ?>
				<img src="http://placehold.it/450x250" alt="Akcija mladih">
			<?php endif; ?>
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
		</div>
	</article><!-- end .cs-post-type -->

    <?php endforeach;wp_reset_postdata();?>
  
<?php endif; ?>
	
</div><!-- end .cs-related-articles -->