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


	// Seção Serviços

	$wp_customize->add_section( 'sec_servicos', array(
		'title'			=> 'Serviços',
		'description'	=> 'Seção para os serviços'
	));	

	// Serviço 1 - Título 
	$wp_customize->add_setting( 'set_servicos1_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos1_titulo', array(
		'label' 	=> 'Título para o serviço 1',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_titulo',
		'type'			=> 'text'
	) );

	// Serviço 1 - Descrição
	$wp_customize->add_setting( 'set_servicos1_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos1_descricao', array(
		'label' 	=> 'Descrição para o serviço 1',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos1_descricao',
		'type'			=> 'textarea'
	) );

	// Serviço 1 - Imagem
	$wp_customize->add_setting( 'set_servicos1', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_servicos_item1', array(
		'label'		=> 'Imagem do Serviço 1',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_servicos',
		'settings'	=> 'set_servicos1'
	)));



	// Serviço 2 - Título 
	$wp_customize->add_setting( 'set_servicos2_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos2_titulo', array(
		'label' 	=> 'Título para o serviço 2',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_titulo',
		'type'			=> 'text'
	) );

	// Serviço 2 - Descrição
	$wp_customize->add_setting( 'set_servicos2_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos2_descricao', array(
		'label' 	=> 'Descrição para o serviço 2',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos2_descricao',
		'type'			=> 'textarea'
	) );


	// Serviço 2 - Imagem
	$wp_customize->add_setting( 'set_servicos2', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_servicos_item2', array(
		'label'		=> 'Imagem do Serviço 2',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_servicos',
		'settings'	=> 'set_servicos2'
	)));




	// Serviço 3 - Título 
	$wp_customize->add_setting( 'set_servicos3_titulo', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos3_titulo', array(
		'label' 	=> 'Título para o serviço 3',
		'description'	=> 'Informe o título',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_titulo',
		'type'			=> 'text'
	) );

	// Serviço 3 - Descrição
	$wp_customize->add_setting( 'set_servicos3_descricao', array(
		'default'	=> ''
	));

	$wp_customize->add_control( 'ctrl_servicos3_descricao', array(
		'label' 	=> 'Descrição para o serviço 3',
		'description'	=> 'Informe a descrição',
		'section'		=> 'sec_servicos',
		'settings'		=> 'set_servicos3_descricao',
		'type'			=> 'textarea'
	) );


	// Serviço 3 - Imagem
	$wp_customize->add_setting( 'set_servicos3', array(
		'default'	=> ''
	));

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_servicos_item3', array(
		'label'		=> 'Imagem do Serviço 3',
		'width'		=> 200,
		'height'	=> 200,
		'section'	=> 'sec_servicos',
		'settings'	=> 'set_servicos3'
	)));	
}
add_action( 'customize_register', 'meupersonalizador' );