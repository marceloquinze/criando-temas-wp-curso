<article class="noticia-secundaria">
	<div class="miniatura">
	<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
	</div>
	<h1><?php the_title(); ?></h1>
	<p>por <span><?php the_author(); ?></span> em <span><?php the_category(' '); ?></span> <?php the_tags('Tags: ', ', '); ?></p>
	<p><?php the_excerpt(); ?></p>
</article>