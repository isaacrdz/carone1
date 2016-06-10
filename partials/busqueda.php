<section id="busqueda" class="text-center">

<form role="search" method="get" class="" action="<?php echo home_url( '/' ); ?>">
	
		<input  type="search" class="busqueda" placeholder="<?php echo esc_attr_x( 'Ingresa Auto, Marca, Año, Sucursal', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( ' Busqueda:', 'label' ) ?>" />
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Buscar', 'submit button' ) ?>" />
</form>
</section>

<style>
	.busqueda
	{
		-webkit-appearance: none;background-color: rgb(249, 249, 249);border: none;padding: .5em;width: 30%;border: 1px solidwhitesmoke;
	}
</style>
