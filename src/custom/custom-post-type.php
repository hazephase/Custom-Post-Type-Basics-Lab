<?php
/**
 * Custom Post Type functionality
 *
 * @package     KnowTheCode\TeamBios\Custom
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://knowthecode.io
 * @license     GNU General Public License 2.0+
 */
namespace KnowTheCode\TeamBios\Custom;

add_action( 'init', __NAMESPACE__ . '\register_custom_post_type' );
/**
 * Register the custom post type.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'properties', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'propertie', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'properties', 'text_domain' ),
		'name_admin_bar'        => __( 'properties', 'text_domain' ),
		'archives'              => __( 'properties Archives', 'text_domain' ),
		'attributes'            => __( 'properties Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent properties:', 'text_domain' ),
		'all_items'             => __( 'All properties', 'text_domain' ),
		'add_new_item'          => __( 'Add New properties', 'text_domain' ),
		'add_new'               => __( 'Add New properties', 'text_domain' ),
		'new_item'              => __( 'New properties', 'text_domain' ),
		'edit_item'             => __( 'Edit properties', 'text_domain' ),
		'update_item'           => __( 'Update properties', 'text_domain' ),
		'view_item'             => __( 'View properties', 'text_domain' ),
		'view_items'            => __( 'View properties', 'text_domain' ),
		'search_items'          => __( 'Search properties', 'text_domain' ),
		'not_found'             => __( 'Not found properties', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found properties in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image for properties', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image for properties', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image for properties', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image properties', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into properties', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this properties', 'text_domain' ),
		'items_list'            => __( 'properties list', 'text_domain' ),
		'items_list_navigation' => __( 'properties list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter properties list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'propertie', 'text_domain' ),
		'description'           => __( 'Properties that are for sale', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'type', 'amenity' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'properties', $args );
}


