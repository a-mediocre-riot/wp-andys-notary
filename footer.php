<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Andy\'s_Notary
 */

	$footerHeader    = get_field("footer_header");
	$footerContent   = get_field("footer_content");
	$footerLink      = get_field("footer_link");
	$footerLinkText  = get_field("footer_link_text");
	$footerCopyright = get_field("footer_copyright");

?>

	</div><!-- #content -->

	<!-- FOOTER -->
	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h3><?php echo $footerHeader; ?></h3>
				<small><?php echo $footerContent; ?></small><br>
				<a href="<?php echo $footerLink ?>" class="btn btn-primary"><?php echo $footerLinkText; ?></a>
			</div><!--.col-sm-8-->
		</div><!--.row-->

		<div class="row lower">
			<div class="col-sm-4 col-sm-offset-2 text-left">
				<?php
					wp_nav_menu(array(
						'menu'        => 'Social Menu',
						'menu_class'  => 'social-menu',
						'link_before' => '<i class="fa fa-lg fa-',
						'link_after'  => '"></i>'
					));
				?>
			</div>
			<div class="col-sm-4 text-right">
				<?php echo $footerCopyright ?>
			</div>
		</div><!--.row-->
	</footer>

</div><!-- #page -->

<!-- jQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- BOOTSTRAP 3 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
