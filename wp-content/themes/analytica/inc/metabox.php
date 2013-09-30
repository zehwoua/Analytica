<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'analytica_';

global $meta_boxes;

$meta_boxes = array();


// 1st meta box
$meta_boxes[] = array(
	'title' => __( 'Advanced Fields', 'rwmb' ),

	'fields' => array(
		// HEADING
		array(
			'type' => 'heading',
			'name' => __( 'Heading', 'rwmb' ),
			'id'   => 'fake_id', // Not used but needed for plugin
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Learn more', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}learn",
			// Field description (optional)
			'desc'  => __( 'Text description', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'Learn more', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		
		
		// IMAGE UPLOAD
		array(
			'name' => __( 'Icon Upload', 'rwmb' ),
			'id'   => "{$prefix}icon",
			'type' => 'image',
		),
		// IMAGE UPLOAD
		array(
			'name' => __( 'Round image', 'rwmb' ),
			'id'   => "{$prefix}Round_image",
			'type' => 'image',
		),
		
		

	)
);

// Testimonials meta box
$meta_boxes[] = array(
	'title' => __( 'Advanced Fields for Testimonials', 'rwmb' ),
	'pages' => array( 'release' ),

	'fields' => array(
		// HEADING
		array(
			'type' => 'Author',
			'name' => __( 'Heading', 'rwmb' ),
			'id'   => 'testimonials_id', // Not used but needed for plugin
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Author', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}author",
			// Field description (optional)
			'desc'  => __( 'Text description', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'anonymous', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		
			array(
			// Field name - Will be used as label
			'name'  => __( 'Author Address', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}Author_Address",
			// Field description (optional)
			'desc'  => __( 'Author Address', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'Author Address', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		

	)
);


// // Portal Tab 
// $meta_boxes[] = array(
// 	'title' => __( 'Advanced Fields for Portal Tab ', 'rwmb' ),
// 	'pages' => array( 'page' ),

// 	'fields' => array(
// 		// HEADING
// 		array(
// 			'type' => 'Heading',
// 			'name' => __( 'Heading', 'rwmb' ),
// 			'id'   => 'testimonials_id', // Not used but needed for plugin
// 		),
// 		array(
// 			// Field name - Will be used as label
// 			'name'  => __( 'Tab Title', 'rwmb' ),
// 			// Field ID, i.e. the meta key
// 			'id'    => "{$prefix}Tab_title",
// 			// Field description (optional)
// 			'type'  => 'text',
// 			// Default value (optional)
// 			'std'   => __( 'First Tab', 'rwmb' ),
// 			// CLONES: Add to make the field cloneable (i.e. have multiple value)
// 			'clone' => true,
// 		),
		
// 		// IMAGE UPLOAD
// 		array(
// 			'name' => __( 'Tab image', 'rwmb' ),
// 			'id'   => "{$prefix}Tab_image",
// 			'type' => 'image',
// 		),
// 			array(
// 			// Field name - Will be used as label
// 			'name'  => __( 'Tab Content', 'rwmb' ),
// 			// Field ID, i.e. the meta key
// 			'id'    => "{$prefix}Tab_content",
// 			// Field description (optional)
// 			'type'  => 'textarea',
// 			// Default value (optional)
// 			'std'   => __( 'description', 'rwmb' ),
// 			// CLONES: Add to make the field cloneable (i.e. have multiple value)
// 			'clone' => true,
// 		),
			
		

// 	)
// );


/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );
