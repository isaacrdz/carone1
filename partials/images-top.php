
<?php

if(get_field('titulo_imagen'))
{
	echo '<h2 class="text-center">' . get_field('titulo_imagen') . '</h2>';
}

?>

<img src="<?php the_field('top_image') ?> " alt="">


