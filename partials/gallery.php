<br>
<section id="galeria-nuevos">
	<div class="container">
		<div class="row">
			<?php if( have_rows('gallerycar') ): ?>
			<h2 class="text-center">Galeria de imagenes</h2>
			<?php while( have_rows('gallerycar') ): the_row(); ?>
			<div class="col-md-2">
				<div class="text-center">
				<a href="<?php the_sub_field('image') ?>" class="lightbox">
					<img src=" <?php the_sub_field('image') ?> " alt="<?php the_sub_field('name'); ?>">
				</a>
					<h3 style="margin-top: 11px;"><?php the_sub_field('name'); ?> </h3>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>


