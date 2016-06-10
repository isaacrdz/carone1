<?php
	/*
		Template Name: Chrysler Template
	*/
?>

<?php 


get_header();
?>

<div class="sliderRoww">
    <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'chrysler' ); ?>
</div>

<style>
	.bg-gray
	{
		background-color: #FAFAFA;
	}
</style>

<div class="bg-gray">
	
<?php include( TEMPLATEPATH . '/partials/chrysler-autos.php') ?>

</div>

<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>

<?php get_footer(); ?>