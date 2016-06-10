<?php
	/*
		Template Name: Mayor 100 Mil
	*/
?>

<?php get_header(); ?>
<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="big-title text-center">
			<?php include( TEMPLATEPATH . '/partials/busqueda.php') ?>

				<h1> <strong style="text-transform: uppercase;font-weight: bold;">Seminuevos mayor que $100,000</strong></h1>
			</div>
			<?php 
								query_posts(array( 
									'post_type' => 'seminuevos_carone',
									'cat'=> 32,
								) );  
							?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-3">
			<!-- Start Project Item -->
			<div class="portfolio-item item">
			<div class="portfolio-border">
			<!-- Start Project Thumb -->
			<div class="portfolio-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive')); } ?>
			</a>
			</div>
			<!-- End Project Thumb -->
			<!-- Start Project Details -->
			<div class="portfolio-details">
			<a href="<?php the_permalink(); ?>"><h4 class="text-center-no-padding"><?php the_title(); ?></h4></a>
			</div>
			<!-- End Project Details -->

			</div>
			

			</div>
			<!-- End Project Item -->
			</div>

			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?> 
		</div>
		<div class="next-post text-center">
				
				<?php posts_nav_link( ' &#183; ', '<< Anterior', 'Siguiente >>' ); ?>
			</div>

			<style>
				.next-post a
				{
					color: #A5A5A5;
    				padding: .5em;
				}
			</style>
	</div>
</div>
<?php get_footer(); ?>