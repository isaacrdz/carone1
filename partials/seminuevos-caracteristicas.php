<div class="row pricing-tables">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="pricing-table">
		<div class="plan-name">
			<h3>Características</h3>
		</div>
		<div class="plan-price">
			<h3>Precio: $<strong><?php the_field('price-used') ?>*</strong></h3>
			<p class="text-center-no-padding"><i style="font-size: 11px;">Precio sujeto a cambio sin previo aviso*</i></p>
		</div>
		<div class="plan-list">
			<ul>
				
				<li><strong>Marca</strong> <?php the_field('make') ?></li>
				<li><strong>Modelo</strong> <?php the_field('model') ?></li>
				<li><strong>Año</strong> <?php the_field('year') ?></li>
				<li><strong>Color</strong> <?php the_field('color') ?></li>
				<li><strong>Transmisión</strong> <?php the_field('transmision') ?></li>
				<?php if(get_field('characteristics')){	echo '<li><strong>'.'Características '.'</strong>'.get_field('characteristics') .'</li>';}?>
				<?php if(get_field('certificate')){	echo '<li><strong>'.'Certificado '.'</strong>'.get_field('certificate') .'</li>';}?>
				<?php if(get_field('km')){	echo '<li><strong>'.get_field('km') . ' Kilometros'.'<strong></li>';}?>
				<li><strong>Agencia</strong> <?php the_field('store') ?></li>
				
				<?php if( have_rows('ubicacion_map') ): ?>
				<?php while( have_rows('ubicacion_map') ): the_row(); ?>
				
				<iframe src="<?php the_sub_field('map_url'); ?> " width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>

				<?php endwhile; ?>
				<?php endif; ?>


				<?php if( have_rows('video') ): ?>
				<?php while( have_rows('video') ): the_row(); ?>
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_sub_field('video_id'); ?>" frameborder="0" allowfullscreen></iframe>

				<?php endwhile; ?>
				<?php endif; ?>
				
				


				

			</ul>
	</div>
</div>
