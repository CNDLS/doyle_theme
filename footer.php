<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package futures
 */
?>


	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="left-footer col-md-6">
					<div class="col-md-5">
						<img src="<?php echo get_template_directory_uri() . '/img/berkley-logo.png'; ?>" />
					</div>
					<div class="footer-caption col-md-7">
						<p class="text-left">
							<span class="glyphicon glyphicon-globe"></span><a class="footer-contact-link" href="<?php echo get_theme_mod('left_footer_url', ''); ?>"><?php echo get_theme_mod('left_footer_url', ''); ?></a>
							<br>
							<span class="glyphicon glyphicon-phone"></span><?php echo get_theme_mod('left_footer_phone', ''); ?>
							<br>
							<span class="glyphicon glyphicon-envelope"></span><a class="footer-contact-link" href="mailto:<?php echo get_theme_mod('left_footer_email', ''); ?>"><?php echo get_theme_mod('left_footer_email', ''); ?></a>
						</p>
					</div>
				</div>
				<div class="right-footer col-md-6">
					<div class="col-md-5">
						<img src="<?php echo get_template_directory_uri() . '/img/cndls-logo.png'; ?>" />
					</div>
					<div class="footer-caption col-md-7">
						<p class="text-left">
							<span class="glyphicon glyphicon-globe"></span><a class="footer-contact-link" href="<?php echo get_theme_mod('right_footer_url', ''); ?>"><?php echo get_theme_mod('right_footer_url', ''); ?></a>
							<br>
							<span class="glyphicon glyphicon-phone"></span><?php echo get_theme_mod('right_footer_phone', ''); ?>
							<br>
							<span class="glyphicon glyphicon-envelope"></span><a class="footer-contact-link" href="mailto:<?php echo get_theme_mod('right_footer_email', ''); ?>"><?php echo get_theme_mod('right_footer_email', ''); ?></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /#page -->

		<?php wp_footer(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/dropdown.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<?php /*
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48388000-1', 'georgetown.edu');
  ga('send', 'pageview');

</script>
*/ ?>
</body>
</html>
