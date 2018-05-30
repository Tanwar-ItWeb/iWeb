<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset') ; ?> ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--  Site Header -->
<header>
<h2><a href="<?php echo home_url();?>"><?php bloginfo('name')?></a></h2>
<p><?php bloginfo('description'); ?></p>
<nav id="site-nav" class="nav navbar-inverse">
  <!-- Get Navigation menues -->
  <?php
   $nav_menus = array(
     'theme_location'  => 'primary_menu',
     'container'       => false,
     'menu_class'      => 'nav navbar-nav'
   );
   wp_nav_menu( $nav_menus ) ; ?>
</nav>
</header>
<!-- End Site Header  -->
