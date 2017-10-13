<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Andy\'s_Notary
 */

?>

<article class="list-result container">
	<!-- POST FEATURE IMAGE -->
	<?php if (has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
	<?php endif; ?>

	<!-- POST TITLE -->
	<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

	<!-- POST DATE -->
	<p><em><?php the_date(); ?></em></p>
	
	<!-- POST TAGS -->
	<p><em><?php the_tags(); ?></em></p>

	<!-- POST EXCERPT -->
	<p>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>">
			Read more <i class="fa fa-angle-double-right"></i>
		</a>
	</p>
</article>
