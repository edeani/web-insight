<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="robots" content="index,follow" />
	<meta name="revisit-after" content="7 Days" />

	<title>
		<?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php echo the_search_query(); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_tag() ) { ?><?php single_tag_title();?> | <?php bloginfo('name'); ?><?php } ?>
	</title>
<!-- Favicons    ================================================== -->
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">

<!-- LOAD CSS FILES -->
<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">

<!-- color scheme -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/switcher/demo.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/switcher/colors/blue.css" type="text/css" id="colors">
<?php wp_head(); ?>

</head>

<body>
<!-- Preload images start //-->
<div class="images-preloader" id="images-preloader">
 <div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
 </div>
</div>
<!-- Preload images end //-->

<div id="wrapper">

	<!-- header begin -->
	<header class="site-header-1 site-header">
	 <!-- Main bar start -->
	 <div id="sticked-menu" class="main-bar">
		<div class="container">
		 <div class="row">
			<div class="col-md-12">

			 <!-- logo begin -->
			 <div id="logo" class="pull-left"> <a href="index.html" style="font-size:25px; "> <img src="<?php bloginfo('template_url'); ?>/images/logo-insight.png" width="130" alt=""/></a> </div>
			 <!-- logo close -->

			 <!-- btn-mobile menu begin -->
			 <a id="show-mobile-menu" class="btn-mobile-menu hidden-lg hidden-md"><i class="fa fa-bars"></i></a>
			 <!-- btn-mobile menu close -->

			 <!-- mobile menu begin -->
			 <nav id="mobile-menu" class="site-mobile-menu hidden-lg hidden-md">
				<ul>
				</ul>
			 </nav>
			 <!-- mobile menu close -->

			 <!-- desktop menu begin -->
			 <nav id="desktop-menu" class="site-desktop-menu hidden-xs hidden-sm">
						 <ul class="clearfix">
								 <li class="active"><a href="/">Inicio</a> </li>
								 <li><a href="/about">Sobre nosotros</a> </li>
								 <li><a href="libros-articulos.html">Logros</a>
									 <ul>
										 <li><a href="libros-articulos.html">Libros y Art&iacute;culos</a></li>
										 <li><a href="/dispositivos-y-software">Dispositivos y Software</a></li>
										 <li><a href="/trabajos-dirigidos">Trabajos dirigidos</a></li>
										 <li><a href="/reconocimientos">Reconocimientos</a></li>
									 </ul>
								 </li>
								 <li><a href="/trayectoria">Trayectoria</a> </li>
								 <li><a href="contact1.html">Contacto</a> </li>
						 </ul>
				 </nav>
			 <!-- desktop menu close -->

			 <!-- Header Group Button Right begin -->
			 <div class="header-buttons pull-right hidden-xs hidden-sm">
				<div class="header-contact">
				 <ul class="clearfix">
					<li class="phone"><i class="fa fa-phone"></i> <span>+571 3134057552</span></li>
					<li class="border-line"></li>
				 </ul>
				</div>

				<!-- Button Modal popup searchbox -->
				<!--div class="search-button">
				 <!-- Trigger the modal with a button -->
				 <!--a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a> </div>

				<!-- Top Cart -->

				<!-- Button Menu OffCanvas right -->

			<!--/div-->
			 <!-- Header Group Button Right close -->

			</div>
		 </div>
		</div>
	 </div>
	</header>
	<!-- header close -->
	<?php
  $lugar_page = "";
	if (is_home()) {
	?>
		<div class="gray-line"></div>
	<?php
	 }elseif (is_page()) {
	?>
		<div class="gray-line-2"></div>
	<?php
   }//fin elseif
  ?>


	<!-- Modal Search begin -->

	<!-- Modal Search close -->

	<!-- Menu OffCanvas right begin -->

	<!-- Menu OffCanvas right close -->
