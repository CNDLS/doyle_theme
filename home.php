<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package futures
 */

get_header(); ?>

<div id="carousel-wrapper">

    <div class="scrim"></div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <!-- <img src="img/slide1.jpg" alt="First slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>Designing the Future(s) of the University</h1>
              <p>Georgetown University has launched an integrative initiative that engages the whole Georgetown community in an exploration of issues facing higher education and actively experiments with new ways to deliver the education we value into the future.</p>
              <p><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Learn more &gt;</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

</div><!-- /.col-md-12 -->

<!--
    <div class="row" id="gradient">
    </div>
-->

    <div id="events-tier">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /#events-tier -->

    <div class="container" id="recent-tier">
        <div class="row">
            <div class="col-md-12">
                <h2>Recent</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grey-box.png" />
                <h3>Speaker Series</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4><a href="#">Read more &gt;</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grey-box.png" />
                <h3>Georgetown at SxSW</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4><a href="#">Read more &gt;</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grey-box.png" />
                <h3>Experiments</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4><a href="#">Read more &gt;</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grey-box.png" />
                <h3>From the Blog</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4><a href="#">Read more &gt;</a></h4>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
