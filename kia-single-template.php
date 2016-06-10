<?php
	/*
	Template Name Posts: Kia Single Template
	*/
?>
<?php get_header();?>
<div class="">
	<img class="img-lg" src="<?php the_field('banner'); ?>"  alt="">
</div> <br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col-md-12">				
					<?php include( TEMPLATEPATH . '/partials/car-color.php') ?>
				</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?> 
			</div>
			<div class="col-md-6">
			<h1><?php the_title(); ?></h1>
					<h3>Precio desde: <strong><?php the_field('price') ?></strong></h3>
					<hr>
					<p class="text-justify"><?php the_field("description") ?></p>
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
			<div class="col-md-6 text-center">
				<h3>Porque comprar en Car One</h3>
					<ul class=""><br>
						<li> <i class="fa fa-check"></i> La mejor opción que puedas encontrar en el área metropolitana. </li>
						<li> <i class="fa fa-check"></i> Contamos con una agencia cerca de ti </li>
						<li> <i class="fa fa-check"></i> Amplio horario de servicio  </li>
						<li> <i class="fa fa-check"></i> Confianza en el servicio  </li>
						<li> <i class="fa fa-check"></i> Diferentes opciones en financiamientos     </li>
						
				</ul> <br>
				<h2 class=""><i class="fa fa-phone"></i> Llámanos al 8989-3333</h2>
			</div>
			<div class="col-md-6">
				<div class="text-center">
					<h3>Solicita una cotización</h3>
					<p class="title-desc">Llena el formulario para solicitar una cotización sin compromiso.</p>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="194" title="Forma Autos Nuevos"]'); ?>
			</div>
		</div>
	</div>
</section><br>

<?php get_footer(); ?>


