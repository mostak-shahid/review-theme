<?php get_header() ?>
    <section id="error" class="content-wrapper">
    	<div class="content-wrap">
 	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<div class="left-col">
		        			<h2 class="error-title">404</h2>
	        			</div>  				
	    			</div>
	    			<div class="col-md-6">
	    				<div class="right-col">
					        <h4 class="subtitle">OOOPPS.! THE PAGE YOU WERE LOOKING FOR, COULDN'T BE FOUND.</h4>
					        <p>Try searching for the best match or browse the links below:</p>
					        <?php get_search_form() ?>
					        <?php
                            wp_nav_menu( array(
                                'menu'              => 'mobilemenu',
                                'theme_location'    => 'mobilemenu',
                                'depth'             => 1,
                                'container'         => false,
                                //'container_class'   => 'cssmenu',
                                'menu_class'        => 'error-page-list',
                                'fallback_cb'       => 'mosacademy_link_to_menu_editor'
                                )
                            );
                            ?>		    					
	    				</div>	
	    			</div>
	    		</div>
	    	</div>   		
    	</div>
    </section><!--/#error-->
<?php get_footer(); ?>