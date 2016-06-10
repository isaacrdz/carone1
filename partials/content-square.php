<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="big-title text-center">
				<h1><?php if ( is_category() ) :single_cat_title();else :_e( 'No hay resultados en su busqueda' );endif; ?> </strong></h1>
			</div>

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
			<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
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
	</div>
</div>

















