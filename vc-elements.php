<?php
	vc_map(array(
		'name'						=>__('icon','astrum'),
		'description'				=>__('This is for icon','astrum'),
		'base'						=>'icons',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
					array(
					  'type' => "iconpicker",
					  "admin_label" => true,
					  "heading" => __( "Icon Name", "astrum" ),
					  "param_name" => "astrum_icon"
					),
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Give icon heading", "astrum" ),
					  "param_name" => "astrum_icon_heading"
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "Icon description", "astrum" ),
					  "param_name" => "astrum_icon_desc"
					),
			
		),
		
	));
	
	// recent work
	
	vc_map(array(
		'name'						=>__('Recent works','astrum'),
		'description'				=>__('This is for recent work','astrum'),
		'base'						=>'recent_works',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Post per slider", "astrum" ),
					  "param_name" => "recent_works_p"
					),
					
			
		),
		
	));
	
	// about us page heading
	vc_map(array(
		'name'						=>__('Heading with text','astrum'),
		'description'				=>__('This is for about','astrum'),
		'base'						=>'heading_text',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "heading", "astrum" ),
					  "param_name" => "heading_text_h"
					),
					array(
					  'type' => "textfield",
					  'admin_label' => true,
					  'heading' => __( 'span', 'astrum' ),
					  'param_name' => 'heading_text_s'
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "paragraph", "astrum" ),
					  "param_name" => "heading_text_p"
					),
					
			
		),
		
	));
	
	
	// Skill
	
	vc_map(array(
		'name'						=>__('Skill','astrum'),
		'description'				=>__('This is for skill','astrum'),
		'base'						=>'skill',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
			array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Title',
			  'param_name' => 'skill_col_head',
			  ),
		
				array(
					'type' => 'param_group',
					'heading'=> 'Skill Heading',
					'param_name' => 'skill_group',
					'params'	=> array(
							array(
							  'type' => "iconpicker",
							  "admin_label" => true,
							  "heading" => __( "Icon name", "astrum" ),
							  "param_name" => "skill_icon"
							),
							array(
							  'type' => "textfield",
							  'admin_label' => true,
							  'heading' => __( 'heading', 'astrum' ),
							  'param_name' => 'skill_heading'
							),
							array(
							  'type' => "textfield",
							  "admin_label" => true,
							  "heading" => __( "percent", "astrum" ),
							  "param_name" => "skill_bar_percent"
							),
					),	
				),
		),
	));
	
	
	//service page heading
	vc_map(array(
		'name'						=>__('service head','astrum'),
		'description'				=>__('This is for skill','astrum'),
		'base'						=>'service_head',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
			array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Title',
			  'param_name' => 'head',
			  ),
			  array(
			  'type' => "textfield",
			  'admin_label' => true,
			  'heading' => __( 'span', 'astrum' ),
			  'param_name' => 'heading_text_span'
				),
			array(
				  'type' => "textarea",
				  "admin_label" => true,
				  "heading" => __( "paragraph", "astrum" ),
				  "param_name" => "heading_text_para"
				),
		),
	));
	
	// Team
	vc_map(array(
		'name'						=>__('Our Team','astrum'),
		'description'				=>__('This is for Team work','astrum'),
		'base'						=>'team',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Post per slider", "astrum" ),
					  "param_name" => "team_p"
					),
		),
	));

	// why choose us
	vc_map(array(
		'name'						=>__('choose','astrum'),
		'description'				=>__('This is for choose','astrum'),
		'base'						=>'choose',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
			array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Title',
			  'param_name' => 'choose_col_head',
			  ),
		
				array(
					'type' => 'param_group',
					'heading'=> 'Choose Heading',
					'param_name' => 'choose_group',
					'params'	=> array(
							
							array(
							  'type' => "textfield",
							  'admin_label' => true,
							  'heading' => __( 'heading', 'astrum' ),
							  'param_name' => 'choose_heading'
							),
							
					),	
				),
		),
	));
	
	// Client
	vc_map(array(
		'name'						=>__('Our Client','astrum'),
		'description'				=>__('This is for Client','astrum'),
		'base'						=>'client',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Client Heading", "astrum" ),
					  "param_name" => "client_head"
					),
		),
	));
	
	//Our Services
	
	vc_map(array(
		'name'						=>__('Our Services','astrum'),
		'description'				=>__('This is for Our services','astrum'),
		'base'						=>'our_services',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
			array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Title',
			  'param_name' => 'services_title_head',
			  ),
		
				array(
					'type' => 'param_group',
					'heading'=> 'Service Heading',
					'param_name' => 'service_group',
					'params'	=> array(
							array(
							  'type' => "iconpicker",
							  "admin_label" => true,
							  "heading" => __( "Icon name", "astrum" ),
							  "param_name" => "service_icon"
							),
							array(
							  'type' => "textfield",
							  'admin_label' => true,
							  'heading' => __( 'heading', 'astrum' ),
							  'param_name' => 'service_name'
							),
							array(
							  'type' => "textarea",
							  "admin_label" => true,
							  "heading" => __( "Description", "astrum" ),
							  "param_name" => "service_desc"
							),
					),	
				),
		),
	));
	
	
	
	
	
	/*vc_map(array(
		'name'						=>__('Our Services','astrum'),
		'description'				=>__('This is for Our services','astrum'),
		'base'						=>'our_services',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('astrum','astrum'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Our service Heading", "astrum" ),
					  "param_name" => "our_service_head"
					),
					array(
					  'type' => "iconpicker",
					  "admin_label" => true,
					  "heading" => __( "Icon Service", "astrum" ),
					  "param_name" => "service_icon"
					),
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Post per slider", "astrum" ),
					  "param_name" => "service_per"
					),
		),
	));
	*/

?>