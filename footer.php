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
              <a href="https://cndls.georgetown.edu/doyle/">
                <object data="http://doyle.georgetown.edu/wp-content/themes/doyle/img/berkley.svg" width="400" height="200" type="image/svg+xml">
                  <img src="http://doyle.georgetown.edu/wp-content/themes/doyle/img/berkley.png"  />
                </object>
              </a>
              <div class="footer-caption col-md-8 col-md-offset-2">
                <p class="text-left">
                <span class="glyphicon glyphicon-globe"></span><a href="http://berkleycenter.georgetown.edu" target="_blank">berkleycenter.georgetown.edu</a>
                <br>
                <span class="glyphicon glyphicon-phone"></span>(202) 687-5119
                <br>
                <span class="glyphicon glyphicon-envelope"></span><a href="mailto:berkleycenter@georgetown.edu">berkleycenter@georgetown.edu</a>
              </p>
              </div>
            </div>
            <div class="right-footer col-md-6">
            <object data="http://doyle.georgetown.edu/wp-content/themes/doyle/img/cndls.svg" type="image/svg+xml" width="400" height="200"> <img src="http://doyle.georgetown.edu/wp-content/themes/doyle/img/cndls.png" /></object></a>
            <div class="footer-caption col-md-8 col-md-offset-2">
              <p class="text-left">
              <span class="glyphicon glyphicon-globe"></span><a href="http://cndls.georgetown.edu" target="_blank">cndls.georgetown.edu</a>
              <br>
              <span class="glyphicon glyphicon-phone"></span>(202) 687-0625
              <br>
              <span class="glyphicon glyphicon-envelope"></span><a href="mailto:cndls@georgetown.edu">cndls@georgetown.edu</a>
            </p>
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
