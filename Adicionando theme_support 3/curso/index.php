<?php get_header(); ?>

<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="conteudo">
	<main>
		<section class="slide container">Slide</section>
		<section class="servicos container">Serviços</section>
		<section class="meio container">
			<div class="row">
				<aside class="barra-lateral col-md-3">Barra Lateral</aside>
				<div class="noticias col-md-9">
					<?php 
						// Se houver algum post
						if(have_posts()) :
							// Enquanto houver algum post, chame o post de determinada maneira
							while (have_posts()) : the_post(); 
					?>

					<?php get_template_part('content', get_post_format()); ?>

					<?php 
					endwhile;
					else:
					 ?>
						<p>Nao tem nada ainda pra mostrar</p>
					<?php 
					endif;
					?>

				</div>
			</div>
		</section>
		<section class="mapa container">Mapa</section>
	</main>	
</div>
<?php get_footer(); ?>
