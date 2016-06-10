
<?php get_header( ); ?>

<div class="container">
	<div class="row"> <br>
		<div class="col-md-12 ">
			<?php while (have_posts()) : the_post(); ?>
			
			<section id="feature-img">
				<div class="">
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail ('list_articles_thumbs',array('class'=>'img-responsive img-blog')); } ?>
				</div>
			</section>
			<?php the_content(); ?>
			<?php endwhile;?>
		</div>
		
	</div>
</div>

  

<style>
	#feature-img div img{ margin: 0 auto;}
</style>
<?php get_footer( ); ?>

