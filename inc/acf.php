<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'HTM Home',
		'menu_title'	=> 'Setup',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Gerais',
		'menu_title'	=> 'Blocos-site',
		'parent_slug'	=> 'theme-general-settings',
    ));	
	/*acf_add_options_sub_page(array(
		'page_title' 	=> 'Imoveis Configurações',
		'menu_title'	=> 'Imoveis',
		'parent_slug'	=> 'theme-general-settings',
    ));	*/
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer styles',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
    ));	
}