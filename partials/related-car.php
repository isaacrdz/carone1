<section id="related">
	<div class="container">
		<div class="row">
			<?php if( have_rows('model_related') ): ?>
	
	<div class="row model-videos">
		<h3 class="text-center">También te puede interesar</h3>
		<ul class="model-videos-list">
		<?php while( have_rows('model_related') ): the_row(); 
			$image			= get_sub_field('related_image');
			$post_object	= get_sub_field('related_url');
			$url			= get_permalink( $post_object->ID);
			$description    = get_sub_field('related_description');
			$title 			= $post_object->post_title;
		?>
			<li class="col-md-3">
				<!-- Start Project Item -->
							<div class="portfolio-item item">
					  			<div class="portfolio-border">
									<!-- Start Project Thumb -->
									<div class="portfolio-thumb">
										<a href="<?php echo $url;?>">
										<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />							
										</a>
										<!-- Start Project Details -->
									<div class="portfolio-details">
										<a href=" <?php the_permalink(); ?>">
											<h4 class="text-center-no-padding"><?php echo $title; ?></h4>
										    <div class="text-center-no-padding">
										    <?php echo $description; ?>
										    </div>

										</a>
									</div>
									<!-- End Project Details -->
									</div>
									<!-- End Project Thumb -->
									
								</div>
							</div>
							<!-- End Project Item -->
			</li>
		<?php endwhile; ?>
		</ul>
	</div>
	<?php endif; ?>
		</div>
	</div>
</section>