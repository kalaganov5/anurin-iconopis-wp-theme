<?php
function anurin_iconopos_portfolio(){
	register_post_type('portfolio', array(
		'labels'             => array(
			'name'               => 'Портфолио', // Основное название типа записи
			'singular_name'      => 'Портфолио', // отдельное название записи типа Book
			'add_new'            => 'Добавить работ',
			'add_new_item'       => 'Добавить работу',
			'edit_item'          => 'Редактировать работу',
			'new_item'           => 'Новая работа',
			'view_item'          => 'Посмотреть эту работу',
			'search_items'       => 'Найти в портфолио',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'В корзине работа не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Портфолио'

		  ),
		'public'             => true,
		'show_in_rest'       => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor', 'thumbnail'),
		'taxonomies'         => array( 'category' ),
		'menu_icon' => 'dashicons-portfolio',
	) );
}