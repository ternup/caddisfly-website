<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Caddisfly
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=yes" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Neuton:200,400|Kite+One' rel='stylesheet' type='text/css'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

		<body <?php body_class(); ?>>
	    
        <header id="header-container">

         <div id="header">

             <div id="logo">
                 <a href="<?php echo home_url( '/' ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                   <?php if ('' == '') {?>
				   <img src="<?php bloginfo( 'template_url' ); ?>/images/headers/logo.png" alt="<?php bloginfo('sitename'); ?>">
				   <?php } else { ?>
				   <h3><?php bloginfo( 'name' ); ?></h3>
                   <?php } ?></a>
			 </div>

           <?php if ( has_nav_menu( 'primary' ) ) { ?>
           <nav id="nav"><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></nav>
           <?php } else { ?>
           <nav id="nav"><ul><?php wp_list_pages("depth=1&title_li=");  ?></ul></nav>
           <?php } ?>

       </div>

   </header>
   

<!-- // header -->      
