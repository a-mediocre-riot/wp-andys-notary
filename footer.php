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

?>

	</div><!-- #content -->

	<!-- FOOTER -->
	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h3>Click the button below to sign up for our newsletter.</h3>
				<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus consequatur iusto repellat. A perspiciatis illo eius tempore? Ea, reprehenderit perferendis possimus similique omnis, alias sapiente cum quidem non facilis natus.</small><br>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conversion-modal">Call to Action</button>
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
				&copy; 2017 Andy's Notary
			</div>
		</div><!--.row-->
	</footer>

	<div class="modal fade" id="conversion-modal" tabindex="-1" role="dialog" dia-labelledby="conversion-modal-label">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="conversion-modal-label">Call to Action</h4>
				</div><!--.modal-header-->
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, sed, impedit. Debitis dignissimos amet magnam quidem, quaerat adipisci asperiores eligendi obcaecati eius sed, minima eaque cumque corrupti cupiditate labore eum!</p>
				</div>
			</div><!--.modal-content-->
		</div><!--.modal-dialog-->
	</div><!--.modal-->

</div><!-- #page -->

<!-- jQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- BOOTSTRAP 3 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
