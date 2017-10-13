<?php
	/* Template Name: Schedule */

	get_header();
 ?>
	<section class="container text-center">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h1>Schedule an Appointment Today</h1>

			    <!-- CONTENT -->
                <?php while(have_posts()) : the_post(); ?>
                	<br><br>
	        	    <?php the_content(); ?>
                <?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
	</section>
	
	<?php
	    get_footer();
	 ?>