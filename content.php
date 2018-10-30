
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if (is_single()) : ?>
					<h2 class="post_title"><?php echo get_the_title(); ?></h2>
					<div class="desc"><?php echo get_the_content(); ?></div>
				<?php else : ?>
					<h2 class="post_title"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
					<div class="desc"><?php echo get_the_excerpt(); ?></div>
					<a href="<?php echo get_the_permalink(); ?>" class="btn btn-sm btn-blog">Read More</a>
				<?php endif ?>
			<?php endwhile; ?>
