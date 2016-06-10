<?php
	/*
		Template Name: Ford Template
	*/
?>

<?php 


get_header();
?>

<div class="sliderRoww">
    <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'ford' ); ?>
</div>

<style>
	.bg-gray
	{
		background-color: #FAFAFA;
	}
</style>

<div class="bg-gray">
	
<?php include( TEMPLATEPATH . '/partials/ford.php') ?>
<?php include( TEMPLATEPATH . '/partials/ford-suvs.php') ?>
<?php include( TEMPLATEPATH . '/partials/ford-pickups.php') ?>
</div>

<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>

<?php get_footer(); ?>