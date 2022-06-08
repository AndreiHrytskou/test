<?php
/*
Template Name: Страница 404
Template Post Type: page
 */

get_header(404);
?>
<div class="color-footer">
	<div class="header-bg">
		<a href="<?php the_field("home") ?>">
			<img src="<?php the_field("logo-404") ?>" alt="logo" class="logo-404">
		</a>
	</div>
</div>
<div class="wrapper error-bg">
	<div class="container">
		<div class="error">
			<div class="error-box">
				<img src="<?php the_field("error") ?>" alt="error">
				<p class="error-box-text"><?php the_field("error-text") ?></p>
				<a href="#" class="banner2-box-singup">sign up</a>
			</div>
		</div>
	</div>
</div>
<div class="footer-bg">
	<p class="footer-rights-404"><?php the_field("footer-rights") ?></p>
</div>
<?php
get_footer(404);
