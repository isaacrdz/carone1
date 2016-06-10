<?php 

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here
}
get_header( );
?>

<div class="container">
	<div class="row">
		<div class="sliderRoww">
    <?php if(function_exists('show_flexslider_rotator')) echo show_flexslider_rotator( 'front' ); ?>
</div>
	</div>
</div>

<?php include( TEMPLATEPATH . '/partials/busqueda.php') ?>
<section>
	<div class="container">
		<div class="row">
		<div class="text-center">
			<h1>
				Información al <i class="fa fa-phone"></i> 8989-3333
			</h1>
			<div id="call-btn" class="mtop">
				
				<a class="text-center  btn btn-primary btn-lg" href="tel:+(52)8189893333"><i class="fa fa-phone"></i> Marcar aquí  </a>
			</div>
			<style>
				.mtop{margin-top: 1em;}
			</style>
			
		</div>
		<!-- Txt -->
			<div class="text-center">
				<h3>Nuestras Marcas</h3>
				<p class="title-desc">Selecciona la marca de tu preferencia</p>
			</div>
		<!-- /Txt -->
			<!-- Brands -->

							<?php 
								query_posts(array( 
									'post_type' => 'carone_brands',
									'showposts' => 15
									
								) );  
							?>

							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div class=" col-sm-12 col-sm-3 col-md-3 mbottom text-center" >
											 <a href="<?php the_field('link') ?>" target="_blank">
													<?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive')); } ?>
											 	<h4 class="text-center"><?php the_field('nombre') ?></h4>
											 </a>
									      </div>
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?> 
		</div>
	</div>
</section>

<?php echo do_shortcode('[parallax-scroll id="107"]') ?>

	
<?php include( TEMPLATEPATH . '/partials/seminuevos-chevrolet.php') ?>
<?php get_footer( ); ?>
			
		


<style>
	.image-brand {
  filter: gray; /* IE6-9 */
  filter: grayscale(1); /* Firefox 35+ */
  -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
}

/* Disable grayscale on hover */
.image-brand:hover {
  filter: none;
  -webkit-filter: grayscale(0);

}

.mbottom
{
	margin-bottom: 2em;
}
</style>











