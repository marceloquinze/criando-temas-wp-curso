<footer>
	<div class="container">
		<div class="row">
			<div class="copyright col-md-7 col-sm-7 col-xs-4">
				<?php echo get_theme_mod('set_copyright'); ?>
			</div>
			<nav class="menu-rodape col-md-5 col-sm-5 col-xs-8 text-right">
				<?php wp_nav_menu( array('theme_location' => 'menu_rodape') ); ?>
			</nav>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
