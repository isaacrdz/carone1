<?php
	/*
		Template Name: KIA Template
	*/
?>

<?php 


get_header();
?>

<div class="sliderRoww">
    <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'kia' ); ?>
</div>

<style>
	.bg-gray
	{
		background-color: #FAFAFA;
	}
</style>

<div class="bg-gray">
	
<?php include( TEMPLATEPATH . '/partials/kia.php') ?>
</div>

<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>
<?php echo do_shortcode('[parallax-scroll id="3135"]' ); ?>
<?php get_footer(); ?>