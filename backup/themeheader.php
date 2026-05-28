<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ultrabootstrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom/global.css">
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom/dev1.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom/style1.css">
	
	<?php wp_head(); ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NTWR58SB');</script>
<!-- End Google Tag Manager -->
<script src="https://airolabs.ai" integrity="sha384-QMVZSGrrJtrTvFz1PETZ1pnsNXdxUxzTnAkchCvb/HyzL44FH4eepeOpPlujxRIP" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

<header>	
<section class="logo-menu">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="row align-items-center">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="logo-wrap">
				    <div class="navbar-header">
				      	<div class="logo-tag">
			      			<?php if ( has_custom_logo()): the_custom_logo(); else: ?>
			      			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="site-title" ><?php echo bloginfo( 'name' ); ?></h1>
			      			<h2 class="site-description" ><?php bloginfo('description'); ?></h2><?php endif; ?></a>                     
      					</div>
				    </div>
				</div>
				<div class="menu-wrap">
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse show" id="bs-example-navbar-collapse-1">
						<?php if (get_theme_mod('header_search_setting', 1)) : ?>

							<form  class="navbar-form navbar-right" role="search">
								<ul class="nav pull-right">
									<div class="main-search">
										<button class="btn btn-search" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
										<i class="fa fa-search"></i>
										</button>
										<div class="search-box collapse" id="collapseExample">
												<div class="well search-well">
												<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
													<input type="text" class="form-control" placeholder="<?php echo __('Search a Keyword','ultrabootstrap');?>" value="<?php echo get_search_query(); ?>" name="s">
												</form>
												</div>
										</div>
									</div>
								</ul>
							</form>

						<?php endif; ?>  							
						<?php
				            wp_nav_menu( array(
				                'menu'              => 'primary',
				                'theme_location'    => 'primary',
				                'depth'             => 8,
				                'container'         => 'div',
				                'menu_class'        => 'nav navbar-nav navbar-right',
				                'fallback_cb'       => 'ultrabootsrap_wp_bootstrap_navwalker::fallback',
				                'walker'            => new ultrabootsrap_wp_bootstrap_navwalker())
				            );
				        ?>
				    </div> <!-- /.end of collaspe navbar-collaspe -->
				</div>
		</div>
	</div> <!-- /.end of container -->
	</nav>
</section> <!-- /.end of section -->
</header>
<?php 
	if(!is_front_page()) {
    		echo do_shortcode('[breadcrumb]');	
} 
 ?>