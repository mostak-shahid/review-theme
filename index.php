<?php get_header(); ?>

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

<?php get_footer(); ?>