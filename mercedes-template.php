<?php
	/*
		Template Name: Mercedes Template
	*/
?>

<?php 


get_header();
?>

<div class="sliderRoww">
    <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'mercedes' ); ?>
</div>

<style>
	.bg-gray
	{
		background-color: #FAFAFA;
	}
</style>

<div class="bg-gray">
	
<?php include( TEMPLATEPATH . '/partials/mercedes-autos.php') ?>
<?php include( TEMPLATEPATH . '/partials/mercedes-coupe.php') ?>
<?php include( TEMPLATEPATH . '/partials/mercedes-todoterreno.php') ?>

</div>

<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>

<?php get_footer(); ?>