
<?php

/**

 * Customizer Options

 *

 * @package Theme-Vision

 * @subpackage Agama

 * @since Agama 1.0

 */



// Do not allow direct access to the file.

if( ! defined( 'ABSPATH' ) ) {

    exit;

}



// Extend Kirki control with FontAwesome icon picker.

get_template_part( 'framework/admin/modules/icon-picker/icon-picker-control' );



// Include partial refresh class

get_template_part( 'framework/admin/partial-refresh' );



// Include theme pro features file.

get_template_part( 'framework/admin/modules/pro-features/pro-features' );



/**

 * Update Kirki Path's

 *

 * @since 1.2.0

 */

if ( ! function_exists( 'agama_theme_kirki_update_url' ) ) {

    function agama_theme_kirki_update_url( $config ) {

        $config['url_path'] = AGAMA_URI . 'framework/admin/kirki/';

        return $config;

    }

}

add_filter( 'kirki/config', 'agama_theme_kirki_update_url' );



##############################################

# SETUP THEME CONFIG

##############################################

    Kirki::add_config( 'agama_options', array(

        'option_type' => 'theme_mod',

        'capability'  => 'edit_theme_options'

    ) );

#########################################################

# SITE IDENTITY PANEL

#########################################################

    Kirki::add_panel( 'agama_site_identity_panel', array(

        'title'         => __( 'Site Identity', 'agama' )

    ) );

    ###########################################

    # TITLE & TAGLINE GENERAL SECTION

    ###########################################

    Kirki::add_section( 'title_tagline', array(

        'title'         => __( 'General', 'agama' ),

        'panel'         => 'agama_site_identity_panel'

    ) );

    #################################################################

    # TITLE & TAGLINE STYLING SECTION

    #################################################################

    Kirki::add_section( 'agama_title_tagline_styling_section', array( 

        'title'         => __( 'Styling', 'agama' ),

        'panel'         => 'agama_site_identity_panel'

    ) );

    Kirki::add_field( 'agama_options', array( 

		'label'			=> __( 'Logo Color', 'agama' ),

		'tooltip'	    => __( 'Select logo color.', 'agama' ),

		'section'		=> 'agama_title_tagline_styling_section',

		'settings'		=> 'agama_header_logo_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> 'header.site-header h1 a, header.site-header .sticky-header h1 a',

				'property'	=> 'color'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> 'header.site-header h1 a, header.site-header .sticky-header h1 a',

				'function'	=> 'css',

				'property'	=> 'color'

			)

		),

		'default'		=> '#FE6663'

	) );

	Kirki::add_field( 'agama_options', array( 

		'label'			=> __( 'Logo Hover Color', 'agama' ),

		'tooltip'	    => __( 'Select logo hover color.', 'agama' ),

		'section'		=> 'agama_title_tagline_styling_section',

		'settings'		=> 'agama_header_logo_hover_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> 'header.site-header h1 a:hover, header.site-header .sticky-header h1 a:hover',

				'property'	=> 'color'

			),

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> 'header.site-header h1 a:hover, header.site-header .sticky-header h1 a:hover',

				'function'	=> 'css',

				'property'	=> 'color'

			)

		),

		'default'		=> '#000'

	) );

    ################################################

	# TITLE TAGLINE TYPOGRAPHY SECTION

	################################################

	Kirki::add_section( 'agama_title_tagline_typo', array(

		'title'			=> __( 'Typography', 'agama' ),

		'panel'			=> 'agama_site_identity_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Site Title Font', 'agama' ),

		'tooltip'	    => __( 'Select site title font.', 'agama' ),

		'section'		=> 'agama_title_tagline_typo',

		'settings'		=> 'agama_logo_font',

		'type'			=> 'typography',

		'default'			=> array(

			'font-family' 	=> 'Crete Round',

			'font-size'		=> '35px'

		),

        'output'			=> array(

			array(

				'element' 	=> '#masthead .site-title a'

			)

		)

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Site Title Shrinked', 'agama' ),

		'tooltip'	    => __( 'Select header shrinked site title font size.', 'agama' ),

		'section'		=> 'agama_title_tagline_typo',

		'settings'		=> 'agama_logo_shrink_font',

		'type'			=> 'typography',

		'output'		=> array(

			array(

				'element' => '#masthead .sticky-header-shrink .site-title a'

			)

		),

		'default'		=> array(

			'font-size'	=> '28px'

		)

	) );

#######################################################

# GENERAL PANEL

#######################################################

	Kirki::add_panel( 'agama_general_panel', array(

		'title'			=> __( 'General', 'agama' ),

		'priority'		=> 10

	) );

    ########################################################

    # GENERAL BODY SECTION

    ########################################################

    Kirki::add_section( 'background_image', array(

		'title'			=> __( 'Body', 'agama' ),

		'panel'			=> 'agama_general_panel'

	) );

    Kirki::add_field( 'agama_options', array(

        'label'     => __( 'Body Font', 'agama' ),

        'tooltip'   => __( 'Customize body font.', 'agama' ),

        'section'   => 'background_image',

        'settings'  => 'agama_body_font',

        'type'      => 'typography',

        'default'   => array(

            'font-family'       => 'Raleway',

            'variant'           => '400',

            'font-size'         => '14px',

            'line-height'       => '1',

            'letter-spacing'    => '0',

            'subsets'           => array(),

            'color'             => '#747474',

            'text-transform'    => 'none',

            'text-align'        => 'left'

        ),

        'output'   => array(

            array(

                'element'      => 'body'

            )

        ),

        'priority' => 1

    ) );

    #########################################################

    # GENERAL SKINS SECTION

    #########################################################

    Kirki::add_section( 'agama_general_skins_section', array(

        'title'         => __( 'Skins', 'agama' ),

        'panel'         => 'agama_general_panel'

    ) );

    Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Skin', 'agama' ),

		'tooltip'	    => __( 'Select theme skin.', 'agama' ),

		'section'		=> 'agama_general_skins_section',

		'settings'		=> 'agama_skin',

		'type'			=> 'select',

		'choices'		=> array(

			'light'		=> __( 'Light', 'agama' ),

			'dark'		=> __( 'Dark', 'agama' )

		),

		'default'		=> 'light'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Primary Color', 'agama' ),

		'tooltip'	    => __( 'Set theme primary color.', 'agama' ),

		'section'		=> 'agama_general_skins_section',

		'settings'		=> 'agama_primary_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> 'a:hover, .mobile-menu-toggle-label, .vision-search-submit:hover, .entry-title a:hover, .entry-meta a:hover, .entry-content a:hover, .comment-content a:hover, .single-line-meta a:hover, a.comment-reply-link:hover, a.comment-edit-link:hover, article header a:hover, .comments-title span, .comment-reply-title span, .widget a:hover, .comments-link a:hover, .entry-meta a:hover, .entry-header header a:hover, .tagcloud a:hover, footer[role="contentinfo"] a:hover',

				'property'	=> 'color'

			),

			array(

				'element'	=> '.mobile-menu-toggle-inner, .mobile-menu-toggle-inner::before, .mobile-menu-toggle-inner::after, .woocommerce span.onsale, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt',

				'property'	=> 'background-color'

			),

			array(

				'element'	=> '.top-links > ul > li.current-menu-item, #top-navigation > ul > li.current-menu-item, #top-navigation > ul > li.current_page_item, #vision-primary-nav > div > ul > li.current-menu-item > a, #vision-primary-nav > ul > li.current-menu-item > a, #vision-primary-nav > div > ul > li.current_page_item > a, #vision-primary-nav > ul > li.current_page_item > a, header#masthead nav:not(.mobile-menu) ul li ul.sub-menu, .tagcloud a:hover, .wpcf7-text:focus, .wpcf7-email:focus, .wpcf7-textarea:focus',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '#masthead.header_v2, #masthead.header_v3 #top-bar, body.top-bar-out #masthead.header_v3 .sticky-header',

				'property'	=> 'border-top-color'

			),

			array(

				'element'	=> 'header#masthead nav:not(.mobile-menu) ul li ul.sub-menu li:hover',

				'property'	=> 'border-left-color'

			),

			array(

				'element'	=> 'header#masthead nav:not(.mobile-menu) ul li ul.sub-menu li ul.sub-menu li:hover',

				'property'	=> 'border-right-color'

			)

		),

		'transport'		=> 'auto',

		'default'		=> '#FE6663'

	) );

    #######################################################

    # SEARCH PAGE SECTION

    #######################################################

    Kirki::add_section( 'agama_search_page_section', array(

        'title'         => __( 'Search Page', 'agama' ),

        'panel'         => 'agama_general_panel'

    ) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Post Thumbnails', 'agama' ),

		'tooltip'	    => __( 'Enable posts featured thumbnails on search page.', 'agama' ),

		'section'		=> 'agama_search_page_section',

		'settings'		=> 'agama_search_page_thumbnails',

		'type'			=> 'switch',

		'default'		=> false

	) );

    ###############################################

    # STATIC FRONT PAGE SECTION

    ###############################################

    Kirki::add_section( 'static_front_page', array(

		'title'			=> __( 'Static Front Page', 'agama' ),

		'capability'	=> 'edit_theme_options',

        'panel'         => 'agama_general_panel',

	) );

    ####################################################

    # COMMENTS SECTION

    ####################################################

    Kirki::add_section( 'agama_comments_section', array(

        'title'         => __( 'Comments', 'agama' ),

        'panel'         => 'agama_general_panel'

    ) );

    Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'HTML Tags Suggestion', 'agama' ),

		'tooltip'	    => __( 'Enable tags usage suggestion below comment form ?', 'agama' ),

		'settings'		=> 'agama_comments_tags_suggestion',

		'section'		=> 'agama_comments_section',

		'type'			=> 'switch',

		'default'		=> true

	) );

    #################################################

    # EXTRA SECTION

    #################################################

    Kirki::add_section( 'agama_extra_section', array(

        'title'         => __( 'Extra', 'agama' ),

        'panel'         => 'agama_general_panel'

    ) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Nicescroll', 'agama' ),

		'tooltip'	    => __( 'Enable browser nicescroll.', 'agama' ),

		'section'		=> 'agama_extra_section',

		'settings'		=> 'agama_nicescroll',

		'type'			=> 'switch',

		'default'		=> false

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Back to Top', 'agama' ),

		'tooltip'	    => __( 'Enable back to top button.', 'agama' ),

		'section'		=> 'agama_extra_section',

		'settings'		=> 'agama_to_top',

		'type'			=> 'switch',

		'default'		=> true

	) );

    ########################################

    # GENERAL ADDITIONAL CSS SECTION

    ########################################

    Kirki::add_section( 'custom_css', array(

		'title'			=> __( 'Additional CSS', 'agama' ),

		'capability'	=> 'edit_theme_options',

        'panel'         => 'agama_general_panel'

	) );

######################################################

# LAYOUT PANEL

