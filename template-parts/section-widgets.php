<section id="section-widgets">
	<div class="contain-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_1' ); ?>
					<?php endif; ?>				
				</div>
				<div class="col-md-3">
					<?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_2' ); ?>
					<?php endif; ?>				
				</div>
				<div class="col-md-3">
					<?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_3' ); ?>
					<?php endif; ?>				
				</div>
				<div class="col-md-3">
					<?php if ( is_active_sidebar( 'footer_4' ) ) : ?>
					    <?php dynamic_sidebar( 'footer_4' ); ?>
					<?php endif; ?>
				
				</div>
			</div>
		</div>
	</div>
</section>