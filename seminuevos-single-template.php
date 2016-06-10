<?php
	/*
	Template Name Posts: Seminuevos Single Template
	*/
?>

<?php get_header();?>
<br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="col-md-12">
						<h1 class="text-center"><?php the_title(); ?></h1>
					</div>
						<hr>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?> 
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php the_content( ); ?>
			</div>
			<div class="col-md-4">
<?php include( TEMPLATEPATH . '/partials/seminuevos-caracteristicas.php') ?>
<div class="text-center"><br>
					<h3>Solicita una cotización</h3>
					<p class="title-desc">Llena el formulario para solicitar una cotización sin compromiso</p>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="194" title="Forma Autos Nuevos"]'); ?> <br>

			
	
    
			</div>
		</div>
	</div>
</section>



<?php get_footer( ); ?>