######################################################

    Kirki::add_panel( 'agama_layout_panel', array(

        'title'         => __( 'Layout', 'agama' ),

        'priority'      => 20

    ) );

    ##########################################################

    # LAYOUT GENERAL SECTION

    ##########################################################

	Kirki::add_section( 'agama_layout_general_section', array(

		'title'			=> __( 'General', 'agama' ),

		'capability'	=> 'edit_theme_options',

        'panel'         => 'agama_layout_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Layout Style', 'agama' ),

		'tooltip'	    => __( 'Select layout style.', 'agama' ),

		'section'		=> 'agama_layout_general_section',

		'settings'		=> 'agama_layout_style',

		'type'			=> 'select',

		'choices'		=> array(

			'fullwidth'	=> __( 'Full-Width', 'agama' ),

			'boxed'		=> __( 'Boxed', 'agama' )

		),

		'default'		=> 'fullwidth'

	) );

    ##########################################################

    # LAYOUT SIDEBAR SECTION

    ##########################################################

    Kirki::add_section( 'agama_layout_sidebar_section', array(

        'title'         => __( 'Sidebar', 'agama' ),

        'capability'    => 'edit_theme_options',

        'panel'         => 'agama_layout_panel'

    ) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Sidebar Position', 'agama' ),

		'tooltip'	    => __( 'Select sidebar position.', 'agama' ),

		'section'		=> 'agama_layout_sidebar_section',

		'settings'		=> 'agama_sidebar_position',

		'type'			=> 'select',

		'choices'		=> array(

			'left'		=> __( 'Left', 'agama' ),

			'right'		=> __( 'Right', 'agama' )

		),

		'default'		=> 'right'

	) );

###################################################################################

# HEADER

###################################################################################

	Kirki::add_panel( 'agama_header_panel', array(

		'title'			=> __( 'Header', 'agama' ),

		'priority'		=> 30

	) );

	##################################################

	# HEADER GENERAL SECTION

	##################################################

	Kirki::add_section( 'agama_header_section', array(

		'title'			=> __( 'General', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_header_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Header Style', 'agama' ),

		'tooltip'	    => __( 'Select header style.', 'agama' ),

		'section'		=> 'agama_header_section',

		'settings'		=> 'agama_header_style',

		'type'			=> 'radio-buttonset',

		'choices'		=> array(

			'transparent'	=> __( 'Header V1', 'agama' ),

			'default'		=> __( 'Header V2', 'agama' ),

			'sticky'		=> __( 'Header V3', 'agama' )

		),

		'default'		=> 'sticky'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'	           => __( 'Top Margin', 'agama' ),

		'tooltip'          => __( 'Set header top margin in PX. This feature works only with header V2', 'agama' ),

		'section'          => 'agama_header_section',

		'settings'         => 'agama_header_top_margin',

		'type'	           => 'slider',

		'choices'          => array(

			'step'         => '1',

			'min'          => '0',

			'max'          => '100'

		),

        'transport'        => 'auto',

        'output'           => array(

            array(

                'element'  => 'body.header_v2 #main-wrapper',

                'property' => 'margin-top',

                'suffix'   => 'px'

            )

        ),

         'active_callback' => array(

            array(

                'setting'  => 'agama_header_style',

                'operator' => '==',

                'value'    => 'default'

            )

        ),

		'default'		   => '0'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			   => __( 'Top Border', 'agama' ),

		'tooltip'	       => __( 'Select header top border height in PX. This feature works with header V2 & V3.', 'agama' ),

		'section'		   => 'agama_header_section',

		'settings'		   => 'agama_header_top_border_size',

		'type'			   => 'slider',

        'choices'          => array(

            'min'          => '0',

            'max'          => '20',

            'step'         => '1'

        ),

        'transport'        => 'auto',

        'output'           => array(

            array(

                'element'  => '#masthead.header_v2, #masthead.header_v3 #top-bar, body.top-bar-out #masthead.header_v3 .sticky-header',

                'property' => 'border-top-width',

                'suffix'   => 'px'

            )

        ),

        'active_callback'  => array(

            array(

                'setting'  => 'agama_header_style',

                'operator' => 'contains',

                'value'    => array( 'default', 'sticky' )

            )  

        ),

		'default'		   => '3'

	) );

	#######################################################

	# HEADER LOGO SECTION

	#######################################################

	Kirki::add_section( 'agama_header_logo_section', array(

		'title'			=> __( 'Logo', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_header_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'				=> __( 'Logo', 'agama' ),

		'tooltip'		    => __( 'Upload custom logo.', 'agama' ),

		'section'			=> 'agama_header_logo_section',

		'settings'			=> 'agama_logo',

		'type'				=> 'image',

        'partial_refresh'   => array(

            'agama_logo'    => array(

                'selector'          => '#masthead .customize_preview_logo',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_logo' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Logo Max-Height', 'agama' ),

		'tooltip'	    => __( 'Set logo max-height in PX.', 'agama' ),

		'section'		=> 'agama_header_logo_section',

		'settings'		=> 'agama_logo_max_height',

		'type'			=> 'slider',

		'choices'		=> array(

			'step'		=> '1',

			'min'		=> '0',

			'max'		=> '250'

		),

		'default'		=> '90'

	) );

	##########################################

	# HEADER IMAGE SECTION

	##########################################

	Kirki::add_section( 'header_image', array(

		'title'			=> __( 'Header Image', 'agama' ),

		'panel'			=> 'agama_header_panel',

        'capability'    => 'edit_theme_options'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Particles', 'agama' ),

		'tooltip'	    => __( 'Enable particles ?', 'agama' ),

		'settings'		=> 'agama_header_image_particles',

		'section'		=> 'header_image',

		'type'			=> 'switch',

		'default'		=> true,

		'priority'		=> 1

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Particle Circles Color', 'agama' ),

		'tooltip'	    => __( 'Set particles custom circles color ?', 'agama' ),

		'settings'		=> 'agama_header_image_particles_circle_color',

		'section'		=> 'header_image',

		'type'			=> 'color',

		'default'		=> '#FE6663',

		'priority'		=> 1

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Particles Lines Color', 'agama' ),

		'tooltip'	    => __( 'Set particles custom lines color', 'agama' ),

		'settings'		=> 'agama_header_image_particles_lines_color',

		'section'		=> 'header_image',

		'type'			=> 'color',

		'default'		=> '#FE6663',

		'priority'		=> 1

	) );

    ##########################################################

    # HEADER STYLING SECTION

    ##########################################################

    Kirki::add_section( 'agama_header_styling_section', array(

        'title'         => __( 'Styling', 'agama' ),

        'panel'         => 'agama_header_panel',

        'capability'    => 'edit_theme_options'

    ) );

    Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Header Background Color', 'agama' ),

		'tooltip'		=> __( 'Doesn\'t work with header V1 style.', 'agama' ),

		'section'		=> 'agama_header_styling_section',

		'settings'		=> 'agama_header_bg_color',

		'type'			=> 'color',

        'choices'       => array(

            'alpha'		=> true

        ),

		'output'		=> array(

			array(

				'element'	=> 'header#masthead',

				'property'	=> 'background-color'

			),

			array(

				'element'	=> 'header#masthead nav:not(.mobile-menu) ul li ul',

				'property'	=> 'background-color'

			)

		),

		'transport'		    => 'postMessage',

		'js_vars'		    => array(

			array(

				'element'	=> 'header#masthead, header#masthead nav:not(.mobile-menu) ul li ul',

				'function'	=> 'css',

				'property'	=> 'background-color'

			)

		),

		'default'		   => 'rgba(255, 255, 255, 1)'

	) );

    Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Header Shrinked BG Color', 'agama' ),

		'tooltip'		=> __( 'Work\'s only with header V1 & V3.', 'agama' ),

		'section'		=> 'agama_header_styling_section',

		'settings'		=> 'agama_header_shrink_bg_color',

		'type'			=> 'color',

        'choices'       => array(

            'alpha'		=> true

        ),

		'output'		=> array(

			array(

				'element'	=> 'header.shrinked .sticky-header',

				'property'	=> 'background-color'

			),

			array(

				'element'	=> 'header.shrinked nav ul li ul',

				'property'	=> 'background-color',

				'suffix'	=> '!important'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> 'header.shrinked .sticky-header, header.shrinked nav ul li ul',

				'function'	=> 'css',

				'property'	=> 'background-color'

			)

		),

		'default'		=> 'rgba(255, 255, 255, .9)'

	) );

    Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Header Borders Color', 'agama' ),

		'tooltip'	    => __( 'Select header borders color.', 'agama' ),

		'section'		=> 'agama_header_styling_section',

		'settings'		=> 'agama_header_border_color',

		'type'			=> 'color',

        'choices'       => array(

            'alpha'	    => true

        ),

		'output'		=> array(

			array(

				'element'	=> '#top-bar',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '.main-navigation',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '.sticky-nav ul li ul li, .sticky-nav li ul li',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '.sticky-nav ul li ul li:last-child, .sticky-nav li ul li:last-child',

				'property'	=> 'border-color'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> '.main-navigation, .sticky-nav ul li ul li, .sticky-nav li ul li, .sticky-nav ul li ul li:last-child, .sticky-nav li ul li:last-child',

				'function'	=> 'css',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '#top-bar',

				'function'	=> 'css',

				'property'	=> 'border-bottom-color'

			)

		),

		'default'		=> 'rgba(238, 238, 238, 1)'

	) );

###############################################

# NAVIGATIONS PANEL

