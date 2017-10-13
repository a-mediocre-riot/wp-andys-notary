<?php
/**
 * Template Name: Home
 * The template for the home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Andy\'s_Notary
 */


	$path = get_template_directory_uri();
	
	$heroHeader      = get_field("home_hero_header");
	$heroSubheader   = get_field("home_hero_subheader");
	$heroBtnText     = get_field("home_hero_btn_text");
	$heroBtnLink     = get_field("home_hero_btn_link");
	
	$section1Header  = get_field("home_sec1_header");
	$section1Content = get_field("home_sec1_content");
	$section1Image   = get_field("home_sec1_img");
	
	$section2Header  = get_field("home_sec2_header");
	$section2Content = get_field("home_sec2_content");
	$section2Image   = get_field("home_sec2_img");
	
	$servicesHeader  = get_field("home_service_header");
	$service1Class   = get_field("home_service1_class");
	$service1Title   = get_field("home_service1_title");
	$service1Text    = get_field("home_service1_text");
	$service2Class   = get_field("home_service2_class");
	$service2Title   = get_field("home_service2_title");
	$service2Text    = get_field("home_service2_text");
	$service3Class   = get_field("home_service3_class");
	$service3Title   = get_field("home_service3_title");
	$service3Text    = get_field("home_service3_text");
	$service4Class   = get_field("home_service4_class");
	$service4Title   = get_field("home_service4_title");
	$service4Text    = get_field("home_service4_text");

	get_header(); 
?>

<!-- HERO -->
<section class="home-hero container-fluid text-center">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1><?php echo $heroHeader; ?></h1>
			<p><?php echo $heroSubheader; ?></p>
			<a href="<?php echo $heroBtnLink?>" class="btn btn-primary"><?php echo $heroBtnText; ?></a>
		</div><!--.col-sm-8-->
	</div><!--.row-->
</section><!--.container-fluid-->

<!-- ABOUT US -->
<article class="home-about container">
	<h2><?php echo $section1Header; ?></h2>
	<?php if(!empty($section1Image)) { ?>
		<img src="<?php echo $section1Image['url']; ?>" alt="<?php echo $section1Image['alt']; ?>" class="pull-right">
	<?php } ?>
	<?php echo $section1Content; ?>
</article>

<!-- SERVICES -->
<article class="home-services container-fluid text-center">
	<div class="row">

		<h2><?php echo $servicesHeader; ?></h2>

		<div class="col col-md-2 col-md-offset-2 col-sm-3">
			<i class="fa fa-2x fa-<?php echo $service1Class; ?>"></i>
			<h4><?php echo $service1Title; ?></h4>
			<small><?php echo $service1Text; ?></small>
		</div><!--.col-md-2-->

		<div class="col col-md-2 col-sm-3">
			<i class="fa fa-2x fa-<?php echo $service2Class; ?>"></i>
			<h4><?php echo $service2Title; ?></h4>
			<small><?php echo $service2Text; ?></small>
		</div><!--.col-md-2-->

		<div class="col col-md-2 col-sm-3">
			<i class="fa fa-2x fa-<?php echo $service3Class; ?>"></i>
			<h4><?php echo $service3Title; ?></h4>
			<small><?php echo $service3Text; ?></small>
		</div><!--.col-md-2-->

		<div class="col col-md-2 col-sm-3">
			<i class="fa fa-2x fa-<?php echo $service4Class; ?>"></i>
			<h4><?php echo $service4Title; ?></h4>
			<small><?php echo $service4Text; ?></small>
		</div><!--.col-md-2-->

	</div><!--.row-->
</article>

<!-- OUR LOCATION -->
<article class="home-location container">
	<div class="text-right">
		<h2><?php echo $section2Header; ?></h2>
	</div>
	<?php if(!empty($section2Image)) { ?>
		<img src="<?php echo $section2Image['url']; ?>" alt="<?php echo $section2Image['alt']; ?>" class="pull-left">
	<?php } ?>
	<?php echo $section2Content; ?>
</article>

<?php get_footer(); ?>
