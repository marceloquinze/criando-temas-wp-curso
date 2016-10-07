<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php if(has_category()): ?>
		<p>Categorias: <?php the_category(' '); ?></p>
	<?php endif; ?>
	<p><?php the_excerpt(); ?></p>
</article>