###############################################

	Kirki::add_panel( 'agama_nav_panel', array(

		'title'			=> __( 'Navigations', 'agama' ),

		'priority'		=> 40,

	) );

	###################################################

	# NAVIGATION TOP SECTION

	###################################################

	Kirki::add_section( 'agama_nav_top_section', array(

		'title'			=> __( 'Navigation Top', 'agama' ),

		'panel'			=> 'agama_nav_panel',

		'capability'	=> 'edit_theme_options'

	) );

    Kirki::add_field( 'agama_options', array(

		'label'				=> __( 'Top Navigation', 'agama' ),

		'tooltip'		    => __( 'Enable top navigation. Working only with header V2 & V3.', 'agama' ),

		'section'			=> 'agama_nav_top_section',

		'settings'			=> 'agama_top_navigation',

		'type'				=> 'switch',

		'default'			=> true,

        'active_callback'   => array(

            array(

                'setting'   => 'agama_header_style',

                'operator'  => '!==',

                'value'     => 'transparent'

            )

        ),

        'partial_refresh'   => array(

            'agama_top_navigation' => array(

                'selector'         => array( 'nav#top-navigation', 'div.top-links div' ),

                'render_callback'  => array( 'Agama_Partial_Refresh', 'preview_top_navigation' )

            )

        )

	) );

    Kirki::add_field( 'agama_options', array(

        'label'             => __( 'Font', 'agama' ),

        'tooltip'           => __( 'Customize top navigation font.', 'agama' ),

        'section'           => 'agama_nav_top_section',

        'settings'          => 'agama_navigation_top_font',

        'type'              => 'typography',

        'output'            => array(

            array(

                'element'   => '#vision-top-nav ul li a'    

            )

        ),

        'default' => array(

            'font-family'       => 'Roboto Condensed',

            'variant'           => '700',

            'font-size'         => '14px',

            'letter-spacing'    => '0',

            'subsets'           => array(),

            'color'             => '#757575',

            'text-transform'    => 'uppercase'

        )

    ) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Links Hover Color', 'agama' ),

		'tooltip'	    => __( 'Select navigation top links hover color.', 'agama' ),

		'settings'		=> 'agama_nav_top_hover_color',

		'section'		=> 'agama_nav_top_section',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '#vision-top-nav ul li a:hover',

				'property'	=> 'color'

			)

		),

		'default'		=> '#333'

	) );

	#######################################################

	# NAVIGATION PRIMARY SECTION

	#######################################################

	Kirki::add_section( 'agama_nav_primary_section', array(

		'title'			=> __( 'Navigation Primary', 'agama' ),

		'panel'			=> 'agama_nav_panel',

		'capability'	=> 'edit_theme_options'

	) );

    Kirki::add_field( 'agama_options', array(

        'label'             => __( 'Font', 'agama' ),

        'tooltip'           => __( 'Customize primary navigation font.', 'agama' ),

        'section'           => 'agama_nav_primary_section',

        'settings'          => 'agama_navigation_primary_font',

        'type'              => 'typography',

        'output'            => array(

            array(

                'element'   => '#vision-primary-nav ul li a'    

            )

        ),

        'default' => array(

            'font-family'       => 'Roboto Condensed',

            'variant'           => '700',

            'font-size'         => '14px',

            'letter-spacing'    => '0',

            'subsets'           => array(),

            'color'             => '#757575',

            'text-transform'    => 'uppercase'

        )

    ) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Links Hover Color', 'agama' ),

		'tooltip'	    => __( 'Select navigation primary links hover color.', 'agama' ),

		'settings'		=> 'agama_nav_primary_hover_color',

		'section'		=> 'agama_nav_primary_section',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '#vision-primary-nav ul li a:hover',

				'property'	=> 'color'

			)

		),

		'default'		=> '#333'

	) );

	######################################################

	# NAVIGATION MOBILE SECTION

	######################################################

	Kirki::add_section( 'agama_nav_mobile_section', array(

		'title'			=> __( 'Navigation Mobile', 'agama' ),

		'panel'			=> __( 'agama_nav_panel', 'agama' ),

		'capability'	=> 'edit_theme_options'

	) );

    Kirki::add_field( 'agama_options', array(

        'label'             => __( 'Font', 'agama' ),

        'tooltip'           => __( 'Customize mobile navigation font.', 'agama' ),

        'section'           => 'agama_nav_mobile_section',

        'settings'          => 'agama_mobile_navigation_font',

        'type'              => 'typography',

        'output'            => array(

            array(

                'element'   => '#vision-mobile-nav ul li a'    

            ),

            array(

                'element'   => '#vision-mobile-nav ul > li.menu-item-has-children.open > a'

            ),

            array(

                'element'   => '#vision-mobile-nav ul > li > ul li.menu-item-has-children > a'

            )

        ),

        'default' => array(

            'font-family'       => 'Roboto Condensed',

            'variant'           => '700',

            'font-size'         => '14px',

            'letter-spacing'    => '0',

            'subsets'           => array(),

            'color'             => '#757575',

            'text-transform'    => 'uppercase'

        )

    ) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Links Hover Color', 'agama' ),

		'tooltip'	    => __( 'Select mobile menu links hover color.', 'agama' ),

		'settings'		=> 'agama_nav_mobile_hover_color',

		'section'		=> 'agama_nav_mobile_section',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '#vision-mobile-nav ul li a:hover',

				'property'	=> 'color',

				'suffix'	=> '!important'

			)

		),

		'default'		=> '#333'

	) );

    Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Menu Icon Title', 'agama' ),

		'tooltip'	    => __( 'Set custom mobile menu title.', 'agama' ),

		'settings'		=> 'agama_nav_mobile_icon_title',

		'section'		=> 'agama_nav_mobile_section',

		'type'			=> 'text',

		'default'		=> ''

	) );

##################################################

# SLIDER

