<?php
	get_header();
 ?>

<!-- HERO -->
<section class="content-hero text-center">
	<h1><?php the_title(); ?></h1>
</section>

<!-- CONTENT -->
<?php while(have_posts()) : the_post(); ?>
	<article class="content-body">
		<?php the_content(); ?>
	</article>
<?php endwhile; wp_reset_query(); ?>

<?php
	get_footer();
 ?>
