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

            <div class="col-md-7">
<h2 id="site-tagline" class="tagline">
<span class="multiline-wrap">
    <span class="multiline-inner">
        Engaging difference in higher education and learning<br />
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Learn more &rarr;</a>
    </span>
</span>
</h2>

<div class="box">
<p class="lead"><span class="initialism">The Doyle Engaging Difference Program</span> encourages Georgetown students and faculty to consider the value of difference and to engage it through enhanced learning opportunities inside and outside the classroom. This program is a campus-wide collaboration between the <a href="http://berkleycenter.georgetown.edu/">Berkley Center for Religion, Peace, and World Affairs</a>, the <a href="https://cndls.georgetown.edu/">Center for New Designs in Learning and Scholarship (CNDLS)</a> and <a href="http://college.georgetown.edu/">Georgetown College</a>.</p>
</div>

            </div><!-- /.col-md-7 -->

            <div class="col-md-4 col-md-offset-1 box posts">
<h2>Welcome</h2>

<p>Welcome to the Doyle Program for Engaging Difference. In addition to resources and information on our programs, check back for news, updates, and upcoming events.</p>

<p><em>To learn more about the various components of the Doyle Engaging Difference Program, please visit the <a href="http://berkleycenter.georgetown.edu/programs/doyle-engaging-difference-program">Berkley Center</a> and <a href="https://cndls.georgetown.edu/doyle/">CNDLS</a>.</em></p>
            </div><!-- /.col-md-5 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /#second-tier -->

<?php get_footer(); ?>
