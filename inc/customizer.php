<?php
/**
 * Smart Light Theme Customizer
 *
 * @package Smart_Light
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function db_smart_light_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'db_smart_light_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'db_smart_light_customize_partial_blogdescription',
        ));
    }

    $wp_customize->add_section('db_smart_light_contacts', array(
        'title'    => __('Контакты', 'db_smart_light'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('phone', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('phone', array(
        'label'   => __('Телефон'),
        'section' => 'db_smart_light_contacts',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('email', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('email', array(
        'label'   => __('Email'),
        'section' => 'db_smart_light_contacts',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('footer-logo', array(
        'default'   => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        // $wp_customize object
        $wp_customize,
        // $id
        'footer-logo',
        // $args
        array(
            'section'     => 'db_smart_light_contacts',
            'label'       => __('Изображение для баннера на главной странице', 'db_smart_light'),
            'description' => __('Выберите изображение для баннера', 'db_smart_light'),
        )
    ));
}
add_action('customize_register', 'db_smart_light_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function db_smart_light_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function db_smart_light_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function db_smart_light_customize_preview_js()
{
    wp_enqueue_script('db-smart-light-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'db_smart_light_customize_preview_js');
