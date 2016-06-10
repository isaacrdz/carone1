<?php get_header(); ?>
<!-- Divider -->
<div class="" style="margin-top:30px; margin-bottom:45px;"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<div class="big-title text-center">
			
				<h1> <strong style="text-transform: uppercase;font-weight: bold;">Youtube</strong></h1>
			</div>
<div class="pull-right">
	<script src="https://apis.google.com/js/platform.js"></script>

<div class="g-ytsubscribe" data-channelid="UC2a1x5-U84V1vvT9WRNfG1w" data-layout="full" data-count="hidden"></div>
</div>
			<div class="" style="margin-top:30px; margin-bottom:45px;"></div>

		</div>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-4">
			<!-- Start Project Item -->
				<h4 class="text-center-no-padding"></h4>
				<h4 class="text-center-no-padding" style="margin-top: 1em;margin-bottom: 1em;font-size: 18px;"><?php the_field('video_nombre') ?>  </h4>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('video_id') ?> " frameborder="0" allowfullscreen></iframe>
			<!-- End Project Item -->
			</div>

			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?> 
		</div>
		<div class="next-post text-center">
				
				<?php posts_nav_link( ' &#183; ', '<< Anterior', 'Siguiente >>' ); ?>
		</div>
		

			<style>
				.next-post a
				{
					color: #A5A5A5;
    				padding: .5em;
				}
			</style>
	</div>
</div>
<?php get_footer(); ?>