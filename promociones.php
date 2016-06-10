<?php
	/*
	Template Name Posts: Promociones
	*/
?>


<?php get_header();?>
<div class="">
	<img class="img-lg" src="<?php the_field('banner'); ?>"  alt="">
</div> <br>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1 class="text-center"><?php the_title(); ?></h1>
				

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
			<div class="col-md-12 text-center">
				
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
			
		</div>
	</div>
</section><br>

<?php get_footer(); ?>


