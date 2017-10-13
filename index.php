<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Andy\'s_Notary
 */

get_header(); ?>

<!-- HERO -->
<section class="content-hero text-center">
	<h1><?php echo get_the_title(); ?></h1>
</section>

<!-- CONTENT -->
<article class="content-body">
	<?php the_content(); ?>
</article>


<?php
get_footer();
