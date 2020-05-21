<?php
function surfing_scripts() {
	wp_enqueue_style( 'surfing-style', get_stylesheet_uri() );

	
	}

add_action( 'wp_enqueue_scripts', 'surfing_scripts' );

add_action('init', 'my_custom_init');
function my_custom_init(){
	
    
    $outherPar = array (
		'labels'             => array(
			'name'               => 'Працівники', // Основное название типа записи
			'singular_name'      => 'Працівник', // отдельное название записи типа Book
			'add_new'            => 'Добавить нового',
			'add_new_item'       => 'Добавить нового Працівника',
			'edit_item'          => 'Редактировать нового Працівника',
			'new_item'           => 'Новий працівник',
			'view_item'          => 'Посмотреть працівника',
			'search_items'       => 'Найти працівника',
			'not_found'          =>  'працівника не найдено',
			'not_found_in_trash' => 'В корзине працівника не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Працівники'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	);
    register_post_type('worker', $outherPar); 
}

add_theme_support('post-thumbnails');
if ( function_exists('add_image_size')){
    add_image_size('worker-list', 230, 230, true);
}