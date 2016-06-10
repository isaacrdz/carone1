<?php
	/*
		Template Name: Fiat Template
	*/
?>

<?php 


get_header();
?>

<div class="sliderRoww">
    <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'fiat' ); ?>
</div>

<style>
	.bg-gray
	{
		background-color: #FAFAFA;
	}
</style>

<div class="bg-gray">
	
<?php include( TEMPLATEPATH . '/partials/fiat-autos.php') ?>
<?php include( TEMPLATEPATH . '/partials/fiat-suvs.php') ?>

</div>

<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>

<?php get_footer(); ?>