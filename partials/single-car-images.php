<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Start Content -->
		
				<div class="page-content">
					
					
					<!--Start Recent Projects-->
					

						<div class="projects-carousel touch-carousel">
							<?php 
								query_posts(array( 
									'post_type' => 'seminuevos_carone'
								) );  
							?>
						    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<!-- Start Project Item -->
							<div class="portfolio-item item">
								<div class="portfolio-border">
									<!-- Start Project Thumb -->
									<div class="portfolio-thumb">
									<a href="<?php the_permalink(); ?> ">
										<?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive')); } ?>							
									</a>
									</div>
									<!-- End Project Thumb -->
									<!-- Start Project Details -->
									<div class="portfolio-details">
										<a href=" <?php the_permalink(); ?>">
											<h4><?php the_title(); ?></h4>

										</a>

										
									</div>
									<!-- End Project Details -->
								</div>
							</div>
							<!-- End Project Item -->	
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?> 
										
						</div>
					</div>
					<!--End Recent Projects-->
					
					<!-- Divider -->
					<div class="" style="margin-top:45px; margin-bottom:35px;"></div>
					
					
					
					
				</div>
		
		<!-- End Content -->				
			</div>
		</div>
	</div>
</section>


