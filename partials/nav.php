<!-- Start Header ( Logo & Naviagtion ) -->
			<div class="navbar navbar-default navbar-top">
				<div class="container">
					<div class="navbar-header">
						<!-- Stat Toggle Nav Link For Mobiles -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<!-- End Toggle Nav Link For Mobiles -->
						<a class="navbar-brand" href="http://www.carone.com.mx"><img class="img-responsive" src="http://www.carone.com.mx/wp-content/uploads/2015/07/logo.png" alt="" width="100"></a>
					</div>
					<div id="mi-menu" class="navbar-collapse collapse ">
						
						 <?php
                            wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse navbar-right ',
                            'container_id'      => 'mi-menu',
                            'menu_class'        => 'nav navbar-nav ',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
        				?>
					</div>
				</div>
			</div>
			<!-- End Header ( Logo & Naviagtion ) -->