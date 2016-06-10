<section>

<div class="container-wide contentcontainer mode-info-container">
	
	<div class="row">
		<div class="" id="colorgal">
			<h3>Galería de Colores</h3>
			
			<?php if( have_rows('colors') ){ ?>
				<script>
					function setActiveColor(e, id){
						jQuery('ul.colors-images li').hide();
						jQuery('#'+id).fadeIn();
						jQuery('ul.colors-picker li').removeClass('colorActive');
						jQuery(e).addClass('colorActive');
					}
					jQuery(function(){
						jQuery('ul.colors-picker li:first-child').trigger('click');
					})
				</script>
				<ul class="colors-images">
			
					<?php 
					$j	= 0;
					while( have_rows('colors') ): the_row(); 
						// vars
						$image	= get_sub_field('image_color');
						$id 	= 'color'.$j;
					?>
				
						<li class="color-image" id="<?php echo $id; ?>">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
						</li>
					
					<?php $j++; endwhile; ?>
			
				</ul>
			
			<?php }else {echo '<style>#colorgal{display:none;}</style>'; }?>
			
			<?php if( have_rows('colors') ): ?>

				<ul class="colors-picker">
			
					<?php 
						$k=0;
					while( have_rows('colors') ): the_row(); 
						// vars
						$id 	= 'color'.$k;
						$color	= get_sub_field('color_picker');
					?>
				
						<li class="color-picker" style="background:<?php echo $color;?>" onClick="setActiveColor(this, '<?php echo $id; ?>')" >
						</li>
				
					<?php 
					$k++;
					endwhile; ?>
			
				</ul>
			
			<?php endif; ?>
		</div>
	
<style>
	.mode-info-container{
		padding-top:0 !important;
	}
	.model-banner{
		max-height:700px;
		overflow:hidden;
	}
	.model-banner img{
		width:100%;
		height:auto;
	}
	ul.model-previews{
		text-align:center;
	}
	ul.model-previews li{
		display:inline-block;
		margin:10px;
		width:125px;	
	}
	.cont h3{
		width:100%;
		height:35px;
		background:url(images/sand-white-bk.jpg) repeat;
		padding:5px;
		cursor:pointer;
		font-size:15px;
		clear:both;
		font-weight:bold;
	}
	.cont h3.h-Cerrar::after{
	    content: ">";
	    display: inline-block;
	    -webkit-transform: rotate(90deg);
	    -moz-transform: rotate(90deg);
	    -o-transform: rotate(90deg);
	    -ms-transform: rotate(90deg);
	    transform: rotate(90deg);
		margin-left: 12px;
		font-size: 16px;
		position: relative;
		top: 2px;
	}
	
	.cont h3.h-open::after{
	    content: ">";
	    display: inline-block;
	    -webkit-transform: rotate(270deg);
	    -moz-transform: rotate(270deg);
	    -o-transform: rotate(270deg);
	    -ms-transform: rotate(270deg);
	    transform: rotate(270deg);
	    margin-left: 12px;
		font-size: 16px;
		position: relative;
		top: 2px;
	}
	
	.previews-container{
		margin-top:-100px;
		background:rgba(0,0,0,.4);
		position:relative;
		height:100px;
		padding-top:5px;
	}
	li.video-list-single, li.related-list-single{
		display:inline-block;
		width:250px;
		margin:10px;
		position:relative;
	}
	li.video-list-single .li-hover{
		display:none;
	}
	li.video-list-single:hover .li-hover{
		display:block;
		width:100%;
		height:100%;
		position:absolute;
		background:rgba(0,0,0,.7);
		text-align:center;
		padding-top:20%;
	}
	div.related-cont{
		position:relative;
	}
	div.related-cont .li-hover{
		display:none;
		position:absolute;
		top:0;
	}
	div.related-cont:hover .li-hover{
		display:block;
		width:100%;
		height:100%;
		position:absolute;
		background:rgba(0,0,0,.7);
		text-align:center;
		padding-top:20%;
	}
	button.wrp{
		width:70px;
		height:58px;
		background:#009fd9;
		color:#fff;
		font-size:40px;
		border:none;
		border-radius:5px;
	}
	.cono,.compara{
		padding:10px;
		background:#009fd9;
		color:#fff !important;
		font-size:20px;
		border:none;
		border-radius:5px;
		text-decoration:none;
	}
	ul.colors-images{
		list-style:none;
	}
	ul.colors-images li{
		display:none;
	}
	li.color-picker{
		width:50px; 
		height:50px;
		display:inline-block;
		margin:5px;
		border:solid #aaa 1px;
	}
	li.colorActive{
		border:solid #666 3px;
	}
	.coti-form #gform_submit_button_14{
		padding: 0px 30px;
		background: #009fd9;
		color: #fff !important;
		font-size: 13px;
		border: none;
		border-radius: 0;
		text-decoration: none;
		float: right;
	}
	.ver-inv{
		padding: 13px 30px;
		background: #009fd9;
		color: #fff !important;
		font-size: 16px;
		border: none;
		border-radius: 0;
		text-decoration: none;
		margin-left: 20px;
		position: relative;
		top: -10px;
		text-decoration:none;
	}
</style>
</section>