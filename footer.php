<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>

</div><!-- .site-content -->

<footer id="footer"role="contentinfo">
	<?php $titan = TitanFramework::getInstance("tf");  ?>
	<div  class="footer_top">
		<div class="container">
			<div class="col-md-6">
				<div class="footer_left">
					<?php echo $titan->getOption( 'footer_left' ); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="footer_right">
					<?php echo $titan->getOption( 'footer_right' ); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container">
			<div class="col-md-12">
				<div class="copyright-text">
					<?php
					echo $titan->getOption( 'copyright_text' );
					?>
				</div>
			</div>
		</div>
	</div>
</footer> <!-- / END FOOOTER  -->


	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->
<?php wp_footer(); ?>

</body>
</html>