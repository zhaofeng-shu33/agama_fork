
<?php



// Do not allow direct access to the file.

if( ! defined( 'ABSPATH' ) ) {

    exit;

}



class Agama_Partial_Refresh {

    

    /**

     * Top Navigation Enable / Disable

     *

     * @since 1.3.1

     */

    function preview_top_navigation() {

        if( get_theme_mod( 'agama_top_navigation', true ) ) {

            return Agama::menu( 'top', 'top-nav-menu' );

        }

    }

    

    /**

     * Top Navigation Social Icons Enable / Disable

     *

     * @since 1.3.1

     */

    function preview_top_nav_social_icons() {

        if( get_theme_mod( 'agama_top_nav_social', true ) ) {

            Agama::sociali( false, 'animated' );

        }

    }

    

    /**

     * Logo

     *

     * @since 1.3.1

     */

    function preview_logo() {

        if( get_theme_mod( 'agama_logo' ) ) {

            $output = '<a href="'. esc_url( home_url('/') ) .'" title="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'">';

                $output .= '<img src="'. esc_url( get_theme_mod( 'agama_logo', '' ) ) .'" class="logo">';

            $output .= '</a>';

        } else {

            $output = '<h1 class="site-title"><a href="'. esc_url( home_url('/') ) .'">'. get_bloginfo( 'name' ) .'</a></h1>';

        }

        return $output;

    }

    

    /**

     * Slider 1 Title

     *

     * @since 1.3.1

     */

    function preview_slide_1_title() {

        return esc_html( get_theme_mod( 'agama_slider_title_1', __( 'Welcome to Agama', 'agama' ) ) );

    }



    /**

     * Slider 1 Button

     *

     * @since 1.3.1

     */

    function preview_slide_1_button() {

        return esc_html( get_theme_mod( 'agama_slider_button_title_1', __( 'Learn More', 'agama' ) ) );

    }

    

    /**

     * Slider 2 Title

     *

     * @since 1.3.1

     */

    function preview_slide_2_title() {

        return esc_html( get_theme_mod( 'agama_slider_title_2', __( 'Welcome to Agama', 'agama' ) ) );

    }



    /**

     * Slider 2 Button

     *

     * @since 1.3.1

     */

    function preview_slide_2_button() {

        return esc_html( get_theme_mod( 'agama_slider_button_title_2', __( 'Learn More', 'agama' ) ) );

    }


    /**

     * Slider 3 Title

     *

     * @since 1.3.1

     */

    function preview_slide_3_title() {

        return esc_html( get_theme_mod( 'agama_slider_title_3', __( 'Welcome to Agama', 'agama' ) ) );

    }



    /**

     * Slider 3 Button

     *

     * @since 1.3.1

     */

    function preview_slide_3_button() {

        return esc_html( get_theme_mod( 'agama_slider_button_title_3', __( 'Learn More', 'agama' ) ) );

    }

    /**

     * Slider 4 Title

     *

     * @since 1.3.1

     */

    function preview_slide_4_title() {

        return esc_html( get_theme_mod( 'agama_slider_title_4', __( 'Welcome to Agama', 'agama' ) ) );

    }



    /**

     * Slider 4 Button

     *

     * @since 1.3.1

     */

    function preview_slide_4_button() {

        return esc_html( get_theme_mod( 'agama_slider_button_title_4', __( 'Learn More', 'agama' ) ) );

    }    

    /**

     * Front Page Box 1 Icon

     *

     * @since 1.3.1

     */

    public static function preview_fbox_1_icon() {

        $class = esc_attr( get_theme_mod( 'agama_frontpage_box_1_icon', 'fa-tablet' ) );

        return '<i class="fa '. $class .'"></i>';

    }

    

    /**

     * Front Page Box 1 Title

     *

     * @since 1.3.1

     */

    function preview_fbox_1_title() {

        $title = esc_html( get_theme_mod( 'agama_frontpage_box_1_title', __( 'Responsive Layout', 'agama' ) ) );

        return $title;

    }

    

    /**

     * Front Page Box 1 Description

     *

     * @since 1.3.1

     */

    function preview_fbox_1_desc() {

        $desc = esc_html( get_theme_mod( 'agama_frontpage_box_1_text', __( 'Powerful Layout with Responsive functionality that can be adapted to any screen size.', 'agama' ) ) );

        return $desc;

    }

    

    /**

     * Front Page Box 2 Icon

     *

     * @since 1.3.1

     */

    public static function preview_fbox_2_icon() {

        $class = esc_attr( get_theme_mod( 'agama_frontpage_box_2_icon', 'fa-cogs' ) );

        return '<i class="fa '. $class .'"></i>';

    }

    

    /**

     * Front Page Box 2 Title

     *

     * @since 1.3.1

     */

    function preview_fbox_2_title() {

        $title = esc_html( get_theme_mod( 'agama_frontpage_box_2_title', __( 'Endless Possibilities', 'agama' ) ) );

        return $title;

    }

    

    /**

     * Front Page Box 2 Description

     *

     * @since 1.3.1

     */

    function preview_fbox_2_desc() {

        $desc = esc_html( get_theme_mod( 'agama_frontpage_box_2_text', __( 'Complete control on each & every element that provides endless customization possibilities.', 'agama' ) ) );

        return $desc;

    }

    

    /**

     * Front Page Box 3 Icon

     *

     * @since 1.3.1

     */

    public static function preview_fbox_3_icon() {

        $class = esc_attr( get_theme_mod( 'agama_frontpage_box_3_icon', 'fa-laptop' ) );

        return '<i class="fa '. $class .'"></i>';

    }

    

    /**

     * Front Page Box 3 Title

     *

     * @since 1.3.1

     */

    function preview_fbox_3_title() {

        $title = esc_html( get_theme_mod( 'agama_frontpage_box_3_title', __( 'Boxed & Wide Layouts', 'agama' ) ) );

        return $title;

    }

    

    /**

     * Front Page Box 2 Description

     *

     * @since 1.3.1

     */

    function preview_fbox_3_desc() {

        $desc = esc_html( get_theme_mod( 'agama_frontpage_box_3_text', __( 'Stretch your Website to the Full Width or make it boxed to surprise your visitors.', 'agama' ) ) );

        return $desc;

    }

    

    /**

     * Front Page Box 3 Icon

     *

     * @since 1.3.1

     */

    public static function preview_fbox_4_icon() {

        $class = esc_attr( get_theme_mod( 'agama_frontpage_box_4_icon', 'fa-magic' ) );

        return '<i class="fa '. $class .'"></i>';

    }

    

    /**

     * Front Page Box 3 Title

     *

     * @since 1.3.1

     */

    function preview_fbox_4_title() {

        $title = esc_html( get_theme_mod( 'agama_frontpage_box_4_title', __( 'Powerful Performance', 'agama' ) ) );

        return $title;

    }

    

    /**

     * Front Page Box 2 Description

     *

     * @since 1.3.1

     */

    function preview_fbox_4_desc() {

        $desc = esc_html( get_theme_mod( 'agama_frontpage_box_4_text', __( 'Optimized code that are completely customizable and deliver unmatched fast performance.', 'agama' ) ) );

        return $desc;

    }

    

    /**

     * Enable Footer Social Icons

     *

     * @since 1.3.1

     */

    function preview_footer_social_icons() {

        if( get_theme_mod( 'agama_footer_social', true ) ) {

            Agama::sociali('top');

        }

    }

    

    /**

     * Footer Copyright Text

     *

     * @since 1.3.1

     */

    function preview_footer_copyright() {

        do_action('agama_credits');

    }

}
