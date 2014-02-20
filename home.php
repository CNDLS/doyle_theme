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
          <div class="container">
            <div class="carousel-caption">
              <h1>Designing the Future(s) of the University</h1>
              <p>Georgetown University has launched an integrative initiative that engages the whole Georgetown community in an exploration of issues facing higher education and actively experiments with new ways to deliver the education we value into the future.</p>
              <p><a class="btn btn-large btn-primary" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Learn more &gt;</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>The Framework</h1>
              <p>Georgetown’s President and Provost lay the foundation at the Initiative’s launch by highlighting three “interlocking and mutually reinforcing” elements that are vital to the life of the University.</p>
              <p><a class="btn btn-large btn-primary" href="http://www.georgetown.edu/news/designing-the-futures-of-university-degioia-event.html">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Skillhack: 2nd Georgetown Hackathon</h1>
              <p>A one-day event where teams of students tackled the Provost’s Challenge: How can universities bridge boundaries of the curriculum and the workplace?</p>
              <p><a class="btn btn-large btn-primary" href="http://hack.georgetown.edu/">hack.georgetown.edu</a></p>
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
                <h3>Announcement</h3>
                <p>President DeGioia announces the Initiative in November 2013, calling for our whole community to join the conversation.</p>
                <h4><a href="http://www.georgetown.edu/president/messages/announcing-designing-the-futures.html">Read more</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grey-box.png" />
                <h3>Speaker Series</h3>
                <p>Susan Hockfield, former President of MIT, and President DeGioia discuss what we should innovate, adjust&mdash;and fiercely preserve&mdash;in higher education today.</p>
                <h4><a href="http://www.georgetown.edu/designing-the-futures-of-the-university/speakers-series/hockfield/">Read more</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grey-box.png" />
                <h3>Georgetown at SXSW</h3>
                <p>Georgetown takes Designing the Future(s) to the iconic culture and technology festival in Austin, TX with events beginning March 5.</p>
                <h4><a href="http://sxsw.georgetown.edu/">Read more</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/grey-box.png" />
                <h3>From the Blog</h3>
                <p>Check the pulse: news, stories, thoughts and connections from our thought leaders.</p>
                <h4><a href="/news/">Read more</a></h4>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
