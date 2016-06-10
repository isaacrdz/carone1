<?php get_header();?>
<div class="sliderRoww">
	<img class="img-lg" src="<?php the_field('banner'); ?>"  alt="">
</div>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">		
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2 class="text-center"><?php the_title();?></h2>
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
