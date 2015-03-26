<?php	
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">	
			<div class="row">
				<div class="widgets_area">
					<?php dynamic_sidebar(); ?>
				</div>
			</div>
			
				<div class="footer_part">
					<div class="col-sm-4">
						<p>Lorem ipsum is a dummy text</p>
					</div>
					
					<div class="col-sm-4 pull-right">
						<p id="copyright">Copyright Lorem Ipsum Demo Text.......</p>
					</div>
				</div>
			
		</div>
		<!-- <div class="site-info">
			<a href="<?php ?> echo esc_url( __( 'http://wordpress.org/', '_s' ) ); <?php ?>"><?php ?>printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); <?php ?></a>
			<span class="sep"> | </span>
			<?php ?>printf( __( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); <?php ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
