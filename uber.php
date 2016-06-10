<?php
	/*
		Template Name: Uber
	*/
?>
<?php get_header();?>

<?php echo do_shortcode('[parallax-scroll id="1561"]') ?>

<?php get_footer(); ?>




<style>
	
	.uber-logo
	{
		display: initial;
		margin-left: 350px;
	}
	.uber-name, .uber-tel,.uber-mail,.uber-comment
	{
		border:1px solid white;
		background: none;
		
	}

	form textarea, form input[type="text"], form input[type="tel"], form input[type="email"], form textarea, .uber-mail
	{
		color: inherit;
		color:white;
   		font-size: 18px;


	}

	input.uber-enviar[type=submit] {
			border:1px solid white;
			background: none; 
			margin-left: 1em;
}


::-webkit-input-placeholder {
   color: white;
   font-size: 18px;
}

:-moz-placeholder { /* Firefox 18- */
   color: white;  
   font-size: 18px;
}

::-moz-placeholder {  /* Firefox 19+ */
   color: white;  
   font-size: 18px;
}

:-ms-input-placeholder {  
   color: white;  
   font-size: 18px;
}
</style>