<!-- Start Content -->
		<div id="">
			<div class="container">
				<div class="page-content">
					
					
					<!--Start Recent Projects-->
					<div class="recent-projects">
						<h4 class="title"><span>Chevrolet</span></h4>
						<div class="projects-carousel touch-carousel">
	<?php query_posts( 'cat=1
	' ); ?>

							 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<!-- Start Project Item -->
							<div class="portfolio-item item">
								<div class="portfolio-border">
									<!-- Start Project Thumb -->
									<div class="portfolio-thumb">
										
											
										<?php if ( has_post_thumbnail() ) { the_post_thumbnail ('blog-item',array('class'=>'img-responsive')); } ?>
											
										
									</div>
									<!-- End Project Thumb -->
									<!-- Start Project Details -->
									<div class="portfolio-details">
										<a href="#">
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
					<div class="hr5" style="margin-top:45px; margin-bottom:35px;"></div>
					
					
					
					
				</div>
			</div>
		</div>
		<!-- End Content -->