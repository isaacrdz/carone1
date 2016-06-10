<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Divider -->
					
						<p class="text-center"><?php the_field("description") ?></p>
						<br>
						<?php if( have_rows('360_view') ): ?>
						<?php while( have_rows('360_view') ): the_row(); ?>

						<h3 class="text-center"><?php the_sub_field('360_title'); ?> </h3>
						<iframe src="<?php the_sub_field('url_360'); ?> " width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						<?php endwhile; ?>
						<?php endif; ?>

					<br>

			
			</div>
		</div>
	</div>
</section>