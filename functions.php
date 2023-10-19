<?php

/**
 * aab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aab
 */


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aab_setup()
{
	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(array(
		'primary' => esc_html__('Primary', 'aab'),
		'products' => esc_html__('Products', 'aab'),
		'quick-links' => esc_html__('Quick Links', 'aab'),
		'legal' => esc_html__('Legal', 'aab'),
		'social' => esc_html__('Social', 'aab'),
	));

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	));

	// add_theme_support('wp-block-styles');
	add_theme_support('align-wide');
	add_theme_support('responsive-embeds');


}
add_action('after_setup_theme', 'aab_setup');


function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/**
 * Enqueue scripts and styles.
 */
function aab_scripts(){
	wp_enqueue_style('aab-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
	wp_enqueue_script( 'aab-jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js', array(), wp_get_theme()->get('Version'), true );
	wp_enqueue_script( 'aab-mainjs', get_template_directory_uri() . '/scripts/main.js', array(), wp_get_theme()->get('Version'), true );
	if (is_front_page()) {
		wp_enqueue_script( 'aab-bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), wp_get_theme()->get('Version'), true );
        wp_enqueue_script( 'aab-slider', get_template_directory_uri() . '/scripts/slider.js', array('jquery'), wp_get_theme()->get('Version'), true);
	}

}
add_action('wp_enqueue_scripts', 'aab_scripts');

/**
 *  Parse the  contact form shortcode in the frontend
 */
function wpcf7_current_url_form_tag_handler($tag){
	global $wp;
	$url = home_url($wp->request);
	return '<input type="hidden" name="' . $tag['name'] . '" value="' . $url . '" />';
}

function wpcf7_add_form_tag_current_url(){
	// Add shortcode for the form [current_url]
	wpcf7_add_form_tag(
		'current_url',
		'wpcf7_current_url_form_tag_handler',
		array(
			'name-attr' => true
		)
	);
}
add_action('wpcf7_init', 'wpcf7_add_form_tag_current_url');
 
 // Register Custom Post Type
function aab_properties() {

	$labels = array(
		'name'                  => _x( 'Properties', 'Post Type General Name', 'aab' ),
		'singular_name'         => _x( 'Propertie', 'Post Type Singular Name', 'aab' ),
		'menu_name'             => __( 'Address', 'aab' ),
		'name_admin_bar'        => __( 'Address', 'aab' ),
		'archives'              => __( 'Address Archives', 'aab' ),
		'attributes'            => __( 'Address Attributes', 'aab' ),
		'parent_item_colon'     => __( 'Parent Address:', 'aab' ),
		'all_items'             => __( 'All Address', 'aab' ),
		'add_new_item'          => __( 'Add New Address', 'aab' ),
		'add_new'               => __( 'Add Address', 'aab' ),
		'new_item'              => __( 'New Address', 'aab' ),
		'edit_item'             => __( 'Edit Address', 'aab' ),
		'update_item'           => __( 'Update Address', 'aab' ),
		'view_item'             => __( 'View Address', 'aab' ),
		'view_items'            => __( 'View Address', 'aab' ),
		'search_items'          => __( 'Search Address', 'aab' ),
		'not_found'             => __( 'Not found', 'aab' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'aab' ),
		'featured_image'        => __( 'Featured Image', 'aab' ),
		'set_featured_image'    => __( 'Set featured image', 'aab' ),
		'remove_featured_image' => __( 'Remove featured image', 'aab' ),
		'use_featured_image'    => __( 'Use as featured image', 'aab' ),
		'insert_into_item'      => __( 'Insert into Address', 'aab' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'aab' ),
		'items_list'            => __( 'Address list', 'aab' ),
		'items_list_navigation' => __( 'Address list navigation', 'aab' ),
		'filter_items_list'     => __( 'Filter address list', 'aab' ),
	);
	$args = array(
		'label'                 => __( 'Properties', 'aab' ),
		'description'           => __( 'Post Type Description', 'aab' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'query_var'             => 'shop_address',
		'rewrite'               => false,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'aab_properties', $args );

}
add_action( 'init', 'aab_properties', 0 );
// Add Meta Boxes for Custom Fields
function add_custom_meta_boxes() {
    add_meta_box(
        'property_coordinates',
        'Property Coordinates',
        'property_coordinates_callback',
        'aab_properties', // Custom Post Type Name
        'normal',
        'default'
    );

    add_meta_box(
        'property_urls',
        'Property URLs',
        'property_urls_callback',
        'aab_properties', // Custom Post Type Name
        'normal',
        'default'
    );
}

add_action('add_meta_boxes', 'add_custom_meta_boxes');

// Callback function for Property Coordinates Meta Box
function property_coordinates_callback($post) {
    // Retrieve existing values if they exist
    $latitude = get_post_meta($post->ID, '_property_latitude', true);
    $longitude = get_post_meta($post->ID, '_property_longitude', true);
    ?>
    <label for="property_latitude">Latitude:</label>
    <input type="text" id="property_latitude" name="property_latitude" value="<?php echo esc_attr($latitude); ?>" style="width: 100%" /><br><br>

    <label for="property_longitude">Longitude:</label>
    <input type="text" id="property_longitude" name="property_longitude" value="<?php echo esc_attr($longitude); ?>" style="width: 100%" /><br>
    <?php
}

// Callback function for Property URLs Meta Box
function property_urls_callback($post) {
    // Retrieve existing values if they exist
    $google_map_url = get_post_meta($post->ID, '_property_google_map_url', true);
    $matterport_url = get_post_meta($post->ID, '_property_matterport_url', true);
    ?>
    <label for="property_google_map_url">Google 360 Map URL:</label>
    <input type="text" id="property_google_map_url" name="property_google_map_url" value="<?php echo esc_url($google_map_url); ?>" style="width: 100%" /><br><br>

    <label for="property_matterport_url">Matterport URL:</label>
    <input type="text" id="property_matterport_url" name="property_matterport_url" value="<?php echo esc_url($matterport_url); ?>" style="width: 100%" /><br>
    <?php
}

// Save custom field values when the post is saved
function save_custom_meta_fields($post_id) {
    // Save Latitude
    if (isset($_POST['property_latitude'])) {
        update_post_meta($post_id, '_property_latitude', sanitize_text_field($_POST['property_latitude']));
    }

    // Save Longitude
    if (isset($_POST['property_longitude'])) {
        update_post_meta($post_id, '_property_longitude', sanitize_text_field($_POST['property_longitude']));
    }

    // Save Google 360 Map URL
    if (isset($_POST['property_google_map_url'])) {
        update_post_meta($post_id, '_property_google_map_url', esc_url($_POST['property_google_map_url']));
    }

    // Save Matterport URL
    if (isset($_POST['property_matterport_url'])) {
        update_post_meta($post_id, '_property_matterport_url', esc_url($_POST['property_matterport_url']));
    }
}

add_action('save_post_aab_properties', 'save_custom_meta_fields');
// Register Custom Taxonomy for 'aab_properties' Custom Post Type
function register_property_taxonomy() {
    $labels = array(
        'name'              => _x('Property Categories', 'taxonomy general name', 'aab'),
        'singular_name'     => _x('Property Category', 'taxonomy singular name', 'aab'),
        'search_items'      => __('Search Property Categories', 'aab'),
        'all_items'         => __('All Property Categories', 'aab'),
        'parent_item'       => __('Parent Property Category', 'aab'),
        'parent_item_colon' => __('Parent Property Category:', 'aab'),
        'edit_item'         => __('Edit Property Category', 'aab'),
        'update_item'       => __('Update Property Category', 'aab'),
        'add_new_item'      => __('Add New Property Category', 'aab'),
        'new_item_name'     => __('New Property Category Name', 'aab'),
        'menu_name'         => __('Property Categories', 'aab'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'property-category'), // Change the slug as needed
    );

    register_taxonomy('property_category', 'aab_properties', $args);
}

add_action('init', 'register_property_taxonomy', 0);


// Register Custom Post Type
function custom_job_opening() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'aab' ),
		'singular_name'         => _x( 'Post Type', 'Post Type Singular Name', 'aab' ),
		'menu_name'             => __( 'Post Types', 'aab' ),
		'name_admin_bar'        => __( 'Post Type', 'aab' ),
		'archives'              => __( 'Item Archives', 'aab' ),
		'attributes'            => __( 'Item Attributes', 'aab' ),
		'parent_item_colon'     => __( 'Parent Item:', 'aab' ),
		'all_items'             => __( 'All Items', 'aab' ),
		'add_new_item'          => __( 'Add New Item', 'aab' ),
		'add_new'               => __( 'Add New', 'aab' ),
		'new_item'              => __( 'New Item', 'aab' ),
		'edit_item'             => __( 'Edit Item', 'aab' ),
		'update_item'           => __( 'Update Item', 'aab' ),
		'view_item'             => __( 'View Item', 'aab' ),
		'view_items'            => __( 'View Items', 'aab' ),
		'search_items'          => __( 'Search Item', 'aab' ),
		'not_found'             => __( 'Not found', 'aab' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'aab' ),
		'featured_image'        => __( 'Featured Image', 'aab' ),
		'set_featured_image'    => __( 'Set featured image', 'aab' ),
		'remove_featured_image' => __( 'Remove featured image', 'aab' ),
		'use_featured_image'    => __( 'Use as featured image', 'aab' ),
		'insert_into_item'      => __( 'Insert into item', 'aab' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'aab' ),
		'items_list'            => __( 'Items list', 'aab' ),
		'items_list_navigation' => __( 'Items list navigation', 'aab' ),
		'filter_items_list'     => __( 'Filter items list', 'aab' ),
	);
	$args = array(
		'label'                 => __( 'Post Type', 'aab' ),
		'description'           => __( 'Post Type Description', 'aab' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-feedback',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => false,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'job_opening', $args );

}
add_action( 'init', 'custom_job_opening', 0 );
// Add Meta Box for Custom Field (Location URL)
function add_location_url_meta_box() {
    add_meta_box(
        'job_opening_location_url',
        'Location URL',
        'job_opening_location_url_callback',
        'job_opening', // Custom Post Type Name
        'normal',
        'default'
    );
}

add_action('add_meta_boxes', 'add_location_url_meta_box');

// Callback function for Location URL Meta Box
function job_opening_location_url_callback($post) {
    // Retrieve existing value if it exists
    $location_url = get_post_meta($post->ID, '_job_opening_location_url', true);
    ?>
    <label for="job_opening_location_url">Location:</label>
    <input type="text" id="job_opening_location_url" name="job_opening_location_url" value="<?php echo esc_url($location_url); ?>" size="50" /><br>
    <?php
}

// Save custom field value when the post is saved
function save_location_url_meta_field($post_id) {
    if (isset($_POST['job_opening_location_url'])) {
        update_post_meta($post_id, '_job_opening_location_url', esc_url($_POST['job_opening_location_url']));
    }
}

add_action('save_post_job_opening', 'save_location_url_meta_field');


// setting
// // //

add_action('admin_menu', 'custom_settings_page_setup');
add_action('admin_init', 'custom_settings_init');


function custom_settings_page_setup() {
    // Main menu item "AAB Settings"
    add_menu_page(
        'AAB Settings', // Page title
        'AAB Settings', // Menu title
        'manage_options',  // Capability
        'aab-settings', // Menu slug
        'overview_page_content', // Callback function for the main menu
        'dashicons-admin-generic', // Icon URL
        99 // Position
    );

    // "Overview" submenu under "AAB Settings"
    add_submenu_page(
        'aab-settings', // Parent slug
        'Overview', // Page title
        'Overview', // Menu title
        'manage_options', // Capability
        'aab-settings',  // Menu slug (same as parent to avoid duplication)
        'overview_page_content' // Callback function
    );

    // "Footer" submenu under "AAB Settings"
    add_submenu_page(
        'aab-settings', // Parent slug
        'Footer Settings', // Page title
        'Footer', // Menu title
        'manage_options', // Capability
        'aab-footer', // Menu slug
        'footer_settings_page_content' // Callback function
    );

    // "Header" submenu under "AAB Settings"
    add_submenu_page(
        'aab-settings', // Parent slug
        'Header Settings', // Page title
        'Header', // Menu title
        'manage_options', // Capability
        'aab-header', // Menu slug
        'header_settings_page_content' // Callback function
    );

    // "Contact Us" submenu under "AAB Settings"
    add_submenu_page(
        'aab-settings', // Parent slug
        'Contact Us Settings', // Page title
        'Contact Us', // Menu title
        'manage_options', // Capability
        'aab-contact-us', // Menu slug
        'contact_us_settings_page_content' // Callback function
    );

    // Add this inside your custom_settings_page_setup function
    add_submenu_page(
        'aab-settings',
        'Export Settings',
        'Export Settings',
        'manage_options',
        'aab-export',
        'export_settings_page_content'
    );

}


function footer_settings_page_content() {
    ?>
    <div class="wrap">
        <h1>Custom Settings</h1>
        <form method="post" action="options.php">
            <?php settings_fields('custom_settings_group'); ?>
            <div class="settings-columns">
                <div class="settings-column">
                    <?php do_settings_sections('custom-settings-left'); ?>
                </div>
                <div class="settings-column">
                    <?php do_settings_sections('custom-settings-right'); ?>
                </div>
            </div>
            <?php submit_button(); ?>
        </form>
    </div>
    <style>
        .settings-columns {
            display: flex;
            justify-content: space-between;
        }
        .settings-column {
            width: 48%;
            box-sizing: border-box;
        }
    </style>
    <?php
}

function header_settings_page_content() {
    ?>
    <div class="wrap">
        <h1>Header Settings</h1>
        <!-- Placeholder for header settings content -->
    </div>
    <?php
}

function contact_us_settings_page_content() {
    ?>
    <div class="wrap">
        <h1>Contact Us Settings</h1>
        <!-- Placeholder for contact us settings content -->
    </div>
    <?php
}

function overview_page_content() {
    // Get counts
    $page_count = wp_count_posts('page')->publish;
    $post_count = wp_count_posts('post')->publish;
    $address_count = wp_count_posts('aab_properties')->publish; // Assuming 'address' is a custom post type
    $job_opening_count = wp_count_posts('job_opening')->publish; // Assuming 'job_opening' is a custom post type
    ?>
    <div class="wrap">
        <h1>Overview Summary</h1>
        <table class="widefat fixed" cellspacing="0">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Count</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pages</td>
                    <td><?php echo $page_count; ?></td>
                </tr>
                <tr>
                    <td>Posts</td>
                    <td><?php echo $post_count; ?></td>
                </tr>
                <tr>
                    <td>Addresses</td>
                    <td><?php echo $address_count; ?></td>
                </tr>
                <tr>
                    <td>Job Openings</td>
                    <td><?php echo $job_opening_count; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}

// Add this to your functions.php or plugin file
add_action('admin_init', 'handle_export_action');

function handle_export_action() {
    // Check if the export button was clicked and the user has the right capability
    if (isset($_POST['export_settings']) && current_user_can('manage_options')) {
        export_all_settings();
    }
}

function export_settings_page_content() {
    ?>
    <div class="wrap">
        <h1>Export Settings</h1>
        <form method="post">
            <p>Click the button below to export all settings.</p>
            <input type="submit" name="export_settings" value="Export" class="button button-primary">
        </form>
    </div>
    <?php

    // Check if the export button was clicked
    if (isset($_POST['export_settings'])) {
        export_all_settings();
    }
}

// Function to export all settings to a JSON file
function export_all_settings() {
    // Fetch all options from the database
    $all_options = wp_load_alloptions();

    // Filter out options that are not related to your settings (optional)
    // $filtered_options = array_filter($all_options, function($key) {
    //     return strpos($key, 'your_option_prefix_') === 0;
    // }, ARRAY_FILTER_USE_KEY);

    // For simplicity, we'll export all options. Replace $all_options with $filtered_options if you want to filter.
    $json_data = json_encode($all_options, JSON_PRETTY_PRINT);

    // Set headers to force download
    header('Content-Type: application/json');
    header('Content-Disposition: attachment; filename="settings-export.json"');
    header('Pragma: no-cache');

    // Output the JSON data
    echo $json_data;
    exit;
}


function custom_settings_init() {
    register_setting('custom_settings_group', 'custom_settings');

    // Left column
    add_settings_section(
        'social_media_section_left',
        'Social Media Settings (Left Column)',
        null,
        'custom-settings-left'
    );

    // Right column
    add_settings_section(
        'social_media_section_right',
        'Social Media Settings (Right Column)',
        null,
        'custom-settings-right'
    );

    // Fields for the left column
    $fields_left = [
        'Products' => 'menu_choice_1',
        'Quick Links' => 'menu_choice_2',
        'Legal' => 'menu_choice_3',
        'Facebook' => 'facebook',
        'Twitter' => 'twitter',
        'Instagram' => 'instagram',
        'YouTube' => 'youtube',
        'LinkedIn' => 'linkedin',
        'Pinterest' => 'pinterest',
        'Payment Methods' => 'payment_methods'
    ];

    // Fields for the right column
    $fields_right = [
        'Newsletter' => 'newsletter',
        'Address' => 'address',
        'Email ID' => 'email',
        'Phone Number 1' => 'phone1',
        'Phone Number 2' => 'phone2',
        'Opening Time' => 'opening_time',
        'Closing Time' => 'closing_time',
        'Opening Date' => 'opening_date',
        'Closing Date' => 'closing_date',
        'Copyright' => 'copyright'
    ];

    foreach ($fields_left as $label => $id) {
        add_settings_field(
            $id,
            $label,
            'custom_settings_field_callback',
            'custom-settings-left',
            'social_media_section_left',
            ['id' => $id]
        );
    }

    foreach ($fields_right as $label => $id) {
        add_settings_field(
            $id,
            $label,
            'custom_settings_field_callback',
            'custom-settings-right',
            'social_media_section_right',
            ['id' => $id]
        );
    }
}

function custom_settings_field_callback($args) {
    $options = get_option('custom_settings');
    if (in_array($args['id'], ['menu_choice_1', 'menu_choice_2', 'menu_choice_3'])) {
        $menus = get_terms('nav_menu', ['hide_empty' => false]);
        echo "<select name='custom_settings[{$args['id']}]'>";
        echo "<option value=''>Select a menu</option>";
        foreach ($menus as $menu) {
            $selected = isset($options[$args['id']]) && $options[$args['id']] == $menu->term_id ? 'selected' : '';
            echo "<option value='{$menu->term_id}' $selected>{$menu->name}</option>";
        }
        echo "</select>";
    } elseif ($args['id'] === 'address') {
        // Render a textarea for the address
        ?>
        <textarea name="custom_settings[<?php echo $args['id']; ?>]" rows="5" cols="50"><?php echo isset($options[$args['id']]) ? esc_textarea($options[$args['id']]) : ''; ?></textarea>
        <?php
    } elseif ($args['id'] === 'opening_time' || $args['id'] === 'closing_time') {
        // Render a time input for opening and closing times
        ?>
        <input type="time" name="custom_settings[<?php echo $args['id']; ?>]" value="<?php echo isset($options[$args['id']]) ? esc_attr($options[$args['id']]) : ''; ?>">
        <?php
    } elseif ($args['id'] === 'opening_date' || $args['id'] === 'closing_date') {
        // Render a date input for opening and closing dates
        ?>
        <input type="date" name="custom_settings[<?php echo $args['id']; ?>]" value="<?php echo isset($options[$args['id']]) ? esc_attr($options[$args['id']]) : ''; ?>">
        <?php
    } elseif ($args['id'] === 'newsletter') {
        // Render a text input for the newsletter shortcode
        ?>
        <input type="text" name="custom_settings[<?php echo $args['id']; ?>]" value="<?php echo isset($options[$args['id']]) ? esc_attr($options[$args['id']]) : ''; ?>" placeholder="[your-shortcode]">
        <?php
    }    elseif ($args['id'] === 'payment_methods') {
        $payment_methods = ['Visa', 'Master Card', 'Rupay', 'UPI', 'Maestro', 'Amex', 'Discover'];
        foreach ($payment_methods as $method) {
            $checked = isset($options['payment_methods'][$method]) && $options['payment_methods'][$method] == '1' ? 'checked' : '';
            echo "<label><input type='checkbox' name='custom_settings[payment_methods][$method]' value='1' $checked> $method</label><br>";
        }
    } else {
        // Render a text input for other fields
        ?>
        <input type="text" name="custom_settings[<?php echo $args['id']; ?>]" value="<?php echo isset($options[$args['id']]) ? esc_attr($options[$args['id']]) : ''; ?>">
        <?php
    }
}
