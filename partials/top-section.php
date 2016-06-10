<?php while ( have_posts() ) : the_post();

	
	$carModel		= get_field('model');
	$carYear		= get_field('year');
	$carMake		= get_field('make');
	

 endwhile; ?>
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
						<h3>Solicita una cotización</h3>
						<p class="title-desc">Llena el formulario para solicitar una cotización sin compromiso</p>
					</div>

					<style>
						#formulario-nuevos label{
							display: none;
						}
					</style>
					<div id="formulario-nuevos">
<?php echo do_shortcode("[gravityform id=1 title=false description=false field_values='model=$carModel&year=$carYear&make=$carMake']"); ?>

			
					</div>

					<div>Al hacer clic en "Enviar", aceptas las <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">condiciones</a> y confirmas que has leido nuestro <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">Aviso de Privacidad</a>, incluido el uso de <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">Cookies</a>.</div>
			</div>
		</div>
	</div>
</section>