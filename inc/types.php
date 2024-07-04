<?php

// CPT para imoveis
function cpthty_my_cpts() {
   
    $labels = [
        "name" => __( "Imoveis", "wtp" ),
        "singular_name" => __( "Imoveis", "wtp" ),
    ];
    
    $args = [
        "label" => __( "Imoveis", "wtp" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => false,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "imoveis", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail","revisions"],
    ];
    
    register_post_type( "imoveis", $args );
}
add_action( 'init', 'cpthty_my_cpts' );



add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
 
function create_subjects_hierarchical_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Tipologias', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipologia', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Tipologia' ),
    'all_items' => __( 'Todas' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Nova' ),
    'new_item_name' => __( 'Nova' ),
    'menu_name' => __( 'Tipologia' ),
  );    
  register_taxonomy('typology',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => true,
    'rewrite' => array( 'slug' => 'typology'),
  ));

  $labels = array(
    'name' => _x( 'Localização', 'taxonomy general name' ),
    'singular_name' => _x( 'Localização', 'taxonomy singular name' ),
    'search_items' =>  __( 'Localização Tipologia' ),
    'all_items' => __( 'Todas' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Nova' ),
    'new_item_name' => __( 'Nova' ),
    'menu_name' => __( 'Localização' ),
  );    
  register_taxonomy('city',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'city' ),
  ));

  $labels = array(
    'name' => _x( 'Tipo de imovel', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo de imovel', 'taxonomy singular name' ),
    'search_items' =>  __( 'Tipos de imoveis Tipologia' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Tipos de Imo.' ),
  );    
  register_taxonomy('typeofreal',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'typeofreal' ),
  ));
  $labels = array(
    'name' => _x( 'Certificado Energetico', 'taxonomy general name' ),
    'singular_name' => _x( 'Certificado Energetico', 'taxonomy singular name' ),
    'search_items' =>  __( 'Certificado Energetico' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'C. Energetico' ),
  );    
  register_taxonomy('energy',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'energy' ),
  ));
  $labels = array(
    'name' => _x( 'Estado', 'taxonomy general name' ),
    'singular_name' => _x( 'Estado', 'taxonomy singular name' ),
    'search_items' =>  __( 'Estado' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Estado' ),
  );    
  register_taxonomy('state',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'state' ),
  ));
  $labels = array(
    'name' => _x( 'Quartos', 'taxonomy general name' ),
    'singular_name' => _x( 'Quartos', 'taxonomy singular name' ),
    'search_items' =>  __( 'Quartos' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Quartos' ),
  );    
  register_taxonomy('beds',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'beds' ),
  ));
  $labels = array(
    'name' => _x( 'Banhos', 'taxonomy general name' ),
    'singular_name' => _x( 'Banhos', 'taxonomy singular name' ),
    'search_items' =>  __( 'Banhos' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Banhos' ),
  );    
  register_taxonomy('wc',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'wc' ),
  ));
  $labels = array(
    'name' => _x( 'Area', 'taxonomy general name' ),
    'singular_name' => _x( 'Area', 'taxonomy singular name' ),
    'search_items' =>  __( 'Area' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Area' ),
  );    
  register_taxonomy('area',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'area' ),
  ));
  $labels = array(
    'name' => _x( 'Preco', 'taxonomy general name' ),
    'singular_name' => _x( 'Preco', 'taxonomy singular name' ),
    'search_items' =>  __( 'Preco' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Preco' ),
  );    
  register_taxonomy('price',array('imoveis'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'price' ),
  ));
}



// CPT para empreendimentos

