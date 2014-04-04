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

<div id="main">
    <div class="container">

        <div class="row">

            <div class="col-md-7 tagline">
<h2 id="site-tagline">
<span class="multiline-wrap">
    <span class="multiline-inner">
        Engaging difference in higher education and learning<br />
        <a href="#">Learn more &rarr;</a>
    </span>
</span>
</h2>

            </div><!-- /.col-md-7 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /#main -->

<div id="second-tier">
    <div class="container">
    
        <div class="row">

            <div class="col-md-7 box">

<p class="lead"><span class="initialism">The Doyle Program</span> serves the entire Georgetown University community and is a campus-wide collaboration between the <a href="http://berkleycenter.georgetown.edu/">Berkley Center for Religion, Peace, and World Affairs</a>, the <a href="https://cndls.georgetown.edu/">Center for New Designs in Learning and Scholarship (CNDLS)</a> and <a href="http://college.georgetown.edu/">Georgetown College</a>.</p>

            </div><!-- /.col-md-7 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /#second-tier -->

<?php get_footer(); ?>
