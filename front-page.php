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
        <div class="item active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slide1.jpg');">
          <div class="container">
            <div class="carousel-caption">
              <h1>Designing the Future(s)</h1>
              <p>Georgetown University has launched an integrative initiative that engages the whole Georgetown community in an exploration of issues facing higher education and actively experiments with new ways to deliver the education we value into the future.</p>
              <p><a class="btn btn-large btn-primary" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slide2.jpg');">
          <div class="container">
            <div class="carousel-caption">
              <h1>Kicking off the Initiative</h1>
              <p>Georgetown’s President and Provost lay the foundation at the Initiative’s launch by highlighting three “interlocking and mutually reinforcing” elements that are vital to the life of the University.</p>
              <p><a class="btn btn-large btn-primary" href="http://www.georgetown.edu/news/designing-the-futures-of-university-degioia-event.html">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/slide3.jpg');">
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
            <p class="lead">Join our mailing list to stay posted on news about Designing the Future(s)</p>
            <form action="https://docs.google.com/a/georgetown.edu/forms/d/1Q84Ky3B3eYDPwINIWSNB30W1fFxaEbppmi5_PmlEn7I/formResponse?embedded=true" method="POST" id="ss-form" role="form" target="_self" onsubmit="">
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="entry.1745113422" value="" class="ss-q-short form-control" placeholder="First name" id="entry_1745113422" dir="auto" aria-label="First Name  " aria-required="true" required="" title="">
                </div>

                <div class="col-md-2">
                    <input type="text" name="entry.116065383" value="" class="ss-q-short form-control" placeholder="Last name" id="entry_116065383" dir="auto" aria-label="Last Name  " aria-required="true" required="" title="">
                </div>
                
                <div class="col-md-3">
                    <input type="text" name="entry.957268176" value="" class="ss-q-short form-control" placeholder="Email" id="entry_957268176" dir="auto" aria-label="E-mail Address  " aria-required="true" required="" title="">
            </div>
            <div class="col-md-3">
                    <select name="entry.1627979989" id="entry_1627979989" class="form-control" aria-label="Relationship to Georgetown  " aria-required="true" required=""><option value="">Relationship to Georgetown</option>
                    <option value="Georgetown student">Georgetown student</option> <option value="Georgetown alumna/alumnus">Georgetown alumna/alumnus</option> <option value="Georgetown faculty/staff">Georgetown faculty/staff</option> <option value="Friend of Georgetown">Friend of Georgetown</option> <option value="Student at another university">Student at another university</option> <option value="Faculty/staff at another university">Faculty/staff at another university</option> <option value="I&#39;m interested in Designing the Future(s)">I&#39;m interested in Designing the Future(s)</option></select>
                </div>
                
                <div class="col-md-2">
                    <input type="hidden" name="draftResponse" value="[,,&quot;5101608115528919732&quot;]
                    ">
                    <input type="hidden" name="pageHistory" value="0">
                    <input type="hidden" name="fromEmail" value="false">

                    <input type="hidden" name="fbzx" value="5101608115528919732">

                    <button type="submit" class="btn btn-primary" id="subscribe_button" name="continue" value="Continue &raquo;" id="ss-submit">Sign Up</button>
                    </form>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

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
                <img src="<?php echo get_template_directory_uri(); ?>/img/healy.jpg" />
                <h3>Announcing the Initiative</h3>
                <p class="short">Read President DeGioia’s announcement inviting our whole community to join the conversation.</p>
                <h4><a href="http://www.georgetown.edu/president/messages/announcing-designing-the-futures.html">Read more</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hockfield.jpg" />
                <h3>Speaker Series</h3>
                <p class="short">Susan Hockfield, former President of MIT, and President DeGioia discuss what we should innovate, adjust&mdash;and fiercely preserve&mdash;in higher education today.</p>
                <h4><a href="http://www.georgetown.edu/designing-the-futures-of-the-university/speakers-series/hockfield/">Read more</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/sxswedu.png" />
                <h3>Georgetown at SXSW</h3>
                <p class="short">Georgetown takes Designing the Future(s) to the iconic culture and technology festival in Austin, TX with events beginning March 5.</p>
                <h4><a href="http://sxsw.georgetown.edu/">Read more</a></h4>
            </div>

            <div class="col-md-3">
                <img src="<?php echo get_template_directory_uri(); ?>/img/blog.jpg" />
                <h3>Continuing the Conversation</h3>
                <p class="short">Check the pulse: news, stories, thoughts and connections from our thought leaders.</p>
                <h4><a href="<?php echo esc_url( home_url( '/category/conversation/' ) ); ?>">Read more</a></h4>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
