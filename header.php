<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woo-casino
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php the_field("favicon") ?>" type="image/x-icon">
	<link rel="canonical" href="<?php the_field('pages');?>">
	<link rel="alternate" href="<?php the_field('pages');?>" hreflang="en" />
	<title>Woo-Casino</title>
	<?php wp_head(  );?>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<header class="header">
				<span class="bonuses">
						<a class="header-menu-item" href="<?php the_field('bonuses-link');?>"><?php the_field('bonuses-text');?></a>
						<a class="header-menu-item mobileap" href="<?php the_field('mobileapp-link');?>"><?php the_field('mobileapp-text');?></a>
					</span>
				<div class="header-logo">
					<div>
						<a href="<?php the_field("home") ?>" class="header-logo-link">
							<img width="176"  height="51" src="<?php the_field("logo") ?>" alt="logo" class="header-logo-img">
						</a>
					</div>
				</div>
				<div class="header-menu">
						<span class="bonmenu">
							<a href="<?php the_field('bonuses-link');?>" class="header-menu-item headerstar bonusmenu"><?php the_field('bonuses-text');?></a>
							<a href="<?php the_field('mobileapp-link');?>" class="header-menu-item headerstar mobileap"><?php the_field('mobileapp-text');?></a>
						</span>
						<a href="<?php the_field('signup-link');?>" class="button-signup header-btn-up"><?php the_field('signup-text');?></a>
						<a href="<?php the_field('login-link');?>" class="button-login header-btn-in"><?php the_field('login-text');?></a>
						<img src="<?php the_field('country');?>" alt="country" class="country">
					</div>
					<a href="#" class="header-menu-toggle">
						<span></span>
					</a>
			</header>
		</div>
	</div>	
