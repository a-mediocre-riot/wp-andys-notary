<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Andy\'s_Notary
 */

get_header(); ?>

<!-- HERO -->
<section class="content-hero text-center">
	<h1><?php echo get_the_title(); ?></h1>
</section>

<!-- CONTENT -->
<?php while(have_posts()) : the_post(); ?>
	<article class="content-body">
		<?php the_content(); ?>
	</article>
<?php endwhile; wp_reset_query(); ?>

<?php
get_footer();
