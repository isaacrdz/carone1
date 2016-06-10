<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-12">				
					<?php include( TEMPLATEPATH . '/partials/car-color.php') ?>
					<?php include( TEMPLATEPATH . '/partials/images-top.php') ?>
				<p class="text-center-no-padding"><i style="font-size: 11px;">Imagen de uso meramente ilustrativo *</i></p>

				</div>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?> 
			</div>
			<div class="col-md-6">
					<h1 class="text-center-no-padding"><?php the_title(); ?></h1>
					<h3 class="text-center-no-padding">Precio desde: <strong><?php the_field('price') ?></strong>
					</h3>
					<p class="text-center-no-padding"><i style="font-size: 11px;">Precio sujeto a cambio sin previo aviso *</i></p>
					<hr>
					<div class="text-center">
						<h3>Solicita una cotizacion</h3>
						<p class="title-desc">Llena el formulario para solicitar una cotización sin compromiso</p>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="194" title="Forma Autos Nuevos"]'); ?>
			</div>
		</div>
	</div>
</section>