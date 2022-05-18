<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	

	<header id="masthead" class="site-header">
		<div class="site-logo">
			<a id="logo" href="<?php echo home_url(); ?>" title="<?php _e('Home', 'bigblank'); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tjcLogo.jpg" alt="<?php bloginfo('name'); ?> logo"/>
                <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
            </a>
		</div>
		

		<nav id="site-navigation" class="main-navigation">
			<div class="nav-wrapper">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>

			</div>
			
		</nav><!-- #site-navigation -->

		<div class="header-banner">

		</div>
	</header><!-- #masthead -->
