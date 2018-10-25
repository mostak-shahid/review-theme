<?php get_header(); ?>
<section id="section-content" class="post">
	<div class="contain-wrapper">
		<div class="container">
				<?php if ( have_posts() ) :?>		
					<?php get_template_part( 'content', get_post_format() ) ?>					
					<div class="post-linking">
						<div class="row">
							<div class="col-md-6 text-left">								
								<?php previous_post_link("%link", "Previous Post") ; ?>
							</div>
							<div class="col-md-6 text-right">
								<?php next_post_link("%link", "Next Post"); ?>
							</div>						
						</div>
					</div>					
					<?php if (comments_open() || '0' != get_comments_number()) : comments_template(); endif;?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif;?>

		</div>
	</div>
</section>
<?php get_footer(); ?>

