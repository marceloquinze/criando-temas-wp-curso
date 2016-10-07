<?php 

function meupersonalizador($wp_customize){

	// Seção copyright
	$wp_customize->add_section( 'sec_copyright', array(
		'title'			=> 'Copyright',
		'description'	=> 'Seção para o copyright'
	));

	$wp_customize->add_setting( 'set_copyright', array(
		'type'		=> 'theme_mod',
		'default'	=> 'Copyright - Todos os direitos reservados'
	));

	$wp_customize->add_control( 'ctrl_copyright', array(
		'label' 	=> 'Copyright',
		'description'	=> 'Informe o copyright',
		'section'		=> 'sec_copyright',
		'settings'		=> 'set_copyright',
		'type'			=> 'text'
	) );
}
add_action( 'customize_register', 'meupersonalizador' );