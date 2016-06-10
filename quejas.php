<?php
	/*
		Template Name: Quejas y Comentarios
	*/
?>
<?php get_header(); ?>
<section id="quejas">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<iframe id="JotFormIFrame" onload="window.parent.scrollTo(0,0)" allowtransparency="true" src="http://form.jotformpro.com/form/52294266443963" frameborder="0" style="width:100%; height:892px; border:none;" scrolling="no"></iframe>

				
<script type="text/javascript">window.handleIFrameMessage = function(e) {var args = e.data.split(":");var iframe = document.getElementById("JotFormIFrame");if (!iframe)return;switch (args[0]) {case "scrollIntoView":iframe.scrollIntoView();break;case "setHeight":iframe.style.height = args[1] + "px";break;case "collapseErrorPage":if (iframe.clientHeight > window.innerHeight) {iframe.style.height = window.innerHeight + "px";}break;case "reloadPage":window.location.reload();break;}};if (window.addEventListener) {window.addEventListener("message", handleIFrameMessage, false);} else if (window.attachEvent) {window.attachEvent("onmessage", handleIFrameMessage);}</script>

	
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>