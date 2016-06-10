<?php get_header();?>
<div class="">
	<img class="img-lg" src="<?php the_field('banner'); ?>"  alt="">
</div> <br>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col-md-6">				
					<h1><?php the_title(); ?></h1>
					<h3>Precio desde: <strong><?php the_field('price') ?></strong></h3>
					<hr>
					<p class="text-justify"><?php the_field("description") ?></p>
				</div>
				<div class="col-md-6">
					<img src="<?php the_field('image_top'); ?>" alt="" class="img-responsive"> <br>
					

				</div>

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
			<div class="col-md-12">
				<?php the_content( ); ?>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
	
		<div class="row">
			<div class="col-md-6">
						<?php echo do_shortcode('[contact-form-7 id="194" title="Forma Autos Nuevos"]'); ?>
			</div>
			<div class="col-md-6">
			<div class="text-center">
		<h3>Solicita una cotizacion</h3>
		<p class="title-desc">Llena el formulario para solicitar una cotizacion sin compromiso</p>
	</div>
						<?php echo do_shortcode('[contact-form-7 id="194" title="Forma Autos Nuevos"]'); ?>
			</div>
		</div>
	</div>
</section><br>


<?php get_footer(); ?>

