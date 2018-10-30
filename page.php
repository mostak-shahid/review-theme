<?php get_header(); ?>
<section id="section-content" class="page">
	<div class="contain-wrapper">
		<div class="container">
				<?php if ( have_posts() ) :?>		
					<?php get_template_part( 'content', 'page' ) ?>								
					<?php if (comments_open() || '0' != get_comments_number()) : comments_template(); endif;?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif;?>

		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/section', 'widgets' ); ?>
<?php get_footer(); ?>

