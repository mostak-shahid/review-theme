<?php get_header(); ?>
<?php get_template_part( 'template-parts/section', 'slider' ); ?>
<section id="section-content" class="post">
	<div class="contain-wrapper">
		<div class="container">
				<?php if ( have_posts() ) :?>		
					<?php get_template_part( 'content', get_post_format() ) ?>
					
					<div class="pagination-wrapper">
					<?php
						the_posts_pagination( array(
							'show_all' => false,
							'screen_reader_text' => " ",
							'prev_text'          => 'Prev',
							'next_text'          => 'Next',
						) );
					?>
					</div>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif;?>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/section', 'products' ); ?>
<?php get_template_part( 'template-parts/section', 'widgets' ); ?>
<?php get_footer(); ?>