<?php while ( have_posts() ) : the_post(); ?>
	<h2 class="post_title"><?php echo get_the_title(); ?></h2>
	<div class="desc"><?php echo get_the_content(); ?></div>
<?php endwhile; ?>