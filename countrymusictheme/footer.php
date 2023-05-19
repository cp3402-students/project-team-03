<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CountryMusicTheme
 */

?>
	<footer id="colophon" class="site-footer-top">
		<div class="site-footer-coloumn">
			<?php dynamic_sidebar('footer-section-1'); ?>
		</div><!-- .site-footer-coloumn -->
		<div class="site-footer-coloumn">
			<?php dynamic_sidebar('footer-section-2'); ?>
		</div><!-- .site-footer-coloumn -->
		<div class="site-footer-coloumn">
			<?php dynamic_sidebar('footer-section-3'); ?>
		</div><!-- .site-footer-coloumn -->
	</footer><!-- #colophon -->
	<footer id="colophon" class="site-footer-bottom">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'countrymusictheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Powered By Wordpress' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				bloginfo( 'name'); ;
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
