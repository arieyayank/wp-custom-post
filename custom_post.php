<?php
/**
 * Custom functions
 */
function product_create_post_type() {
		$labels = array(
			'name' => __( 'Product' ),
			'singular_name' => __( 'Product' ),
			'add_new' => __( 'Add Product' ),
			'all_items' => __( 'List Products' ),
			'add_new_item' => __( 'Add Product' ),
			'edit_item' => __( 'Edit Product' ),
			'new_item' => __( 'New Product' ),
			'view_item' => __( 'View Product' ),
			'search_items' => __( 'Search Product' ),
			'not_found' => __( 'Tidak Ada Product Disini' ),
			'not_found_in_trash' => __( 'Tidak Ada  Products DI Trass' ),
			'parent_item_colon' => __( 'Parent Product' )
			//'menu_name' => default to 'name'
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				//'author',
				//'trackbacks',
				//'custom-fields',
				//'comments',
				'revisions',
				//'page-attributes', // (menu order, hierarchical must be true to show Parent option)
				//'post-formats',
			),
			'taxonomies' => array( 'category', 'post_tag' ), // add default post categories and tags
			'menu_position' => 5
		);
		register_post_type( 'product', $args );
		//flush_rewrite_rules();
 
		register_taxonomy( 'product_category', // register custom taxonomy - product category
			'product',
			array( 'hierarchical' => true,
				'label' => __( 'product categories' )
			)
		);
		register_taxonomy( 'product_tag', // register custom taxonomy - product tag
			'product',
			array( 'hierarchical' => false,
				'label' => __( 'product tags' )
			)
		);
	}
	add_action( 'init', 'product_create_post_type' );
	
	
	
	
 
