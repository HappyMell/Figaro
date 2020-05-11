<?php 
function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'render_template'   => '/blocks/hero.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'hero', 'top' ),
    ));

    acf_register_block_type(array(
        'name'              => 'items',
        'title'             => __('Items'),
        'render_template'   => '/blocks/items.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'items', 'cream' ),
    ));

    acf_register_block_type(array(
        'name'              => 'about',
        'title'             => __('About'),
        'render_template'   => '/blocks/about.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'about', 'text' ),
    ));

    acf_register_block_type(array(
        'name'              => 'gallery',
        'title'             => __('Gallery'),
        'render_template'   => '/blocks/gallery.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'gallery', 'images' ),
    ));

    acf_register_block_type(array(
        'name'              => 'services',
        'title'             => __('Services'),
        'render_template'   => '/blocks/services.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'services' ),
    ));

    acf_register_block_type(array(
        'name'              => 'parallax',
        'title'             => __('Parallax'),
        'render_template'   => '/blocks/parallax.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'parallax' ),
    ));

    acf_register_block_type(array(
        'name'              => 'hours',
        'title'             => __('Hours'),
        'render_template'   => '/blocks/hours.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'hours' ),
    ));

    acf_register_block_type(array(
        'name'              => 'stylist',
        'title'             => __('Stylist'),
        'render_template'   => '/blocks/stylist.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'hours' ),
    ));

    acf_register_block_type(array(
        'name'              => 'book',
        'title'             => __('Book'),
        'render_template'   => '/blocks/book.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'hours' ),
    ));

    acf_register_block_type(array(
        'name'              => 'places',
        'title'             => __('Places'),
        'render_template'   => '/blocks/video.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'hours' ),
    ));

    }
    
    // Check if function exists and hook into setup.
    if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
    }