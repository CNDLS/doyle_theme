<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package futures
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php /* <script type="text/javascript" src="//use.typekit.net/oax2hcp.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script> */ ?>
<script type="text/javascript" src="//use.typekit.net/ecy5jzr.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php /*
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'futures' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'futures' ); ?></a>

			<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

*/ ?>

<div id="page">
<?php
	$header_image = get_theme_mod('header_image', '');
?>
<header style="background-image: url('<?php echo $header_image; ?>');">
		<div class="navbar-wrapper">
			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand"><?php
							// Display the Custom Logo
							the_custom_logo();

							// No Custom Logo, just display the site's name
							if (!has_custom_logo()) {
								?>
								<h1><?php bloginfo('name'); ?></h1>
								<?php
							}
							?></div>
					</div>
					<div class="navbar-collapse collapse">
						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'items_wrap' => '<ul class="nav navbar-nav pull-right">%3$s</ul>',
							'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
							'walker' => new WP_Bootstrap_Navwalker()
						)); ?>
					</div>
				</div>
			</div>

		</div>
		<?php if (is_front_page()): ?>
			<div class="jumbotron">
				<div class="container">
					<div class="inner-jumbo row">
						<h2 id="site-tagline" class="tagline site-tagline">
							<?php
								$tagline = get_theme_mod('header_tag', '');
							?>
							<span class="site-tagline__inner"><?php echo $tagline; ?></span>
							<?php // $post_id = 1639 corresponds to the page 'About the Program' ?>
							<a class="site-tagline__button" href="<?php echo the_permalink(1639); ?>">Learn more →</a>
						</h2>
					</div>
				</div>
			</div>
		<?php else : ?>
			<div id="banner"></div>
		<?php endif; ?>
	</header>
