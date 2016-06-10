<?php
	/*
		Template Name: Tour Template
	*/
?>
<?php get_header();?>
<div class="sliderRoww">
    <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'tour' ); ?>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">		
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<div class="col-md-12 center-block text-center">						
					<?php the_content( ); ?>
					</div>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?> 
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer( ); ?>
