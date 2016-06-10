<?php
	/*
	Template Name Posts: Seminuevos Single Template
	*/
?>
<?php get_header();?>
<br><br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center"> <strong style="text-transform: uppercase;font-weight: bold;">Seminuevos</strong></h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php $images = get_field('gallery'); if( $images ): ?>
						        <div class="row">
						            <?php foreach( $images as $image ): ?>
						                <div class="col-md-4 padding-bottom">
						                    <a href="<?php echo $image['url']; ?>" class="lightbox">
						                        <img style="border-radius: 17px;" class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
						                    </a>
						            </div>
						            <?php endforeach; ?>
						        </div>
						    <?php endif; ?>
						    <br>
								

			</div> 
			<style>
				.padding-bottom
				{
					padding-bottom: 15px ;

				}

				#formulario-nuevos label{
							display: none;
						}
			</style>
			
			<div class="col-md-4">
				<?php include( TEMPLATEPATH . '/partials/seminuevos-caracteristicas.php') ?>
				<div class="text-center-no-padding"><br>
					<h3>Solicita una cotización</h3>
					<p class="title-desc">Llena el formulario para solicitar una cotización </p>
				</div>
				<div id="formulario-nuevos">
					
				<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?> <br>
				</div>

				<div>Al hacer clic en "Enviar", aceptas las <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">condiciones</a> y confirmas que has leido nuestro <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">Aviso de Privacidad</a>, incluido el uso de <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">Cookies</a>.
				</div>
				
			</div>
		</div>
	</div>
</section>




<?php get_footer( ); ?>