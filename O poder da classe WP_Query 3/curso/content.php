<article class="post-format-padrao">
	<h1><?php the_title(); ?></h1>
	<?php the_post_thumbnail(array(175,175)); ?>
	<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
	<p>Categorias: <?php the_category(' '); ?></p>
	<p><?php the_tags('Tags: ', ', '); ?></p>
	<p><?php the_content(); ?></p>
</article>