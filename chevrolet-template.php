<?php
	/*
		Template Name: Chevrolet Template
	*/
?>

<?php get_header();?>

<div class="sliderRoww">
    <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'chevrolet' ); ?>
</div>


<style>
	.bg-gray
	{
		background-color: #FAFAFA;
	}
</style>

<div class="bg-gray">
	
<?php include( TEMPLATEPATH . '/partials/chevrolet.php') ?>
<?php include( TEMPLATEPATH . '/partials/chevrolet-suvs.php') ?>
<?php include( TEMPLATEPATH . '/partials/chevrolet-pickups.php') ?>
</div>
<?php echo do_shortcode('[parallax-scroll id="2210"]') ?>
<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>
<section>
	<div class="container">
<div class="row">

<div class="col-md-4">
<div class="text-center">
	
<h3>Experiencia Car One Chevrolet</h3>
<p class="title-desc">Vivela</p>
</div> 
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vLNXAX-k3-w" frameborder="0" allowfullscreen></iframe></div>
<div class="col-md-4">
<div class="text-center">
	
<h3>Testimoniales</h3>
<p class="title-desc">Lo que la gente dice de nosotros</p>
</div>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/H_TPcHu3JXQ" frameborder="0" allowfullscreen></iframe></div>
<div class="col-md-4">
<div class="text-center">
	
<h3>Ven a hacer tu prueba de manejo</h3>
<p class="title-desc">Agenda hoy mismo</p>
</div>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vWQzxApB2OI" frameborder="0" allowfullscreen></iframe></div>
</div>
</div>
</section>
<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"> </div>

<br><br><br>

<?php echo do_shortcode('[parallax-scroll id="107"]') ?>
	
<?php include( TEMPLATEPATH . '/partials/seminuevos-chevrolet.php') ?>





<?php get_footer() ?>

