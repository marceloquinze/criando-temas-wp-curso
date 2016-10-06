<article class="post-format-video">
	<h1 class="verde"><?php the_title(); ?></h1>
	<p>Publicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
	<p>Categorias: <?php the_category(' '); ?></p>
	<p><?php the_content(); ?></p>
</article>