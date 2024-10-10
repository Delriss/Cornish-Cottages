<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
	
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header id="header" role="banner">
		<img id="logo" src="https://ws314664-awt.remote.ac/wp-content/uploads/2024/03/Cornish-Cottages-logos_white_small.png" alt="logo">
		<nav id="menu" class="mainNav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
			<!-- <div id="search"><?php get_search_form(); ?></div> -->
		</nav>
		
		<!--Mobile Version of the Nav bar - Overlays a toggle button with a FA burger icon to create a toggle nav menu -->
		<div class="mobileBurgerMenu">
			<input type="checkbox" id="menuToggle" class="menuToggle">
			<label for="menuToggle" class="burgerIcon"><i class="fas fa-bars"></i></label>
			<nav id="menuMobile" class="mobileNav" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
			</nav>
		</div>

	</header>
<div id="container">