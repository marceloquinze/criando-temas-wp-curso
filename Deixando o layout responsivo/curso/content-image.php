<article id="post-<?php the_ID(); ?>" <?php post_class(array('post-format-image')); ?>>
	<h1><a title="<?php the_title_attribute() ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<p>Categorias: <?php the_category(' '); ?></p>
	<p><?php the_content(); ?></p>
</article>