<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Andy\'s_Notary
 */

	$path = get_template_directory_uri();

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title>Andy's Notary</title>
	
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'andys_notary' ); ?></a>

	<!-- NAVIGATION -->
	<nav>
		<img src="<?php echo $path; ?>/img/logo.png" alt="Andy's Notary Logo"/>

		<!-- Force the nav below the logo for sm/xs screens -->
		<div class="visible-sm visible-xs"></div>

		<?php
			wp_nav_menu( array(
				'menu' => 'menu',
				'container' => '',
				'fallback_cb' => false
			))
		?>
	</nav><!--.navbar-->

	<div id="content" class="site-content">
