<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package futures
 */
?>

<?php wp_footer(); ?>
    <div id="footer">
        <div class="container">
          <div class="row">
            <div class="left-footer col-md-6">
              <?php if (!empty( get_theme_mod('left_footer_image', ''))): ?>
                <div class="col-md-5">
              <img src="<?php echo get_theme_mod('left_footer_image', '') ?>" />
                </div>
            <?php endif ?>
              <div class="footer-caption col-md-7">
               <?php echo get_theme_mod('left_footer_section', '') ?>
              </div>
            </div>
            <div class="right-footer col-md-6">
              <?php if (!empty( get_theme_mod('right_footer_image', ''))): ?>
                <div class="col-md-5">
            <img src="<?php echo get_theme_mod('right_footer_image', '') ?>" />
          </div>
          <?php endif ?>
            <div class="footer-caption col-md-7">
              <?php echo get_theme_mod('right_footer_section', '') ?>
            </div>
          </div>
          </div>
        </div>
    </div>

</div><!-- /#page -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/dropdown.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.js"></script>
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