##################################################

	Kirki::add_panel( 'agama_slider_panel', array(

		'title'			=> __( 'Slider', 'agama' ),

		'tooltip'	    => __( 'Slider settings.', 'agama' ),

		'priority'		=> 40,

	) );

	##########################################################

	# SLIDER GENERAL SECTION

	##########################################################

	Kirki::add_section( 'agama_slider_general_section', array(

		'title'			=> __( 'General', 'agama' ),

		'panel'			=> 'agama_slider_panel',

		'capability'	=> 'edit_theme_options'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Enable', 'agama' ),

		'tooltip'	    => __( 'Enable slider ?', 'agama' ),

		'section'		=> 'agama_slider_general_section',

		'settings'		=> 'agama_slider_enable',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Overlay', 'agama' ),

		'tooltip'	    => __( 'Enable slider overlay ?', 'agama' ),

		'section'		=> 'agama_slider_general_section',

		'settings'		=> 'agama_slider_overlay',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'				=> __( 'Overlay BG Color', 'agama' ),

		'tooltip'		=> __( 'Set custom overlay background color.', 'agama' ),

		'section'			=> 'agama_slider_general_section',

		'settings'			=> 'agama_slider_overlay_bg_color',

		'type'				=> 'color',

		'choices'     		=> array(

			'alpha' 		=> true

		),

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_slider_overlay',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'output'			=> array(

            array(

                'element'	=> '.camera_overlayer',

                'property'	=> 'background'

            )

		),

		'default'			=> 'rgba(26,131,192,0.5)'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Height', 'agama' ),

		'tooltip'	    => __( 'Set slider height in pixels (px). Set 0 for full screen slider.', 'agama' ),

		'section'		=> 'agama_slider_general_section',

		'settings'		=> 'agama_slider_height',

		'type'			=> 'number',

		'choices'		=> array(

			'min'		=> '0',

			'max'		=> '1000',

			'step'		=> '1'

		),

		'default'		=> '0'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Time', 'agama' ),

		'tooltip'	    => __( 'Milliseconds between the end of the sliding effect and the start of the nex one. 1000ms = 1sec', 'agama' ),

		'section'		=> 'agama_slider_general_section',

		'settings'		=> 'agama_slider_time',

		'type'			=> 'number',

		'choices'		=> array(

			'min'		=> '1000',

			'max'		=> '28000',

			'step'		=> '1'

		),

		'default'		=> '7000'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Visibility', 'agama' ),

		'tooltip'	    => __( 'Select where the slider should be visible.', 'agama' ),

		'section'		=> 'agama_slider_general_section',

		'settings'		=> 'agama_slider_visibility',

		'type'			=> 'select',

		'choices'		=> array(

			'homepage'	=> __( 'Home Page', 'agama' ),

			'frontpage'	=> __( 'Front Page', 'agama' )

		),

		'default'		=> 'homepage'

	) );

	############################################################

	# PARTICLES SECTION

	############################################################

	Kirki::add_section( 'agama_slider_particles_section', array(

		'title'			=> __( 'Particles', 'agama' ),

		'panel'			=> 'agama_slider_panel',

		'capability'	=> 'edit_theme_options'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Particles', 'agama' ),

		'tooltip'	    => __( 'Enable particles on slider ?', 'agama' ),

		'settings'		=> 'agama_slider_particles',

		'section'		=> 'agama_slider_particles_section',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Particle Circles Color', 'agama' ),

		'tooltip'	    => __( 'Set particles custom circles color ?', 'agama' ),

		'settings'		=> 'agama_slider_particles_circle_color',

		'section'		=> 'agama_slider_particles_section',

		'type'			=> 'color',

		'default'		=> '#FE6663'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Particles Lines Color', 'agama' ),

		'tooltip'	    => __( 'Set particles custom lines color', 'agama' ),

		'settings'		=> 'agama_slider_particles_lines_color',

		'section'		=> 'agama_slider_particles_section',

		'type'			=> 'color',

		'default'		=> '#FE6663'

	) );

	###################################################

	# SLIDE 1 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_1_section', array(

		'title'			=> __( 'Slide #1', 'agama' ),

		'panel'			=> 'agama_slider_panel',

		'capability'	=> 'edit_theme_options'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Image', 'agama' ),

		'settings'		=> 'agama_slider_image_1',

		'section'		=> 'agama_slide_1_section',

		'type'			=> 'image',

		'default'		=> AGAMA_IMG . 'header_img.jpg'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Title', 'agama' ),

		'tooltip'	    => __( 'Add custom slide title. If empty the title will be hidden.', 'agama' ),

		'section'		    => 'agama_slide_1_section',

		'settings'		    => 'agama_slider_title_1',

		'type'			    => 'text',

		'default'		    => __( 'Welcome to Agama', 'agama' ),

        'partial_refresh'   => array(

            'agama_slider_title_1'  => array(

                'selector'          => '.slide-1 h2.slide-title',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_slide_1_title' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title Animation', 'agama' ),

		'tooltip'	    => __( 'Select title slide animation.', 'agama' ),

		'section'		=> 'agama_slide_1_section',

		'settings'		=> 'agama_slider_title_animation_1',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'default'		=> 'bounceInLeft'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title Color', 'agama' ),

		'tooltip'	    => __( 'Select slide title color.', 'agama' ),

		'section'		=> 'agama_slide_1_section',

		'settings'		=> 'agama_slider_title_color_1',

		'type'			=> 'color',

		'default'		=> '#fff'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Slider Content Top Distance', 'agama' ),

		'tooltip'	    => __( 'Set slider content top distance in %.', 'agama' ),

		'section'		=> 'agama_slide_1_section',

		'settings'		=> 'agama_slider_content_top_1',

		'type'			=> 'slider',

		'choices'		=> array(

			'step'		=> '1',

			'min'		=> '0',

			'max'		=> '100'

		),

		'default'		=> '40'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Button Title', 'agama' ),

		'tooltip'	        => __( 'Set custom button title. If empty the button will be hidden.', 'agama' ),

		'section'		    => 'agama_slide_1_section',

		'settings'		    => 'agama_slider_button_title_1',

		'type'			    => 'text',

		'default'		    => __( 'Learn More', 'agama' ),

        'partial_refresh'   => array(

            'agama_slider_button_title_1' => array(

                'selector'          => '.slide-1 a.button',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_slide_1_button' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button Animation', 'agama' ),

		'tooltip'	    => __( 'Select button slide animation.', 'agama' ),

		'section'		=> 'agama_slide_1_section',

		'settings'		=> 'agama_slider_button_animation_1',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'default'		=> 'bounceInRight'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button URL', 'agama' ),

		'tooltip'	    => __( 'Set button url.', 'agama' ),

		'section'		=> 'agama_slide_1_section',

		'settings'		=> 'agama_slider_button_url_1',

		'type'			=> 'text',

		'default'		=> '#'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button BG Color', 'agama' ),

		'tooltip'	    => __( 'Select button background color.', 'agama' ),

		'section'		=> 'agama_slide_1_section',

		'settings'		=> 'agama_slider_button_bg_color_1',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '#agama_slider .slide-1 a.button',

				'property'	=> 'color'

			),

			array(

				'element'	=> '#agama_slider .slide-1 a.button',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '#agama_slider .slide-1 a.button:hover',

				'property'	=> 'background-color'

			)

		),

		'default'		=> '#FE6663'

	) );

	###################################################

	# SLIDE 2 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_2_section', array(

		'title'			=> __( 'Slide #2', 'agama' ),

		'panel'			=> 'agama_slider_panel',

		'capability'	=> 'edit_theme_options'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Image', 'agama' ),

		'settings'		=> 'agama_slider_image_2',

		'section'		=> 'agama_slide_2_section',

		'type'			=> 'image',

		'default'		=> AGAMA_IMG . 'header_img.jpg'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title', 'agama' ),

		'tooltip'	    => __( 'Add custom slide title. If empty the title will be hidden.', 'agama' ),

		'section'		=> 'agama_slide_2_section',

		'settings'		=> 'agama_slider_title_2',

		'type'			=> 'text',

		'default'		=> __( 'Welcome to Agama', 'agama' ),

        'partial_refresh'   => array(

            'agama_slider_title_2'  => array(

                'selector'          => '.slide-2 h2.slide-title',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_slide_2_title' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title Animation', 'agama' ),

		'tooltip'	    => __( 'Select title slide animation.', 'agama' ),

		'section'		=> 'agama_slide_2_section',

		'settings'		=> 'agama_slider_title_animation_2',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'default'		=> 'bounceInLeft'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title Color', 'agama' ),

		'tooltip'	    => __( 'Select slide title color.', 'agama' ),

		'section'		=> 'agama_slide_2_section',

		'settings'		=> 'agama_slider_title_color_2',

		'type'			=> 'color',

		'default'		=> '#fff'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Slider Content Top Distance', 'agama' ),

		'tooltip'	    => __( 'Set slider content top distance in %.', 'agama' ),

		'section'		=> 'agama_slide_2_section',

		'settings'		=> 'agama_slider_content_top_2',

		'type'			=> 'slider',

		'choices'		=> array(

			'step'		=> '1',

			'min'		=> '0',

			'max'		=> '100'

		),

		'default'		=> '40'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Button Title', 'agama' ),

		'tooltip'	    => __( 'Set custom button title. If empty the button will be hidden.', 'agama' ),

		'section'		    => 'agama_slide_2_section',

		'settings'		    => 'agama_slider_button_title_2',

		'type'			    => 'text',

		'default'		    => __( 'Learn More', 'agama' ),

        'partial_refresh'   => array(

            'agama_slider_button_title_2' => array(

                'selector'          => '.slide-2 a.button',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_slide_2_button' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button Animation', 'agama' ),

		'tooltip'	    => __( 'Select button slide animation.', 'agama' ),

		'section'		=> 'agama_slide_2_section',

		'settings'		=> 'agama_slider_button_animation_2',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'default'		=> 'bounceInRight'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button URL', 'agama' ),

		'tooltip'	    => __( 'Set button url.', 'agama' ),

		'section'		=> 'agama_slide_2_section',

		'settings'		=> 'agama_slider_button_url_2',

		'type'			=> 'text',

		'default'		=> '#'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button BG Color', 'agama' ),

		'tooltip'	    => __( 'Select button background color.', 'agama' ),

		'section'		=> 'agama_slide_2_section',

		'settings'		=> 'agama_slider_button_bg_color_2',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '#agama_slider .slide-2 a.button',

				'property'	=> 'color'

			),

			array(

				'element'	=> '#agama_slider .slide-2 a.button',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '#agama_slider .slide-2 a.button:hover',

				'property'	=> 'background-color'

			)

		),

		'default'		=> '#FE6663'

	) );

	###################################################

	# SLIDE 3 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_3_section', array(

		'title'			=> __( 'Slide #3', 'agama' ),

		'panel'			=> 'agama_slider_panel',

		'capability'	=> 'edit_theme_options'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Image', 'agama' ),

		'settings'		=> 'agama_slider_image_3',

		'section'		=> 'agama_slide_3_section',

		'type'			=> 'image',

		'default'		=> AGAMA_IMG . 'header_img.jpg'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title', 'agama' ),

		'tooltip'	    => __( 'Add custom slide title. If empty the title will be hidden.', 'agama' ),

		'section'		=> 'agama_slide_3_section',

		'settings'		=> 'agama_slider_title_3',

		'type'			=> 'text',

		'default'		=> __( 'Welcome to Agama', 'agama' ),

        'partial_refresh'   => array(

            'agama_slider_title_3'  => array(

                'selector'          => '.slide-3 h2.slide-title',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_slide_3_title' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title Animation', 'agama' ),

		'tooltip'	    => __( 'Select title slide animation.', 'agama' ),

		'section'		=> 'agama_slide_3_section',

		'settings'		=> 'agama_slider_title_animation_3',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'default'		=> 'bounceInLeft'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title Color', 'agama' ),

		'tooltip'	    => __( 'Select slide title color.', 'agama' ),

		'section'		=> 'agama_slide_3_section',

		'settings'		=> 'agama_slider_title_color_3',

		'type'			=> 'color',

		'default'		=> '#fff'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Slider Content Top Distance', 'agama' ),

		'tooltip'	    => __( 'Set slider content top distance in %.', 'agama' ),

		'section'		=> 'agama_slide_3_section',

		'settings'		=> 'agama_slider_content_top_3',

		'type'			=> 'slider',

		'choices'		=> array(

			'step'		=> '1',

			'min'		=> '0',

			'max'		=> '100'

		),

		'default'		=> '40'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Button Title', 'agama' ),

		'tooltip'	    => __( 'Set custom button title. If empty the button will be hidden.', 'agama' ),

		'section'		    => 'agama_slide_3_section',

		'settings'		    => 'agama_slider_button_title_3',

		'type'			    => 'text',

		'default'		    => __( 'Learn More', 'agama' ),

        'partial_refresh'   => array(

            'agama_slider_button_title_3' => array(

                'selector'          => '.slide-3 a.button',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_slide_3_button' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button Animation', 'agama' ),

		'tooltip'	    => __( 'Select button slide animation.', 'agama' ),

		'section'		=> 'agama_slide_3_section',

		'settings'		=> 'agama_slider_button_animation_3',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'default'		=> 'bounceInRight'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button URL', 'agama' ),

		'tooltip'	    => __( 'Set button url.', 'agama' ),

		'section'		=> 'agama_slide_3_section',

		'settings'		=> 'agama_slider_button_url_3',

		'type'			=> 'text',

		'default'		=> '#'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button BG Color', 'agama' ),

		'tooltip'	    => __( 'Select button background color.', 'agama' ),

		'section'		=> 'agama_slide_3_section',

		'settings'		=> 'agama_slider_button_bg_color_3',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '#agama_slider .slide-3 a.button',

				'property'	=> 'color'

			),

			array(

				'element'	=> '#agama_slider .slide-3 a.button',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '#agama_slider .slide-3 a.button:hover',

				'property'	=> 'background-color'

			)

		),

		'default'		=> '#FE6663'

	) );

	###################################################

	# SLIDE 4 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_4_section', array(

		'title'			=> __( 'Slide #4', 'agama' ),

		'panel'			=> 'agama_slider_panel',

		'capability'	=> 'edit_theme_options'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Image', 'agama' ),

		'settings'		=> 'agama_slider_image_4',

		'section'		=> 'agama_slide_4_section',

		'type'			=> 'image',

		'default'		=> AGAMA_IMG . 'header_img.jpg'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title', 'agama' ),

		'tooltip'	    => __( 'Add custom slide title. If empty the title will be hidden.', 'agama' ),

		'section'		=> 'agama_slide_4_section',

		'settings'		=> 'agama_slider_title_4',

		'type'			=> 'text',

		'default'		=> __( 'Welcome to Agama', 'agama' ),

        'partial_refresh'   => array(

            'agama_slider_title_4'  => array(

                'selector'          => '.slide-4 h2.slide-title',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_slide_4_title' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title Animation', 'agama' ),

		'tooltip'	    => __( 'Select title slide animation.', 'agama' ),

		'section'		=> 'agama_slide_4_section',

		'settings'		=> 'agama_slider_title_animation_4',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'default'		=> 'bounceInLeft'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title Color', 'agama' ),

		'tooltip'	    => __( 'Select slide title color.', 'agama' ),

		'section'		=> 'agama_slide_4_section',

		'settings'		=> 'agama_slider_title_color_4',

		'type'			=> 'color',

		'default'		=> '#fff'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Slider Content Top Distance', 'agama' ),

		'tooltip'	    => __( 'Set slider content top distance in %.', 'agama' ),

		'section'		=> 'agama_slide_4_section',

		'settings'		=> 'agama_slider_content_top_4',

		'type'			=> 'slider',

		'choices'		=> array(

			'step'		=> '1',

			'min'		=> '0',

			'max'		=> '100'

		),

		'default'		=> '40'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Button Title', 'agama' ),

		'tooltip'	    => __( 'Set custom button title. If empty the button will be hidden.', 'agama' ),

		'section'		    => 'agama_slide_4_section',

		'settings'		    => 'agama_slider_button_title_4',

		'type'			    => 'text',

		'default'		    => __( 'Learn More', 'agama' ),

        'partial_refresh'   => array(

            'agama_slider_button_title_4' => array(

                'selector'          => '.slide-4 a.button',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_slide_4_button' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button Animation', 'agama' ),

		'tooltip'	    => __( 'Select button slide animation.', 'agama' ),

		'section'		=> 'agama_slide_4_section',

		'settings'		=> 'agama_slider_button_animation_4',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'default'		=> 'bounceInRight'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button URL', 'agama' ),

		'tooltip'	    => __( 'Set button url.', 'agama' ),

		'section'		=> 'agama_slide_4_section',

		'settings'		=> 'agama_slider_button_url_4',

		'type'			=> 'text',

		'default'		=> '#'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Button BG Color', 'agama' ),

		'tooltip'	    => __( 'Select button background color.', 'agama' ),

		'section'		=> 'agama_slide_4_section',

		'settings'		=> 'agama_slider_button_bg_color_4',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '#agama_slider .slide-4 a.button',

				'property'	=> 'color'

			),

			array(

				'element'	=> '#agama_slider .slide-4 a.button',

				'property'	=> 'border-color'

			),

			array(

				'element'	=> '#agama_slider .slide-4 a.button:hover',

				'property'	=> 'background-color'

			)

		),

		'default'		=> '#FE6663'

	) );



	###################################################

	# SLIDE 5 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_5_section', array(

		'title'			=> __( 'Slide #5', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_slider_panel'

	) );

	###################################################

	# SLIDE 6 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_6_section', array(

		'title'			=> __( 'Slide #6', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_slider_panel'

	) );

	###################################################

	# SLIDE 7 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_7_section', array(

		'title'			=> __( 'Slide #7', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_slider_panel'

	) );

	###################################################

	# SLIDE 8 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_8_section', array(

		'title'			=> __( 'Slide #8', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_slider_panel'

	) );

	###################################################

	# SLIDE 9 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_9_section', array(

		'title'			=> __( 'Slide #9', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_slider_panel'

	) );

	###################################################

	# SLIDE 10 SECTION

	###################################################

	Kirki::add_section( 'agama_slide_10_section', array(

		'title'			=> __( 'Slide #10', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_slider_panel'

	) );

###################################################################################

# BREADCRUMB

###################################################################################

	Kirki::add_section( 'agama_breadcrumb_section', array(

		'title'			=> __( 'Breadcrumb', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 50,

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Breadcrumb', 'agama' ),

		'tooltip'	    => __( 'Enable breadcrumb ?', 'agama' ),

		'section'		=> 'agama_breadcrumb_section',

		'settings'		=> 'agama_breadcrumb',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Breadcrumb on Home Page', 'agama' ),

		'tooltip'	    => __( 'Enable breadcrumb on home page ?', 'agama' ),

		'section'		=> 'agama_breadcrumb_section',

		'settings'		=> 'agama_breadcrumb_homepage',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Breadcrumb Style', 'agama' ),

		'tooltip'	    => __( 'Select breadcrumb style.', 'agama' ),

		'section'		=> 'agama_breadcrumb_section',

		'settings'		=> 'agama_breadcrumb_style',

		'type'			=> 'select',

		'choices'		=> array(

			'mini'		=> __( 'Mini', 'agama' ),

			'normal'	=> __( 'Normal', 'agama' )

		),

		'default'		=> 'mini'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Background Color', 'agama' ),

		'tooltip'	    => __( 'Select breadcrumb background color.', 'agama' ),

		'section'		=> 'agama_breadcrumb_section',

		'settings'		=> 'agama_breadcrumb_bg_color',

		'type'			=> 'color',

		'default'		=> '#F5F5F5'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Font Color', 'agama' ),

		'tooltip'	    => __( 'Select breadcrumb font color.', 'agama' ),

		'section'		=> 'agama_breadcrumb_section',

		'settings'		=> 'agama_breadcrumb_text_color',

		'type'			=> 'color',

		'default'		=> '#444'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Links Color', 'agama' ),

		'tooltip'	    => __( 'Select breadcrumb links color.', 'agama' ),

		'section'		=> 'agama_breadcrumb_section',

		'settings'		=> 'agama_breadcrumb_links_color',

		'type'			=> 'color',

		'default'		=> '#444'

	) );

###################################################################################

# FRONTPAGE BOXES

###################################################################################

	Kirki::add_panel( 'agama_frontpage_boxes_panel', array(

		'title'			=> __( 'Front Page Boxes', 'agama' ),

		'tooltip'	    => __( 'Front page boxes section.', 'agama' ),

		'priority'		=> 60

	) );

	#############################################################

	# FRONTPAGE BOXES GENERAL SECTION

	#############################################################

	Kirki::add_section( 'agama_frontpage_general_section', array(

		'title'			=> __( 'General', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Enable ?', 'agama' ),

		'tooltip'	    => __( 'Global enable | disable.', 'agama' ),

		'settings'		=> 'agama_frontpage_boxes',

		'section'		=> 'agama_frontpage_general_section',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Visibility', 'agama' ),

		'tooltip'	    => __( 'Select where you want front page boxes to be visible.', 'agama' ),

		'section'		=> 'agama_frontpage_general_section',

		'settings'		=> 'agama_frontpage_boxes_visibility',

		'type'			=> 'select',

		'choices'		=> array(

			'homepage'	=> __( 'Home Page', 'agama' ),

			'frontpage'	=> __( 'Front Page', 'agama' ),

			'allpages'	=> __( 'All Pages', 'agama' )

		),

		'default'		=> 'homepage'

	) );

	#############################################################

	# FRONTPAGE BOXES SECTION 1

	#############################################################

	Kirki::add_section( 'agama_frontpage_boxes_section_1', array(

		'title'			=> __( 'Front Page Box #1', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Enable', 'agama' ),

        'tooltip'       => __( 'If disabled the front page box #1 will be hidden.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_1',

		'settings'		=> 'agama_frontpage_box_1_enable',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Title', 'agama' ),

		'tooltip'	        => __( 'Write box custom title.', 'agama' ),

		'section'		    => 'agama_frontpage_boxes_section_1',

		'settings'		    => 'agama_frontpage_box_1_title',

		'type'			    => 'text',

		'default'           => __( 'Responsive Layout', 'agama' ),

        'partial_refresh'   => array(

            'agama_frontpage_box_1_title' => array(

                'selector'          => '.fbox-1 h2',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_1_title' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Select Icon', 'agama' ),

		'tooltip'	        => __( 'Select desired box icon.', 'agama' ),

		'section'		    => 'agama_frontpage_boxes_section_1',

		'settings'		    => 'agama_frontpage_box_1_icon',

		'type'			    => 'agip',

		'default'		    => 'fa-tablet',

        'partial_refresh'   => array(

            'agama_frontpage_box_1_icon' => array(

                'selector'          => '.fbox-1 span.fbox-icon',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_1_icon' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Icon Color', 'agama' ),

		'tooltip'	    => __( 'Select icon color.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_1',

		'settings'		=> 'agama_frontpage_box_1_icon_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '.fbox-1 i',

				'property'	=> 'color'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> '.fbox-1 i',

				'function'	=> 'css',

				'property'	=> 'color'

			)

		),

		'default'		=> '#FE6663'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Image', 'agama' ),

		'tooltip'	        => __('You can use image instead of FontAwesome icon, just upload it here.', 'agama'),

		'section'		    => 'agama_frontpage_boxes_section_1',

		'settings'		    => 'agama_frontpage_1_img',

		'type'			    => 'image'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Box Icon / Image URL', 'agama' ),

		'tooltip'	    => __( 'Add box icon / image custom url. Ex: http://google.com', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_1',

		'settings'		=> 'agama_frontpage_box_1_icon_url',

		'type'			=> 'text'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Box Text', 'agama' ),

		'tooltip'	        => __( 'Write box custom text.', 'agama' ),

		'section'		    => 'agama_frontpage_boxes_section_1',

		'settings'		    => 'agama_frontpage_box_1_text',

		'type'			    => 'textarea',

		'default'		    => 'Powerful Layout with Responsive functionality that can be adapted to any screen size.',

        'partial_refresh'   => array(

            'agama_frontpage_box_1_text' => array(

                'selector'          => '.fbox-1 p',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_1_desc' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Box Animated', 'agama' ),

		'tooltip'	    => __( 'Enable box loading animation.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_1',

		'settings'		=> 'agama_frontpage_box_1_animated',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'				=> __( 'Box Animation', 'agama' ),

		'tooltip'		    => __( 'Select box appear loading animation.', 'agama' ),

		'section'			=> 'agama_frontpage_boxes_section_1',

		'settings'			=> 'agama_frontpage_box_1_animation',

		'type'				=> 'select',

		'choices'			=> AgamaAnimate::choices(),

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_frontpage_box_1_animated',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'			=> 'fadeInLeft'

	) );

	#############################################################

	# FRONTPAGE BOXES SECTION 2

	#############################################################

	Kirki::add_section( 'agama_frontpage_boxes_section_2', array(

		'title'			=> __( 'Front Page Box #2', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Enable', 'agama' ),

        'tooltip'       => __( 'If disabled the front page box #2 will be hidden.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_2',

		'settings'		=> 'agama_frontpage_box_2_enable',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Title', 'agama' ),

		'tooltip'	        => __( 'Write box custom title.', 'agama' ),

		'section'		    => 'agama_frontpage_boxes_section_2',

		'settings'		    => 'agama_frontpage_box_2_title',

		'type'			    => 'text',

		'default'		    => 'Endless Possibilities',

        'partial_refresh'   => array(

            'agama_frontpage_box_2_title' => array(

                'selector'          => '.fbox-2 h2',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_2_title' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Select Icon', 'agama' ),

		'tooltip'	        => __( 'Select desired box icon.', 'agama' ),

		'section'		    => 'agama_frontpage_boxes_section_2',

		'settings'		    => 'agama_frontpage_box_2_icon',

		'type'			    => 'agip',

		'default'		    => 'fa-cogs',

        'partial_refresh'   => array(

            'agama_frontpage_box_2_icon' => array(

                'selector'          => '.fbox-2 span.fbox-icon',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_2_icon' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Icon Color', 'agama' ),

		'tooltip'	    => __( 'Select icon color.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_2',

		'settings'		=> 'agama_frontpage_box_2_icon_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '.fbox-2 i',

				'property'	=> 'color'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> '.fbox-2 i',

				'function'	=> 'css',

				'property'	=> 'color'

			)

		),

		'default'		=> '#FE6663'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Image', 'agama' ),

		'tooltip'	    => __('You can use image instead of FontAwesome icon, just upload it here.', 'agama'),

		'section'		=> 'agama_frontpage_boxes_section_2',

		'settings'		=> 'agama_frontpage_2_img',

		'type'			=> 'image'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Box Icon / Image URL', 'agama' ),

		'tooltip'	    => __( 'Add box icon / image custom url. Ex: http://google.com', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_2',

		'settings'		=> 'agama_frontpage_box_2_icon_url',

		'type'			=> 'text'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Box Text', 'agama' ),

		'tooltip'	        => __( 'Write custom text.', 'agama' ),

		'section'		    => 'agama_frontpage_boxes_section_2',

		'settings'		    => 'agama_frontpage_box_2_text',

		'type'			    => 'textarea',

		'default'		    => 'Complete control on each & every element that provides endless customization possibilities.',

        'partial_refresh'   => array(

            'agama_frontpage_box_2_text' => array(

                'selector'          => '.fbox-2 p',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_2_desc' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Box Animated', 'agama' ),

		'tooltip'	    => __( 'Enable box appear loading animation.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_2',

		'settings'		=> 'agama_frontpage_box_2_animated',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'				=> __( 'Box Animation', 'agama' ),

		'tooltip'		    => __( 'Select box appear loading animation.', 'agama' ),

		'section'			=> 'agama_frontpage_boxes_section_2',

		'settings'			=> 'agama_frontpage_box_2_animation',

		'type'				=> 'select',

		'choices'			=> AgamaAnimate::choices(),

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_frontpage_box_2_animated',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'			=> 'fadeInDown'

	) );

	#############################################################

	# FRONTPAGE BOXES SECTION 3

	#############################################################

	Kirki::add_section( 'agama_frontpage_boxes_section_3', array(

		'title'			=> __( 'Front Page Box #3', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Enable', 'agama' ),

        'tooltip'       => __( 'If disabled the front page box #3 will be hidden.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_3',

		'settings'		=> 'agama_frontpage_box_3_enable',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title', 'agama' ),

		'tooltip'	    => __( 'Write box custom title.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_3',

		'settings'		=> 'agama_frontpage_box_3_title',

		'type'			=> 'text',

		'default'		=> 'Boxed & Wide Layouts',

        'partial_refresh'   => array(

            'agama_frontpage_box_3_title' => array(

                'selector'          => '.fbox-3 h2',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_3_title' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Select Icon', 'agama' ),

		'tooltip'	    => __( 'Select desired box icon.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_3',

		'settings'		=> 'agama_frontpage_box_3_icon',

		'type'			=> 'agip',

		'default'		=> 'fa-laptop',

        'partial_refresh'   => array(

            'agama_frontpage_box_3_icon' => array(

                'selector'          => '.fbox-3 span.fbox-icon',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_3_icon' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Icon Color', 'agama' ),

		'tooltip'	    => __( 'Select icon color.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_3',

		'settings'		=> 'agama_frontpage_box_3_icon_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '.fbox-3 i',

				'property'	=> 'color'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> '.fbox-3 i',

				'function'	=> 'css',

				'property'	=> 'color'

			)

		),

		'default'		=> '#FE6663'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Image', 'agama' ),

		'tooltip'	    => __('You can use image instead of FontAwesome icon, just upload it here.', 'agama'),

		'section'		=> 'agama_frontpage_boxes_section_3',

		'settings'		=> 'agama_frontpage_3_img',

		'type'			=> 'image'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Box Icon / Image URL', 'agama' ),

		'tooltip'	    => __( 'Add box icon / image custom url. Ex: http://google.com', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_3',

		'settings'		=> 'agama_frontpage_box_3_icon_url',

		'type'			=> 'text'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Box Text', 'agama' ),

		'tooltip'	        => __( 'Write box custom text.', 'agama' ),

		'section'		    => 'agama_frontpage_boxes_section_3',

		'settings'		    => 'agama_frontpage_box_3_text',

		'type'			    => 'textarea',

		'default'		    => 'Stretch your Website to the Full Width or make it boxed to surprise your visitors.',

        'partial_refresh'   => array(

            'agama_frontpage_box_3_text' => array(

                'selector'          => '.fbox-3 p',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_3_desc' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Box Animated', 'agama' ),

		'tooltip'	    => __( 'Enable box appear loading animation.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_3',

		'settings'		=> 'agama_frontpage_box_3_animated',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'				=> __( 'Box Animation', 'agama' ),

		'tooltip'		    => __( 'Select box appear loading animation.', 'agama' ),

		'section'			=> 'agama_frontpage_boxes_section_3',

		'settings'			=> 'agama_frontpage_box_3_animation',

		'type'				=> 'select',

		'choices'			=> AgamaAnimate::choices(),

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_frontpage_box_3_animated',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'			=> 'fadeInUp'

	) );

	#############################################################

	# FRONTPAGE BOXES SECTION 4

	#############################################################

	Kirki::add_section( 'agama_frontpage_boxes_section_4', array(

		'title'			=> __( 'Front Page Box #4', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Enable', 'agama' ),

        'tooltip'       => __( 'If disabled the front page box #4 will be hidden.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_4',

		'settings'		=> 'agama_frontpage_box_4_enable',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Title', 'agama' ),

		'tooltip'	    => __( 'Write box custom title.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_4',

		'settings'		=> 'agama_frontpage_box_4_title',

		'type'			=> 'text',

		'default'		=> 'Powerful Performance',

        'partial_refresh'   => array(

            'agama_frontpage_box_4_title' => array(

                'selector'          => '.fbox-4 h2',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_4_title' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Select Icon', 'agama' ),

		'tooltip'	    => __( 'Select desired box icon.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_4',

		'settings'		=> 'agama_frontpage_box_4_icon',

		'type'			=> 'agip',

		'default'		=> 'fa-magic',

        'partial_refresh'   => array(

            'agama_frontpage_box_4_icon' => array(

                'selector'          => '.fbox-4 span.fbox-icon',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_4_icon' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Icon Color', 'agama' ),

		'tooltip'	    => __( 'Select icon color.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_4',

		'settings'		=> 'agama_frontpage_box_4_icon_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '.fbox-4 i',

				'property'	=> 'color'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> '.fbox-4 i',

				'function'	=> 'css',

				'property'	=> 'color'

			)

		),

		'default'		=> '#FE6663'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Image', 'agama' ),

		'tooltip'	    => __('You can use image instead of FontAwesome icon, just upload it here.', 'agama'),

		'section'		=> 'agama_frontpage_boxes_section_4',

		'settings'		=> 'agama_frontpage_4_img',

		'type'			=> 'image'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Box Icon / Image URL', 'agama' ),

		'tooltip'	    => __( 'Add box icon / image custom url. Ex: http://google.com', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_4',

		'settings'		=> 'agama_frontpage_box_4_icon_url',

		'type'			=> 'text'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Box Text', 'agama' ),

		'tooltip'	        => __( 'Write box custom text.', 'agama' ),

		'section'		    => 'agama_frontpage_boxes_section_4',

		'settings'		    => 'agama_frontpage_box_4_text',

		'type'			    => 'textarea',

		'default'		    => 'Optimized code that are completely customizable and deliver unmatched fast performance.',

        'partial_refresh'   => array(

            'agama_frontpage_box_4_text' => array(

                'selector'          => '.fbox-4 p',

                'render_callback'   => array( 'Agama_Partial_Refresh', 'preview_fbox_4_desc' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Box Animated', 'agama' ),

		'tooltip'	    => __( 'Enable box appear loading animation.', 'agama' ),

		'section'		=> 'agama_frontpage_boxes_section_4',

		'settings'		=> 'agama_frontpage_box_4_animated',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'				=> __( 'Box Animation', 'agama' ),

		'tooltip'		    => __( 'Select box appear loading animation.', 'agama' ),

		'section'			=> 'agama_frontpage_boxes_section_4',

		'settings'			=> 'agama_frontpage_box_4_animation',

		'type'				=> 'select',

		'choices'			=> AgamaAnimate::choices(),

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_frontpage_box_4_animated',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'			=> 'fadeInRight'

	) );

	#############################################################

	# FRONTPAGE BOXES SECTION 5

	#############################################################

	Kirki::add_section( 'agama_frontpage_boxes_section_5', array(

		'title'			=> __( 'Front Page Box #5', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

	#############################################################

	# FRONTPAGE BOXES SECTION 6

	#############################################################

	Kirki::add_section( 'agama_frontpage_boxes_section_6', array(

		'title'			=> __( 'Front Page Box #6', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

	#############################################################

	# FRONTPAGE BOXES SECTION 7

	#############################################################

	Kirki::add_section( 'agama_frontpage_boxes_section_7', array(

		'title'			=> __( 'Front Page Box #7', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

	#############################################################

	# FRONTPAGE BOXES SECTION 8

	#############################################################

	Kirki::add_section( 'agama_frontpage_boxes_section_8', array(

		'title'			=> __( 'Front Page Box #8', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 60,

		'panel'			=> 'agama_frontpage_boxes_panel'

	) );

###################################################################################

# BLOG

###################################################################################

	Kirki::add_panel( 'agama_blog_panel', array(

		'title'			=> __( 'Blog', 'agama' ),

		'tooltip'	    => __( 'Blog panel.', 'agama' ),

		'priority'		=> 70

	) );

	########################################################

	# BLOG GENERAL SECTION

	########################################################

	Kirki::add_section( 'agama_blog_general_section', array(

		'title'			=> __( 'General', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_blog_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Layout', 'agama' ),

		'tooltip'	    => __( 'Select blog layout.', 'agama' ),

		'section'		=> 'agama_blog_general_section',

		'settings'		=> 'agama_blog_layout',

		'type'			=> 'select',

		'choices'		=> array(

			'list'			=> __( 'List Layout', 'agama' ),

			'grid'			=> __( 'Grid Layout', 'agama' ),

			'small_thumbs'	=> __( 'Small Thumbs Layout', 'agama' )

		),

		'default'		=> 'list'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Posts Animated', 'agama' ),

		'tooltip'	    => __( 'Enable posts loading animation ?', 'agama' ),

		'section'		=> 'agama_blog_general_section',

		'settings'		=> 'agama_blog_posts_load_animated',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Posts Animation', 'agama' ),

		'tooltip'	    => __( 'Select posts loading animation.', 'agama' ),

		'section'		=> 'agama_blog_general_section',

		'settings'		=> 'agama_blog_posts_load_animation',

		'type'			=> 'select',

		'choices'		=> AgamaAnimate::choices(),

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_blog_posts_load_animated',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'		=> 'bounceInUp'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'				=> __( 'Featured Image Permalink', 'agama' ),

		'tooltip'		=> __( 'Enable post featured image permalink ? If enabled the post featured images will become clickable links.', 'agama' ),

		'section'			=> 'agama_blog_general_section',

		'settings'			=> 'agama_blog_thumbnails_permalink',

		'type'				=> 'switch',

		'default'			=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Excerpt', 'agama' ),

		'tooltip'	    => __( 'Set posts lenght on blog loop page.', 'agama' ),

		'section'		=> 'agama_blog_general_section',

		'settings'		=> 'agama_blog_excerpt',

		'type'			=> 'slider',

		'choices'		=> array(

			'step'		=> '1',

			'min'		=> '0',

			'max'		=> '500'

		),

		'default'		=> '70'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Read More', 'agama' ),

		'tooltip'	    => __( 'Enable read more url on blog excerpt ?', 'agama' ),

		'section'		=> 'agama_blog_general_section',

		'settings'		=> 'agama_blog_readmore_url',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'About Author', 'agama' ),

		'tooltip'	    => __( 'Enable about author section below single post content ?', 'agama' ),

		'section'		=> 'agama_blog_general_section',

		'settings'		=> 'agama_blog_about_author',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Infinite Scroll', 'agama' ),

		'tooltip'	    => __( 'Enable infinite scroll ?', 'agama' ),

		'section'		=> 'agama_blog_general_section',

		'settings'		=> 'agama_blog_infinite_scroll',

		'type'			=> 'switch',

		'default'		=> false

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Infinite Trigger', 'agama' ),

		'tooltip'	    => __( 'Select infinite scroll trigger.', 'agama' ),

		'section'		=> 'agama_blog_general_section',

		'settings'		=> 'agama_blog_infinite_trigger',

		'type'			=> 'select',

		'choices'		=> array(

			'auto'		=> __( 'Automatic', 'agama' ),

			'button'	=> __( 'Button', 'agama' )

		),

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_blog_infinite_scroll',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'		=> 'button'

	) );

	############################################################

	# BLOG SINGLE POST SECTION

	############################################################

	Kirki::add_section( 'agama_blog_single_post_section', array(

		'title'			=> __( 'Single Post', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_blog_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Featured Image on Single Post', 'agama' ),

		'tooltip'	    => __( 'Turn on to display featured images on single blog posts.', 'agama' ),

		'section'		=> 'agama_blog_single_post_section',

		'settings'		=> 'agama_blog_single_post_thumbnail',

		'type'			=> 'switch',

		'default'		=> true

	) );

	##########################################################

	# BLOG POST META SECTION

	##########################################################

	Kirki::add_section( 'agama_blog_post_meta_section', array(

		'title'			=> __( 'Post Meta', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_blog_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Post Meta', 'agama' ),

		'tooltip'	    => __( 'Enable blog post meta.', 'agama' ),

		'section'		=> 'agama_blog_post_meta_section',

		'settings'		=> 'agama_blog_post_meta',

		'type'			=> 'switch',

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Post Meta Author', 'agama' ),

		'tooltip'	    => __( 'Enable single post author section.', 'agama' ),

		'section'		=> 'agama_blog_post_meta_section',

		'settings'		=> 'agama_blog_post_author',

		'type'			=> 'switch',

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_blog_post_meta',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Post Meta Date', 'agama' ),

		'tooltip'	    => __( 'Enable post publish date.', 'agama' ),

		'section'		=> 'agama_blog_post_meta_section',

		'settings'		=> 'agama_blog_post_date',

		'type'			=> 'switch',

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_blog_post_meta',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Post Meta Category', 'agama' ),

		'tooltip'	    => __( 'Enable post category.', 'agama' ),

		'section'		=> 'agama_blog_post_meta_section',

		'settings'		=> 'agama_blog_post_category',

		'type'			=> 'switch',

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_blog_post_meta',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'		=> true

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Post Meta Comments', 'agama' ),

		'tooltip'	    => __( 'Enable post meta comments counter.', 'agama' ),

		'section'		=> 'agama_blog_post_meta_section',

		'settings'		=> 'agama_blog_post_comments',

		'type'			=> 'switch',

		'active_callback'	=> array(

			array(

				'setting'	=> 'agama_blog_post_meta',

				'operator'	=> '==',

				'value'		=> true

			)

		),

		'default'		=> true

	) );

############################################################

# SOCIAL ICONS

############################################################

	Kirki::add_section( 'agama_social_icons_section', array(

		'title'			=> __( 'Social Icons', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 90,

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Top Nav Social Icons', 'agama' ),

		'tooltip'	        => __( 'Enable social icons in top right navigation area. Works only with header V2 & V3.', 'agama' ),

		'section'		    => 'agama_social_icons_section',

		'settings'		    => 'agama_top_nav_social',

		'type'			    => 'switch',

		'default'		    => true,

        'partial_refresh'   => array(

            'agama_top_nav_social' => array(

                'selector'        => array( '#top-social' ),

                'render_callback' => array( 'Agama_Partial_Refresh', 'preview_top_nav_social_icons' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Footer', 'agama' ),

		'tooltip'	        => __( 'Enable social icons in footer area.', 'agama' ),

		'section'		    => 'agama_social_icons_section',

		'settings'		    => 'agama_footer_social',

		'type'			    => 'switch',

		'default'		    => true,

        'partial_refresh'   => array(

            'agama_footer_social' => array(

                'selector'        => '.footer-sub-wrapper div.social',

                'render_callback' => array( 'Agama_Partial_Refresh', 'preview_footer_social_icons' )

            )

        )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'URL Target', 'agama' ),

		'tooltip'	    => __( 'If "_blank" selected the social icons url will be open in new tab.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'agama_social_url_target',

		'type'			=> 'select',

		'choices'		=> array(

			'_self'		=> '_self',

			'_blank'	=> '_blank'

		),

		'default'		=> '_self'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Facebook URL', 'agama' ),

		'tooltip'	    => __( 'Set your facebook page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_facebook',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Twitter URL', 'agama' ),

		'tooltip'	    => __( 'Set your twitter page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_twitter',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Flickr URL', 'agama' ),

		'tooltip'	    => __( 'Set your flickr page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_flickr',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'RSS URL', 'agama' ),

		'tooltip'	    => __( 'Set your rss page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_rss',

		'type'			=> 'text',

		'default'		=> esc_url_raw( get_bloginfo('rss2_url') )

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Vimeo URL', 'agama' ),

		'tooltip'	    => __( 'Set your vimeo page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_vimeo',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Youtube URL', 'agama' ),

		'tooltip'	    => __( 'Set your youtube page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_youtube',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Instagram URL', 'agama' ),

		'tooltip'	    => __( 'Set your instagram page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_instagram',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Pinterest URL', 'agama' ),

		'tooltip'	    => __( 'Set your pinterest page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_pinterest',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Tumblr URL', 'agama' ),

		'tooltip'	    => __( 'Set your tumblr page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_tumblr',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Google+ URL', 'agama' ),

		'tooltip'	    => __( 'Set your google+ page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_google',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Dribbble URL', 'agama' ),

		'tooltip'	    => __( 'Set your dribbble page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_dribbble',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Digg URL', 'agama' ),

		'tooltip'	    => __( 'Set your digg page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_digg',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'LinkedIn URL', 'agama' ),

		'tooltip'	    => __( 'Set your linkedin page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_linkedin',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Blogger URL', 'agama' ),

		'tooltip'	    => __( 'Set your blogger page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_blogger',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Skype URL', 'agama' ),

		'tooltip'	    => __( 'Set your skype page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_skype',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'MySpace URL', 'agama' ),

		'tooltip'	    => __( 'Set your myspace page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_myspace',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Deviantart URL', 'agama' ),

		'tooltip'	    => __( 'Set your deviantart page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_deviantart',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Yahoo URL', 'agama' ),

		'tooltip'	    => __( 'Set your yahoo page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_yahoo',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Reddit URL', 'agama' ),

		'tooltip'	    => __( 'Set your reddit page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_reddit',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'PayPal URL', 'agama' ),

		'tooltip'	    => __( 'Set your paypal page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_paypal',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Dropbox URL', 'agama' ),

		'tooltip'	    => __( 'Set your dropbox page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_dropbox',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'SoundCloud URL', 'agama' ),

		'tooltip'	    => __( 'Set your soundcloud page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_soundcloud',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'VK URL', 'agama' ),

		'tooltip'	    => __( 'Set your vk page url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_vk',

		'type'			=> 'text',

		'default'		=> ''

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'E-mail URL', 'agama' ),

		'tooltip'	    => __( 'Set your e-mail contact url.', 'agama' ),

		'section'		=> 'agama_social_icons_section',

		'settings'		=> 'social_email',

		'type'			=> 'text',

		'default'		=> ''

	) );

###################################################################################

# FOOTER

###################################################################################

    Kirki::add_panel( 'agama_footer_panel', array(

        'title'         => __( 'Footer', 'agama' ),

        'priority'      => 110

    ) );

	Kirki::add_section( 'agama_footer_general_section', array(

		'title'			=> __( 'General', 'agama' ),

		'capability'	=> 'edit_theme_options',

        'panel'         => 'agama_footer_panel'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			    => __( 'Copyright', 'agama' ),

		'tooltip'	        => __( 'Add custom copyright text in footer area.', 'agama' ),

		'section'		    => 'agama_footer_general_section',

		'settings'		    => 'agama_footer_copyright',

		'type'			    => 'code',

		'choices'		    => array(

			'language'	    => 'html'

		),

		'default'		    => '',

        'partial_refresh'   => array(

            'agama_footer_copyright' => array(

                'selector'        => '.footer-sub-wrapper div.site-info',

                'render_callback' => array( 'Agama_Partial_Refresh', 'preview_footer_copyright' )

            )

        )

	) );

    ##########################################################

    #   FOOTER STYLING SECTION

    ##########################################################

    Kirki::add_section( 'agama_footer_styling_section', array(

        'title'         => __( 'Styling', 'agama' ),

        'capability'    => 'edit_theme_options',

        'panel'         => 'agama_footer_panel'

    ) );

    Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Widget Area BG Color', 'agama' ),

		'tooltip'	    => __( 'Set footer widget area background color.', 'agama' ),

		'section'		=> 'agama_footer_styling_section',

		'settings'		=> 'agama_footer_widget_bg_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> '.footer-widgets',

				'property'	=> 'background-color'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> '.footer-widgets',

				'function'	=> 'css',

				'property'	=> 'background-color'

			)

		),

		'default'		=> '#314150'

	) );

	Kirki::add_field( 'agama_options', array(

		'label'			=> __( 'Footer Area BG Color', 'agama' ),

		'tooltip'	    => __( 'Set footer area background color.', 'agama' ),

		'section'		=> 'agama_footer_styling_section',

		'settings'		=> 'agama_footer_bottom_bg_color',

		'type'			=> 'color',

		'output'		=> array(

			array(

				'element'	=> 'footer[role="contentinfo"]',

				'property'	=> 'background-color'

			)

		),

		'transport'		=> 'postMessage',

		'js_vars'		=> array(

			array(

				'element'	=> 'footer[role="contentinfo"]',

				'function'	=> 'css',

				'property'	=> 'background-color'

			)

		),

		'default'		=> '#293744'

	) );

###################################################################################

# AGAMA SUPPORT

###################################################################################

	Kirki::add_section( 'agama_support_section', array(

		'title'			=> __( 'Agama Support', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'priority'		=> 130

	) );

###################################################################################

# PRO FEATURES

###################################################################################

	Kirki::add_panel( 'agama_pro_panel', array(

		'title'			=> __( 'Agama PRO Features', 'agama' ),

		'priority'		=> 140

	) );

	Kirki::add_section( 'agama_headings_section', array(

		'title'			=> __( 'Headings', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

	Kirki::add_section( 'agama_share_icons_section', array(

		'title'			=> __( 'Social Share', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

	Kirki::add_section( 'agama_typography_section', array(

		'title'			=> __( 'Typography', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

	Kirki::add_section( 'agama_lightbox_section', array(

		'title'			=> __( 'Lightbox', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

	Kirki::add_section( 'agama_pages_section', array(

		'title'			=> __( 'Pages', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

	Kirki::add_section( 'agama_portfolio_section', array(

		'title'			=> __( 'Portfolio', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

	Kirki::add_section( 'agama_preloader_section', array(

		'title'			=> __( 'Pre-Loader', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

	Kirki::add_section( 'agama_woocommerce_section', array(

		'title'			=> __( 'WooCommerce', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

	Kirki::add_section( 'agama_contact_section', array(

		'title'			=> __( 'Contact', 'agama' ),

		'capability'	=> 'edit_theme_options',

		'panel'			=> 'agama_pro_panel'

	) );

###################################################################################

# Re-order WordPress Options

###################################################################################

	Kirki::add_panel( 'nav_menus', array(

		'title'			=> __( 'Menus', 'agama' ),

		'priority'		=> 210

	) );

	Kirki::add_panel( 'widgets', array(

		'title'			=> __( 'Widgets', 'agama' ),

		'priority'		=> 240

	) );



/**

 * Enqueue Javascript postMessage handlers for the Customizer.

 *

 * Binds JS handlers to make the Customizer preview reload changes asynchronously.

 *

 * @since Agama 1.0

 */

function agama_customize_preview_js() {

	wp_register_script( 'agama-customizer', get_template_directory_uri() . '/assets/js/customize-preview.js', array( 'customize-preview' ), uniqid(), true );

	$localize = array(

		'skin_url' 			=> esc_url( get_stylesheet_directory_uri() . '/assets/css/skins/' ),

		'top_nav_enable'	=> esc_attr( get_theme_mod( 'agama_top_navigation', true ) )

	);

	wp_localize_script( 'agama-customizer', 'agama', $localize );

	wp_enqueue_script( 'agama-customizer' );

    

    wp_register_style( 'agama-partial-refresh', get_template_directory_uri() . '/assets/css/partial-refresh.css', array(), uniqid() );

    wp_enqueue_style( 'agama-partial-refresh' );

}

add_action( 'customize_preview_init', 'agama_customize_preview_js' );



/**

 * Generating Dynamic CSS

 *

 * @since Agama 1.0

 */

function agama_customize_css() { ?>

	<style type="text/css" id="agama-customize-css">

	#masthead .logo {

		max-height: <?php echo esc_attr( get_theme_mod( 'agama_logo_max_height', '90' ) ); ?>px;

	}

	#masthead .sticky-header-shrink .logo {

		max-height: 65px !important;

	}

    

    <?php $mobile_nav = get_theme_mod( 'agama_mobile_navigation_font', array( 'color' => '#757575' ) ); ?>

    #vision-mobile-nav ul > li.menu-item-has-children > .dropdown-toggle,

    #vision-mobile-nav ul > li.menu-item-has-children > .dropdown-toggle.collapsed {

        color: <?php echo $mobile_nav['color']; ?>;

    }

	

	<?php if( get_theme_mod( 'agama_slider_enable', true ) ): ?>

	/* SLIDER

	 *********************************************************************************/

	#agama_slider .slide-content.slide-1 {

		top: <?php echo esc_attr( get_theme_mod( 'agama_slider_content_top_1', '40' ) ); ?>%;

	}

	#agama_slider .slide-content.slide-2 {

		top: <?php echo esc_attr( get_theme_mod( 'agama_slider_content_top_2', '40' ) ); ?>%;

	}

	#agama_slider .slide-content.slide-1 a.button-3d:hover {

		background-color: <?php echo esc_attr( get_theme_mod( 'agama_slider_button_bg_color_1', '#FE6663' ) ); ?> !important;

	}

	#agama_slider .slide-content.slide-2 a.button-3d:hover {

		background-color: <?php echo esc_attr( get_theme_mod( 'agama_slider_button_bg_color_2', '#FE6663' ) ); ?> !important;

	}

	<?php endif; ?>

	

	<?php 

	if( 

		! get_theme_mod( 'agama_blog_post_meta', true ) && get_theme_mod( 'agama_blog_layout', 'list' ) == 'list' || 

		! get_theme_mod( 'agama_blog_post_date', true ) && get_theme_mod( 'agama_blog_layout', 'list' ) == 'list'

	): ?>

	.list-style .entry-content { margin-left: 0 !important; }

	<?php endif; ?>

	

	.sm-form-control:focus {

		border: 2px solid <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?> !important;

	}

	

	.entry-content .more-link {

		border-bottom: 1px solid <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

		color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	

	.comment-content .comment-author cite {

		background-color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

		border: 1px solid <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	

	#respond #submit {

		background-color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	

	<?php if( is_rtl() ): ?>

	blockquote {

		border-right: 3px solid <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	<?php else: ?>

	blockquote {

		border-left: 3px solid <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	<?php endif; ?>

	

	<?php if( get_theme_mod( 'agama_layout_style', 'fullwidth' ) == 'fullwidth' ): ?>

	#main-wrapper { max-width: 100%; }

	<?php else: ?>

	#main-wrapper { max-width: 1200px; }

	header .sticky-header { max-width: 1200px; }

	<?php endif; ?>

	

	<?php if( get_theme_mod( 'agama_header_style', 'transparent' ) == 'transparent' ): ?>

	/* HEADER V1

	 *********************************************************************************/

	.header_v1 .sticky-header { position: fixed; box-shadow: none; -webkit-box-shadow: none; border-bottom: 2px solid rgba(255,255,255, .1); }

	.header_v1.shrinked .sticky-header { border-bottom: 0 none; }

	<?php endif; ?>

	

	#page-title { background-color: <?php echo esc_attr( get_theme_mod( 'agama_breadcrumb_bg_color', '#F5F5F5' ) ); ?>; }

	#page-title h1, .breadcrumb > .active { color: <?php echo esc_attr( get_theme_mod( 'agama_breadcrumb_text_color', '#444' ) ); ?>; }

	#page-title a { color: <?php echo esc_attr( get_theme_mod( 'agama_breadcrumb_links_color', '#444' ) ); ?>; }

	#page-title a:hover { color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>; }

	

	.breadcrumb a:hover { color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>; }

	

	<?php if( get_theme_mod('agama_blog_infinite_scroll', false) && get_theme_mod('agama_blog_layout', 'list') == 'grid' ): ?>

	#infscr-loading {

		position: absolute;

		bottom: 0;

		left: 25%;

	}

	<?php endif; ?>

	

	button,

	.button,

	.entry-date .date-box {

		background-color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	

	.button-3d:hover {

		background-color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?> !important;

	}

	

	.entry-date .format-box i {

		color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	

	.vision_tabs #tabs li.active a {

		border-top: 3px solid <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	

	#toTop:hover {

		background-color: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	

	.footer-widgets .widget-title:after {

		background: <?php echo esc_attr( get_theme_mod( 'agama_primary_color', '#FE6663' ) ); ?>;

	}

	</style>

	<?php

}

add_action( 'wp_head', 'agama_customize_css' );



/**

 * Styling Agama Support Section

 *

 * @since 1.0.7

 */

function customize_styles_agama_support( $input ) { ?>

	<style type="text/css">

		a:-webkit-any-link {

			text-decoration: none;

		}

        .accordion-section.control-section.control-panel.control-panel-default h3:before,

        .accordion-section.control-section.control-section-kirki-default h3:before {

            font-family: FontAwesome;

        }

        #accordion-panel-agama_site_identity_panel h3:before {

            content: '\f2ba';

        }

        #accordion-panel-agama_general_panel h3:before {

            content: '\f085';

        }

        #accordion-panel-agama_layout_panel h3:before {

            content: '\f0db';

        }

        #accordion-panel-agama_header_panel h3:before {

            content: '\f1dc';

        }

        #accordion-panel-agama_nav_panel h3:before {

            content: '\f0c9';

        }

        #accordion-panel-agama_slider_panel h3:before {

            content: '\f1de';

        }

        #accordion-section-agama_breadcrumb_section h3:before {

            content: '\f09d';

        }

        #accordion-panel-agama_frontpage_boxes_panel h3:before {

            content: '\f009';

        }

        #accordion-panel-agama_blog_panel h3:before {

            content: '\f1ad';

        }

        #accordion-panel-agama_styling_panel h3:before {

            content: '\f1fc';

        }

        #accordion-section-agama_social_icons_section h3:before {

            content: '\f230';

        }

        #accordion-panel-agama_footer_panel h3:before {

            content: '\f2d1';

        }

        #accordion-section-agama_support_section h3:before {

            content: '\f1cd';

        }

        #accordion-panel-agama_pro_panel h3:before {

            content: '\f005';

        }

        #accordion-panel-nav_menus h3:before {

            content: '\f0c9';

        }

        #accordion-panel-widgets h3:before {

            content: '\f0ca';

        }

		#customize-theme-controls #accordion-panel-agama_pro_panel .accordion-section-title:after {

			color: #fff;

		}

		#customize-theme-controls #accordion-panel-agama_pro_panel .accordion-section-title {

			background-color: rgba(254, 103, 100, 0.9);

			color: #fff;

		}

		#customize-theme-controls #accordion-panel-agama_pro_panel .accordion-section-title:hover {

			background-color: rgba(254, 103, 100, 1);

		}

		#customize-theme-controls #accordion-section-agama_support_section .theme-info a {

			padding: 10px 8px;

			display: block;

			border-bottom: 1px solid #eee;

			color: #555;

		}

		#customize-theme-controls #accordion-section-agama_support_section .theme-info a:hover {

			color: #222;

			background-color: #f5f5f5;

		}

		.theme-headers label > input[type="radio"] {

		  display:none;

		}

		.theme-headers label > input[type="radio"] + img{

		  cursor:pointer;

		  border:2px solid transparent;

		}

		.theme-headers label > input[type="radio"]:checked + img{

		  border:2px solid #f00;

		}

		#accordion-section-agama_typography_section .accordion-section-content,

		#accordion-section-agama_share_icons_section .accordion-section-content,

		#accordion-section-agama_woocommerce_section .accordion-section-content,

		#accordion-section-agama_lightbox_section .accordion-section-content,

		#accordion-section-agama_body_background_animated_section .accordion-section-content,

		#accordion-section-agama_contact_section .accordion-section-content {

			background-color: #FE6663;

			color: #fff;

		}

		#accordion-section-agama_typography_section .accordion-section-content a,

		#accordion-section-agama_share_icons_section .accordion-section-content a,

		#accordion-section-agama_woocommerce_section .accordion-section-content a,

		#accordion-section-agama_lightbox_section .accordion-section-content a,

		#accordion-section-agama_body_background_animated_section .accordion-section-content a,

		#accordion-section-agama_contact_section .accordion-section-content a {

			color: #000;

		}

		#accordion-section-agama_typography_section .accordion-section-content a:hover,

		#accordion-section-agama_share_icons_section .accordion-section-content a:hover,

		#accordion-section-agama_woocommerce_section .accordion-section-content a:hover,

		#accordion-section-agama_lightbox_section .accordion-section-content a:hover,

		#accordion-section-agama_body_background_animated_section .accordion-section-content a:hover,

		#accordion-section-agama_contact_section .accordion-section-content a:hover {

			color: #fff;

		}

		#sub-accordion-panel-agama_slider_panel li#accordion-section-agama_slide_5_section h3:before,

		#sub-accordion-panel-agama_slider_panel li#accordion-section-agama_slide_6_section h3:before,

		#sub-accordion-panel-agama_slider_panel li#accordion-section-agama_slide_7_section h3:before,

		#sub-accordion-panel-agama_slider_panel li#accordion-section-agama_slide_8_section h3:before,

		#sub-accordion-panel-agama_slider_panel li#accordion-section-agama_slide_9_section h3:before,

		#sub-accordion-panel-agama_slider_panel li#accordion-section-agama_slide_10_section h3:before,

		#sub-accordion-panel-agama_frontpage_boxes_panel li#accordion-section-agama_frontpage_boxes_section_5 h3:before,

		#sub-accordion-panel-agama_frontpage_boxes_panel li#accordion-section-agama_frontpage_boxes_section_6 h3:before,

		#sub-accordion-panel-agama_frontpage_boxes_panel li#accordion-section-agama_frontpage_boxes_section_7 h3:before,

		#sub-accordion-panel-agama_frontpage_boxes_panel li#accordion-section-agama_frontpage_boxes_section_8 h3:before,

		#sub-accordion-panel-agama_pro_panel li.accordion-section h3:before {

			font-size: 11px;

			content: "premium";

			float: right;

			right: 20px;

			position: relative;

			color: #FE6663;

		}

		.agama-customize-heading h3 {

			border: 1px dashed #4A73AA;

			font-weight: 600;

			text-align: center;

			color: #4A73AA;

		}

		/* Override WordPress Customizer Defaults */

		#customize-controls .customize-info .customize-help-toggle:focus, 

		#customize-controls .customize-info .customize-help-toggle:hover, 

		#customize-controls .customize-info.open .customize-help-toggle {

			color: #FE6663;

		}

		#available-menu-items .item-add:focus:before, 

		#customize-controls .customize-info .customize-help-toggle:focus:before, 

		.customize-screen-options-toggle:focus:before, .menu-delete:focus, 

		.menu-item-bar .item-delete:focus:before, 

		.wp-customizer .menu-item .submitbox .submitdelete:focus, 

		.wp-customizer button:focus .toggle-indicator:after {

			-webkit-box-shadow: 0 0 0 1px #FE6663, 0 0 2px 1px <?php echo Agama_Helper::hex2rgba( '#FE6663', 0.8 ); ?>;

			box-shadow: 0 0 0 1px #FE6663, 0 0 2px 1px <?php echo Agama_Helper::hex2rgba( '#FE6663', 0.8 ); ?>;

		}

		#customize-controls .control-section .accordion-section-title:focus, 

		#customize-controls .control-section .accordion-section-title:hover, 

		#customize-controls .control-section.open .accordion-section-title, 

		#customize-controls .control-section:hover>.accordion-section-title {

			border-left-color: #FE6663;

			color: #FE6663;

		}

		.customize-panel-back:focus, 

		.customize-panel-back:hover, 

		.customize-section-back:focus, 

		.customize-section-back:hover {

			border-left-color: #FE6663;

			color: #FE6663;

		}

		#customize-theme-controls .control-section .accordion-section-title:focus:after, 

		#customize-theme-controls .control-section .accordion-section-title:hover:after, 

		#customize-theme-controls .control-section.open .accordion-section-title:after, 

		#customize-theme-controls .control-section:hover>.accordion-section-title:after {

			color: #FE6663;

		}

		.customize-controls-close:focus, 

		.customize-controls-close:hover, 

		.customize-controls-preview-toggle:focus, 

		.customize-controls-preview-toggle:hover {

			border-top-color: #FE6663;

			color: #FE6663;

		}

		/* Override Kirki Default Colors */

		.kirki-reset-section:hover, 

		.kirki-reset-section:active {

			background: #FE6663 !important;

		}

		/* Theme Info */

		ul.theme-info li {

			background: #dedede;

			padding: 5px 10px;

			margin-bottom: 1px;

		}

		ul.theme-info li:hover {

			background: #eee;

		}

		ul.theme-info li a {

			font-weight: 500;

			color: #555d66;

		}

        .dd-options li {

            margin-bottom: 0;

        }

	</style>

<?php }

add_action( 'customize_controls_print_styles', 'customize_styles_agama_support');