function cpthty_my_cpts2() {
   
  $labels = [
      "name" => __( "empreendimentos", "wtp" ),
      "singular_name" => __( "empreendimentos", "wtp" ),
  ];
  
  $args = [
      "label" => __( "empreendimentos", "wtp" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "has_archive" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => false,
      "delete_with_user" => false,
      "exclude_from_search" => true,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "rewrite" => [ "slug" => "empreendimentos", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail","revisions"],
  ];
  
  register_post_type( "empreendimentos", $args );
}
add_action( 'init', 'cpthty_my_cpts2' );


add_action( 'init', 'create_subjects_hierarchical_taxonomy2', 0 );
 
function create_subjects_hierarchical_taxonomy2() {
 
  $labels = array(
    'name' => _x( 'Fracao', 'taxonomy general name' ),
    'singular_name' => _x( 'Fracao', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Fracao' ),
    'all_items' => __( 'Todas' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Nova' ),
    'new_item_name' => __( 'Nova' ),
    'menu_name' => __( 'Fracao' ),
  );    
  register_taxonomy('Fracao',array('empreendimentos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => true,
    'rewrite' => array( 'slug' => 'Fracao'),
  ));

  $labels = array(
    'name' => _x( 'Localização', 'taxonomy general name' ),
    'singular_name' => _x( 'Localização', 'taxonomy singular name' ),
    'search_items' =>  __( 'Localização Tipologia' ),
    'all_items' => __( 'Todas' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Nova' ),
    'new_item_name' => __( 'Nova' ),
    'menu_name' => __( 'Localização' ),
  );    
  register_taxonomy('local',array('empreendimentos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'local' ),
  ));

  $labels = array(
    'name' => _x( 'Tipo de empreendimento', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo de empreendimento', 'taxonomy singular name' ),
    'search_items' =>  __( 'Tipos de empreendimentos' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Tipos de Emp.' ),
  );    
  register_taxonomy('typeofemp',array('empreendimentos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'typeofemp' ),
  ));
 
  $labels = array(
    'name' => _x( 'Estado', 'taxonomy general name' ),
    'singular_name' => _x( 'Estado', 'taxonomy singular name' ),
    'search_items' =>  __( 'Estado' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Estado' ),
  );    
  register_taxonomy('estado',array('empreendimentos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'estado' ),
  ));
  $labels = array(
    'name' => _x( 'Preco', 'taxonomy general name' ),
    'singular_name' => _x( 'Preco', 'taxonomy singular name' ),
    'search_items' =>  __( 'Preco' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Preco' ),
  );    
  register_taxonomy('priceemp',array('empreendimentos'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'priceemp' ),
  ));
}


// CPT para Corporate

function cpthty_my_cpts3() {
   
  $labels = [
      "name" => __( "corporate", "wtp" ),
      "singular_name" => __( "corporate", "wtp" ),
  ];
  
  $args = [
      "label" => __( "corporate", "wtp" ),
      "labels" => $labels,
      "description" => "",
      "public" => true,
      "publicly_queryable" => true,
      "show_ui" => true,
      "show_in_rest" => true,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "has_archive" => true,
      "show_in_menu" => true,
      "show_in_nav_menus" => false,
      "delete_with_user" => false,
      "exclude_from_search" => true,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "rewrite" => [ "slug" => "corporate", "with_front" => true ],
      "query_var" => true,
      "supports" => [ "title", "editor", "thumbnail","revisions"],
  ];
  
  register_post_type( "corporate", $args );
}
add_action( 'init', 'cpthty_my_cpts3' );


add_action( 'init', 'create_subjects_hierarchical_taxonomy3', 0 );
 
function create_subjects_hierarchical_taxonomy3() {
 
  $labels = array(
    'name' => _x( 'area', 'taxonomy general name' ),
    'singular_name' => _x( 'area', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar area' ),
    'all_items' => __( 'Todas' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Nova' ),
    'new_item_name' => __( 'Nova' ),
    'menu_name' => __( 'area' ),
  );    
  register_taxonomy('areacorp',array('corporate'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => true,
    'rewrite' => array( 'slug' => 'areacorp'),
  ));

  $labels = array(
    'name' => _x( 'Localização', 'taxonomy general name' ),
    'singular_name' => _x( 'Localização', 'taxonomy singular name' ),
    'search_items' =>  __( 'Localização Tipologia' ),
    'all_items' => __( 'Todas' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Nova' ),
    'new_item_name' => __( 'Nova' ),
    'menu_name' => __( 'Localização' ),
  );    
  register_taxonomy('local',array('corporate'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'local' ),
  ));

  $labels = array(
    'name' => _x( 'Tipo de corporate', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo de corporate', 'taxonomy singular name' ),
    'search_items' =>  __( 'Tipos de corporate' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Tipos de corp.' ),
  );    
  register_taxonomy('typeofcorp',array('corporate'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'typeofcorp' ),
  ));
 
  $labels = array(
    'name' => _x( 'Estado', 'taxonomy general name' ),
    'singular_name' => _x( 'Estado', 'taxonomy singular name' ),
    'search_items' =>  __( 'Estado' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Estado' ),
  );    
  register_taxonomy('estadocorp',array('corporate'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'estadocorp' ),
  ));
  $labels = array(
    'name' => _x( 'Preco', 'taxonomy general name' ),
    'singular_name' => _x( 'Preco', 'taxonomy singular name' ),
    'search_items' =>  __( 'Preco' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Preco' ),
  );    
  register_taxonomy('pricecorp',array('corporate'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'pricecorp' ),
  ));
  $labels = array(
    'name' => _x( 'Tipo', 'taxonomy general name' ),
    'singular_name' => _x( 'Tipo', 'taxonomy singular name' ),
    'search_items' =>  __( 'Tipo' ),
    'all_items' => __( 'Todos' ),
    'edit_item' => __( 'Editar' ), 
    'update_item' => __( 'Actualizar' ),
    'add_new_item' => __( 'Novo' ),
    'new_item_name' => __( 'Novo' ),
    'menu_name' => __( 'Tipo' ),
  );    
  register_taxonomy('tipocorp',array('corporate'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tipocorp' ),
  ));
}



// CPT para depoimentos

$labels = [
  "name" => __( "Depoimentos", "mxu" ),
  "singular_name" => __( "Depoimento", "mxu" ),
];

$args = [
  "label" => __( "Depoimentos", "mxu" ),
  "labels" => $labels,
  "description" => "",
  "public" => true,
  "publicly_queryable" => true,
  "show_ui" => true,
  "show_in_rest" => true,
  "rest_base" => "",
  "rest_controller_class" => "WP_REST_Posts_Controller",
  "has_archive" => false,
  "show_in_menu" => true,
  "show_in_nav_menus" => true,
  "delete_with_user" => false,
  "exclude_from_search" => false,
  "capability_type" => "post",
  "map_meta_cap" => true,
  "hierarchical" => false,
  "rewrite" => [ "slug" => "depoimento", "with_front" => true ],
  "query_var" => true,
  "supports" => [ "title", "editor" ],
  "show_in_graphql" => false,
];

register_post_type( "depoimento", $args );


// Consultores - quem somos

$labels = [
  "name" => __( "Consultores", "mxu" ),
  "singular_name" => __( "Consultor", "mxu" ),
];

$args = [
  "label" => __( "Consultores", "mxu" ),
  "labels" => $labels,
  "description" => "",
  "public" => true,
  "publicly_queryable" => true,
  "show_ui" => true,
  "show_in_rest" => true,
  "rest_base" => "",
  "rest_controller_class" => "WP_REST_Posts_Controller",
  "has_archive" => false,
  "show_in_menu" => true,
  "show_in_nav_menus" => true,
  "delete_with_user" => false,
  "exclude_from_search" => false,
  "capability_type" => "post",
  "map_meta_cap" => true,
  "hierarchical" => false,
  "rewrite" => [ "slug" => "consultores", "with_front" => true ],
  "query_var" => true,
  "supports" => [ "title", "editor" ],
  "show_in_graphql" => false,
];

register_post_type( "consultores", $args );


// Parceiros - quem somos

$labels = [
  "name" => __( "Parceiros", "mxu" ),
  "singular_name" => __( "Parceiro", "mxu" ),
];

$args = [
  "label" => __( "Parceiros", "mxu" ),
  "labels" => $labels,
  "description" => "",
  "public" => true,
  "publicly_queryable" => true,
  "show_ui" => true,
  "show_in_rest" => true,
  "rest_base" => "",
  "rest_controller_class" => "WP_REST_Posts_Controller",
  "has_archive" => false,
  "show_in_menu" => true,
  "show_in_nav_menus" => true,
  "delete_with_user" => false,
  "exclude_from_search" => false,
  "capability_type" => "post",
  "map_meta_cap" => true,
  "hierarchical" => false,
  "rewrite" => [ "slug" => "parceiros", "with_front" => true ],
  "query_var" => true,
  "supports" => [ "title", "editor" ],
  "show_in_graphql" => false,
];

register_post_type( "parceiros", $args );