<?php
/**
 *
 * wp_custom_theme Theme Customizer
 *
 * @package wp_custom_theme
 *
 */

function custom_theme_customizer($wp_customize)
{
    /**
    *
    *  Main Page
    *
    */
    $wp_customize->add_panel('panel_main_page', array(
       'capability'     => 'edit_theme_options',
       'theme_supports' => '',
       'title'          => __('Configurações da página inicial', 'custom_theme'),
       'description'    => '',
   ));

    /**
     *
     *  Main Page:
     *  Testimonials
     *
     */
    $wp_customize->add_section(
        'sec_testimonial',
        array(
            'title'			=> __('Depoimentos', 'custom_theme'),
            'description'	=> ' ',
            'panel' 		=> 'panel_main_page',
        )
    );

    // Field 1 - Show section
    $wp_customize->add_setting('set_testimonial_visibility', array(
            'default'    => '0'
        ));
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'set_testimonial_visibility',
            array(
                    'label'			=> __('Mostrar sessão?', 'custom_theme'),
                    'settings'  	=> 'set_testimonial_visibility',
                    'section'   	=> 'sec_testimonial',
                    'type'      	=> 'checkbox',
                )
        )
    );

    // Field 2 - Text Box
    $wp_customize->add_setting(
        'set_title_testimonial',
        array(
               'type'					=> 'theme_mod',
               'default'				=> '',
           )
    );
    $wp_customize->add_control(
        'set_title_testimonial',
        array(
               'label'				=> __('Título', 'custom_theme'),
               'description'		=> __('Digite o titulo da sessão', 'custom_theme'),
               'section'			=> 'sec_testimonial',
                'type'				=> 'text'
           )
    );

    // Field 3 - Text Box
    $wp_customize->add_setting(
        'set_subtitle_testimonial',
        array(
               'type'					=> 'theme_mod',
               'default'				=> '',
           )
    );
    $wp_customize->add_control(
        'set_subtitle_testimonial',
        array(
               'label'				=> __('Subtítulo', 'custom_theme'),
               'description'		=> __('Digite o subtitulo da sessão', 'custom_theme'),
               'section'			=> 'sec_testimonial',
                'type'				=> 'text'
           )
    );


    /**
     *
     *  Contact Page:
     *  Fields
     *
     */

    $wp_customize->add_panel('panel_contact_page', array(
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Configurações da página de contato', 'custom_theme'),
        'description'    => '',
    ));

    $wp_customize->add_section(
        'sec_contact',
        array(
            'title'			=> __('Titulo', 'custom_theme'),
            'description'	=> ' ',
            'panel' 		=> 'panel_contact_page',
        )
    );

    $wp_customize->add_section(
        'sec_contact_form',
        array(
            'title'			=> __('Formulário', 'custom_theme'),
            'description'	=> ' ',
            'panel' 		=> 'panel_contact_page',
        )
    );

    // Field 1 - Text Box
    $wp_customize->add_setting(
        'set_title_contact',
        array(
               'type'					=> 'theme_mod',
               'default'				=> '',
           )
    );
    $wp_customize->add_control(
        'set_title_contact',
        array(
               'label'				=> __('Título', 'custom_theme'),
               'description'		=> __('Digite o titulo da sessão', 'custom_theme'),
               'section'			=> 'sec_contact',
                'type'				=> 'text'
           )
    );

    // Field 2 - Text Box
    $wp_customize->add_setting(
        'set_subtitle_contact',
        array(
               'type'					=> 'theme_mod',
               'default'				=> '',
           )
    );
    $wp_customize->add_control(
        'set_subtitle_contact',
        array(
               'label'				=> __('Subtítulo', 'custom_theme'),
               'description'		=> __('Digite o subtitulo da sessão', 'custom_theme'),
               'section'			=> 'sec_contact',
                'type'				=> 'text'
           )
    );

    // Field 3 - Text Box
    $wp_customize->add_setting(
        'set_shortcode_contact',
        array(
               'type'					=> 'theme_mod',
               'default'				=> '',
           )
    );
    $wp_customize->add_control(
        'set_shortcode_contact',
        array(
               'label'				=> __('Shortode', 'custom_theme'),
               'description'		=> __('Digite o shortcode do formulário', 'custom_theme'),
               'section'			=> 'sec_contact_form',
                'type'				=> 'text'
           )
    );
}
