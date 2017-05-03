<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akcija-mladih
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


	<?php //dynamic_sidebar( 'sidebar-1' ); ?>


<!-- Sidebar -->
		<aside class="cs-main-sidebar cs-sticky-sidebar">
					<!-- Widget - search -->
					<div class="widget widget_search">
						<form>
							<input type="search" placeholder="Pretraži..." name="Search">
						</form>
					</div><!-- end .widget_search -->
					<!-- Widget - text -->
					<div class="widget widget_text">
						<div>
							<img src="demo/facebook-widget.png" alt="Akcija mladih">
						</div>
					</div><!-- end .widget_text -->
					<!-- Widget - post list -->
					<div class="widget widget_post_list">
						<div class="widget-title">Post list</div>
						<ul>
							<li>						 
								<div class="cs-post-type">
									<div class="cs-post-image">
										<a href="clanak.html"><img src="http://placehold.it/80x80" alt=""></a>
									</div>
									<div class="cs-post-body">
										<h3><a href="clanak.html">Podrška SNAGE za Grad Rijeku i Primorsko-goransku županiju!</a></h3>
										<div class="cs-post-meta">
											<time datetime="2016-02-14">14.02.2016.</time>
										</div>
									</div>
								</div> 
							</li>
							<li>						 
								<div class="cs-post-type">
									<div class="cs-post-image">
										<a href="clanak.html"><img src="http://placehold.it/80x80" alt=""></a>
									</div>
									<div class="cs-post-body">
										<h3><a href="clanak.html">Podrška SNAGE za Grad Rijeku i Primorsko-goransku županiju!</a></h3>
										<div class="cs-post-meta">
											<time datetime="2016-02-14">14.02.2016.</time>
										</div>
									</div>
								</div> 
							</li>
							<li>						 
								<div class="cs-post-type">
									<div class="cs-post-image">
										<a href="clanak.html"><img src="http://placehold.it/80x80" alt=""></a>
									</div>
									<div class="cs-post-body">
										<h3><a href="clanak.html">Podrška SNAGE za Grad Rijeku i Primorsko-goransku županiju!</a></h3>
										<div class="cs-post-meta">
											<time datetime="2016-02-14">14.02.2016.</time>
										</div>
									</div>
								</div> 
							</li>
							<li>						 
								<div class="cs-post-type">
									<div class="cs-post-image">
										<a href="clanak.html"><img src="http://placehold.it/80x80" alt=""></a>
									</div>
									<div class="cs-post-body">
										<h3><a href="clanak.html">Podrška SNAGE za Grad Rijeku i Primorsko-goransku županiju!</a></h3>
										<div class="cs-post-meta">
											<time datetime="2016-02-14">14.02.2016.</time>
										</div>
									</div>
								</div> 
							</li>
						</ul>
					</div><!-- end .widget_post_list -->
					<!-- Widget - pages -->
					<div class="widget widget_pages">
						<div class="widget-title">Stranice</div>
						<ul>
							<li><a href="#">Doniraj</a></li>
							<li><a href="#">Statut</a></li>
							<li><a href="#">Financijski izvještaj</a></li>
						</ul>
					</div>
					<!-- Widget - tags -->
					<div class="widget widget_tag_cloud">
						<div class="widget-title">Tags</div>
						<div class="tagcloud">
							<a href="#">music</a>
							<a href="#">wtf</a>
							<a href="#">people</a>
							<a href="#">bike</a>
							<a href="#">girl</a>
							<a href="#">fail</a>
							<a href="#">city</a>
							<a href="#">design</a>
							<a href="#">fun</a>
							<a href="#">style</a>
							<a href="#">trendy</a>
							<a href="#">tutorial</a>
							<a href="#">video</a>
							<a href="#">studio</a>
							<a href="#">code</a>
							<a href="#">crazy</a>
						</div>
					</div><!-- end .widget_tag_cloud -->
				</aside><!-- end .cs-main-sidebar -->
