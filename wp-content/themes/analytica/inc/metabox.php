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


// // 1st meta box
// $meta_boxes[] = array(
// 	'title' => __( 'Advanced Fields', 'rwmb' ),

// 	'fields' => array(
// 		// HEADING
// 		array(
// 			'type' => 'heading',
// 			'name' => __( 'Heading', 'rwmb' ),
// 			'id'   => 'fake_id', // Not used but needed for plugin
// 		),
// 		array(
// 			// Field name - Will be used as label
// 			'name'  => __( 'Learn more', 'rwmb' ),
// 			// Field ID, i.e. the meta key
// 			'id'    => "{$prefix}learn",
// 			// Field description (optional)
// 			'desc'  => __( 'Text description', 'rwmb' ),
// 			'type'  => 'text',
// 			// Default value (optional)
// 			'std'   => __( 'Learn more', 'rwmb' ),
// 			// CLONES: Add to make the field cloneable (i.e. have multiple value)
// 			'clone' => false,
// 		),
		
		
// 		// IMAGE UPLOAD
// 		array(
// 			'name' => __( 'Icon Upload', 'rwmb' ),
// 			'id'   => "{$prefix}icon",
// 			'type' => 'image',
// 		),
// 		// IMAGE UPLOAD
// 		array(
// 			'name' => __( 'Round image', 'rwmb' ),
// 			'id'   => "{$prefix}Round_image",
// 			'type' => 'image',
// 		),
		
		

// 	)
// );

// Releases meta box
$meta_boxes[] = array(
	'title' => __( 'Advanced Fields for releases', 'rwmb' ),
	'pages' => array( 'analytica_releases' ),

	'fields' => array(
		
		array(
			// Field name - Will be used as label
			'name'  => __( 'Attachement 1', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}attachment1",
			// Field description (optional)
			'desc'  => __( 'Please write attachment name', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'Download', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		
			// URL
		array(
			'name'  => __( 'URL 1', 'rwmb' ),
			'id'    => "{$prefix}url1",
			'desc'  => __( 'Please insert the attachments url', 'rwmb' ),
			'type'  => 'url',
			'std'   => 'http://google.com',
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Attachement 2', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}attachment2",
			// Field description (optional)
			'desc'  => __( 'Please write attachment name', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( '', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		
			// URL
		array(
			'name'  => __( 'URL 2', 'rwmb' ),
			'id'    => "{$prefix}url2",
			'desc'  => __( 'Please insert the attachments url', 'rwmb' ),
			'type'  => 'url',
			'std'   => '',
		),
		

	)
);

// People meta box
$meta_boxes[] = array(
	'title' => __( 'Advanced Fields for people', 'rwmb' ),
	'pages' => array( 'analytica_people' ),

	'fields' => array(
		// HEADING
		array(
			'type' => 'Position',
			'id'   => 'people_id', // Not used but needed for plugin
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Position', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}position",
			// Field description (optional)
			'desc'  => __( 'Please enter the persons position', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'position', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		)
		
	)
);

// Business Cards meta box
$meta_boxes[] = array(
	'title' => __( 'Advanced Fields for business cards', 'rwmb' ),
	'pages' => array( 'analytica_buscards' ),

	'fields' => array(
		// HEADING
		array(
			'type' => 'heading',
			'name' => __( 'Personal Info', 'rwmb' ),
			'id'   => 'personal_info_id', // Not used but needed for plugin
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Position', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}position",
			// Field description (optional)
			'desc'  => __( 'Please enter the persons position', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'position', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Mobile Phone', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}telephone",
			// Field description (optional)
			'desc'  => __( 'Please enter the persons phone number', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'telephone number', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Email', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}email",
			// Field description (optional)
			'desc'  => __( 'Please enter the persons email address', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'email address', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Skype', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}skype",
			// Field description (optional)
			'desc'  => __( 'Please enter the persons skype', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'skype username', 'rwmb' ),
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'clone' => false,
		),
		array(
			'name'  => __( 'Linkedin URL', 'rwmb' ),
			'id'    => "{$prefix}linkedin",
			'desc'  => __( 'Please insert the linkedin url', 'rwmb' ),
			'type'  => 'url',
			'std'   => 'http://linkedin.com/abc',
		),
		array(
			'name'  => __( 'VCard URL', 'rwmb' ),
			'id'    => "{$prefix}vcard",
			'desc'  => __( 'Please insert the VCard url', 'rwmb' ),
			'type'  => 'url',
			'std'   => 'http://analyticamedical.com/abc',
		),
		// HEADING
		array(
			'type' => 'heading',
			'name' => __( 'Company Info', 'rwmb' ),
			'id'   => 'company_info_id', // Not used but needed for plugin
		),
		array(
			// Field name - Will be used as label
			'name'  => __( 'Company Name', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}company_name",
			// Field description (optional)
			'desc'  => __( 'Company Name', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'Analytica Ltd', 'rwmb' )
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
		),
		array(
			'name'  => __( 'Company URL', 'rwmb' ),
			'id'    => "{$prefix}company_url",
			'desc'  => __( 'Please insert the company website url', 'rwmb' ),
			'type'  => 'url',
			'std'   => 'http://analyticamedical.com/',
		),
		// TEXT
		array(
			// Field name - Will be used as label
			'name'  => __( 'Company Address', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}company_address",
			// Field description (optional)
			'desc'  => __( 'Company Address', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( '320 Adelaide St., Brisbane, Queensland 4000 AUSTRALIA', 'rwmb' )
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
		),
		// TEXT
		array(
			// Field name - Will be used as label
			'name'  => __( 'Mailing Address', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}mailing_address",
			// Field description (optional)
			'desc'  => __( 'Mailing Address', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( 'GPO Box 670, Brisbane, Queensland 4001 AUSTRALIA', 'rwmb' )
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
		),
		// TEXT
		array(
			// Field name - Will be used as label
			'name'  => __( 'Company Phone', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}company_phone",
			// Field description (optional)
			'desc'  => __( 'Company Phone', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( '+61-7-3278-1950', 'rwmb' )
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
		),
		array(
			'name'  => __( 'ASX Stock Ticker', 'rwmb' ),
			'id'    => "{$prefix}stock",
			'desc'  => __( 'Please insert company stock ticker url', 'rwmb' ),
			'type'  => 'url',
			'std'   => 'http://www.asx.com.au/asx/research/companyInfo.do?by=asxCode&asxCode=ALT',
		),
		// TEXT
		array(
			// Field name - Will be used as label
			'name'  => __( 'ABN', 'rwmb' ),
			// Field ID, i.e. the meta key
			'id'    => "{$prefix}abn",
			// Field description (optional)
			'desc'  => __( 'ABN No', 'rwmb' ),
			'type'  => 'text',
			// Default value (optional)
			'std'   => __( '12 006 464 866', 'rwmb' )
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
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
