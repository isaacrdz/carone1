<?php
	/*
		Template Name: Contacto
	*/
?>

<?php get_header( ); ?>

<section>
	

<div class="container">
	<div class="row">
		<div class=" col-md-8">
			<h2 class="text-center">Contacto</h2>
			<div class="p-title-desc text-center">
				Le invitamos a utilizar nuestro sistema de citas mediante el siguiente formulario
			</div>
			<div class="">
				<?php echo do_shortcode('[contact-form-7 id="1509" title="Forma Autos Nuevos"]'); ?>

				<div>Al hacer clic en "Enviar", aceptas las <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">condiciones</a> y confirmas que has leido nuestro <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">Aviso de Privacidad</a>, incluido el uso de <a style="color:#1F6EC2;" href="http://www.carone.com.mx/aviso-de-privacidad/">Cookies</a>.
				</div>
			</div>

			
			
			


			

		</div>
			
		<div class=" col-md-4">
			<h2 class="text-center">Información</h2>
			<div class="hr1" style="margin-bottom:15px;"></div>

			<!-- Info - Icons List -->
				<ul class="icons-list">
					
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@carone.com.mx</li>
					<li><i class="fa fa-mobile"></i> <strong>Teléfono:</strong> +52 8989-3333</li>
				</ul>
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:15px;"></div>
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Horario</span></h4>
				
				<!-- Info - List -->
				<ul class="list-unstyled">
					<li><strong>Lunes - Sábado</strong> - 9:00 am a 8:00 pm</li>
					<li><strong>Domingo</strong> - 9:00 am a 6:00 pm</li>
				</ul>

				

		</div>

	</div>
</div>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-6">
	
		</div>
	</div>
</div>
<style>
	
	.form-2
	{
		width: 70%;
		margin: 0 auto;
	}
</style>



</section>
<br>
<?php get_footer( ); ?>