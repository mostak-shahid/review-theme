<?php get_header(); ?>
<?php get_template_part( 'template-parts/section', 'slider' ); ?>
<section id="section-content" class="post">
	<div class="contain-wrapper">
		<div class="container">
				<?php if ( have_posts() ) :?>		
					<?php get_template_part( 'content', 'page' ) ?>
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif;?>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/section', 'products' ); ?>
<?php get_template_part( 'template-parts/section', 'widgets' ); ?>
<?php get_footer(); ?>