<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package akcija-mladih
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Meta tags (needs to be first!) -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Site title -->
	<title><?php wp_title(''); ?></title>
	<!-- Favicons -->
	<link rel="shortcut icon" href="favicon.png">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" type="image/png" href="favicon-iphone.png">
	<link rel="apple-touch-icon" type="image/png" sizes="72x72" href="favicon-ipad.png">
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<!-- Off-canvas wrap -->
	<div class="cs-offcanvas-wrap">
		<div class="cs-offcanvas-close"><i class="fa fa-close" aria-hidden="true"></i></div>
		<div class="cs-offcanvas-nav"></div>
	</div><!-- end .cs-offcanvas-wrap -->

	<!-- Wrapper -->
	<div id="cs-wrapper">

		<!-- Header -->
		<header id="cs-header">
			<!-- Primary nav -->
			<div class="cs-primary-nav">
				<nav>
				    <ul>
				    	<li class="current-menu-item"><a href="index.html">Naslovnica</a></li>
				        <li class="menu-item-has-children">
				            <a href="index.html">Padajući izbornik</a>
				            <ul class="sub-menu">
				                <li class="menu-item-has-children">
				                    <a href="#">Link</a>
				                    <ul class="sub-menu">
				                        <li><a href="#">Link</a></li>
				                        <li><a href="#">Link</a></li>
				                        <li><a href="#">Link</a></li>
				                    </ul>
				                </li>
				                <li class="menu-item-has-children">
				                    <a href="#">Link</a>
				                    <ul class="sub-menu">
				                        <li><a href="#">Link</a></li>
				                        <li><a href="#">Link</a></li>
				                        <li><a href="#">Link</a></li>
				                    </ul>
				                </li>
				                <li class="menu-item-has-children">
				                    <a href="#">Link</a>
				                    <ul class="sub-menu">
				                        <li><a href="#">Link</a></li>
				                        <li><a href="#">Link</a></li>
				                        <li><a href="#">Link</a></li>
				                    </ul>
				                </li>
				            </ul>
				        </li>
				        <li><a href="o-nama.html">O nama</a></li>
				        <li><a href="program.html">Program</a></li>
				        <li><a href="kontakt.html">Kontakt</a></li>
				        <li><a href="pridruzi-se.html">Pridruži se!</a></li>
				        <li><a href="video.html">Video</a></li>
				    </ul>
				</nav>
				<!-- Toggle nav -->
				<div class="cs-toggle-nav">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div><!-- end .cs-toggle-nav -->
            </div><!-- end .cs-primary-nav -->
			<!-- Header hero -->
			<div class="cs-header-hero">
				<!-- Logo brand -->
				<div class="cs-header-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/demo/Akcija-Mladih.png" alt="Akcija Mladih"></a>
				</div><!-- end .cs-header-logo -->
			</div><!-- end .cs-header-hero -->
		</header><!-- end #cs-header -->