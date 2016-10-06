<article class="resultado-pesquisa">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<p>Categorias: <?php the_category(' '); ?></p>
	<p><?php the_excerpt(); ?></p>
</article>