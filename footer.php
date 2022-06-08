<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woo-casino
 */

?>

<div class="color-footer">
<div class="wrapper footer-wrapper" >
		<div class="container">
			<footer class="footer">
				<p class="footer-description"><?php the_field("footer-description") ?></p>
				<p class="footer-rights"><?php the_field("footer-rights") ?></p>
			
			<div class="partners">
				<div class="partners-logo">
					<img src="<?php the_field("partners-logo") ?>" alt="partners-logo" class="partners-logo-img">
				</div>
				<div class="partners-logo">
					<img src="<?php the_field("partners-logo2") ?>" alt="partners-logo" class="partners-logo-img">
				</div>
			</div>
			</footer>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
