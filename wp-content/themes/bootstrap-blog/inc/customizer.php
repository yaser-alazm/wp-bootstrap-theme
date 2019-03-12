<?php
    function wbp_customize_register($wp_customize) {
        // Inlcude the Alpha Color Picker control file.
        require_once( dirname( __FILE__ ) . '/alpha-color-picker/alpha-color-picker.php' );

        // General settings
        $wp_customize->add_section('general_settings',array(
            'title' => __('General Settings','bootstrap-blog'),
            'description'   =>  __('General Theme Settings'),
            'priority'      => 120
        ));

        // Enable or Disable heading section (!!TRICKY!!)
        $wp_customize->add_setting('enable_lato_font', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'enable_lato_font', array(
            'label'      => __( 'Enable Lato Font For The Home Page', 'wp-bootstrap' ),
            'section'    => 'general_settings',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // Main theme color
        $wp_customize->add_setting('main_color', array(
            'default'       => '#007bff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'main_color_control', array(
            'label'     => __('Main Theme Color', 'bootstrap-blog'),
            'section'   => 'general_settings',
            'settings'  => 'main_color',
            'priority'  => 2
        )));

        // Blog Featured Post background color
        $wp_customize->add_setting('blog_fp_bg_color', array(
            'default'       => '#343a40',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'blog_fp_bg_color_control', array(
            'label'     => __('Blog Featured Post Background Color', 'bootstrap-blog'),
            'section'   => 'general_settings',
            'settings'  => 'blog_fp_bg_color',
            'priority'  => 3
        )));

        // Blog Featured Post Font color
        $wp_customize->add_setting('blog_fp_font_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'blog_fp_font_color_control', array(
            'label'     => __('Blog Featured Post Font Color', 'bootstrap-blog'),
            'section'   => 'general_settings',
            'settings'  => 'blog_fp_font_color',
            'priority'  => 4
        )));

        ///////////////////////////////////////////////////////////
        // Heading section
        $wp_customize->add_section('heading_section',array(
            'title' => __('Header Section','bootstrap-blog'),
            'description'   =>  __('Options for the header section'),
            'priority'      => 130
        ));

        // Enable or Disable heading section (!!TRICKY!!)
        $wp_customize->add_setting('heading_enable_settings', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'heading_enable_settings', array(
            'label'      => __( 'Enable Heading Section', 'wp-bootstrap' ),
            'section'    => 'heading_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // Heading background image
        $wp_customize->add_setting('heading_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/bg-head.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'heading_image_control', array(
            'label'     => __('Heading Background', 'bootstrap-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_image_settings',
            'priority'  => 2
        )));

        // Heading background color
        $wp_customize->add_setting('heading_bg_color', array(
            'default'       => 'rgba(80,122,114,0.38)',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'heading_orverlay_color_control', array(
            'label'     => __('Heading Background Color', 'bootstrap-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_bg_color',
            'priority'  => 3
        )));

        // Heading title text
        $wp_customize->add_setting('heading_title_settings', array(
            'default'   => _x('Heading Title', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('heading_title_control', array(
            'label'     => __('Heading Title', 'bootstrap-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_title_settings',
            'priority'  => 4
        ));


        // Heading description text
        $wp_customize->add_setting('heading_description_settings', array(
            'default'   => _x('Build a landing page for your business or project and generate more leads!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('heading_description_control', array(
            'label'     => __('Heading Description', 'bootstrap-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_description_settings',
            'priority'  => 5
        ));

        // Heading font color
        $wp_customize->add_setting('heading_font_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'heading_font_color_control', array(
            'label'     => __('Heading Background Color', 'bootstrap-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_font_color',
            'priority'  => 6
        )));

        // Enable or Disable heading button
        $wp_customize->add_setting('heading_btn_enable_settings', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'heading_btn_enable_settings', array(
            'label'      => __( 'Enable Heading Button', 'wp-bootstrap' ),
            'section'    => 'heading_section',
            'type'       => 'checkbox',
            'priority'   => 7
        ));

        // Heading button text
        $wp_customize->add_setting('heading_button_text_settings', array(
            'default'   => _x('See More', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('heading_button_text_control', array(
            'label'     => __('Button Text', 'bootstrap-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_button_text_settings',
            'priority'  => 8
        ));

        // Heading button link
        $wp_customize->add_setting('heading_button_link_settings', array(
            'default'   => _x('http://yaser-alazm.com', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('heading_button_link_control', array(
            'label'     => __('Button Link Address', 'bootstrap-blog'),
            'section'   => 'heading_section',
            'settings'  => 'heading_button_link_settings',
            'priority'  => 9
        ));

        /////////////////////**************///////////////////////

        // Features section
        $wp_customize->add_section('features_section',array(
            'title' => __('Features Section','bootstrap-blog'),
            'description'   =>  __('Options for the features section'),
            'priority'      => 140
        ));

        // Enable or Disable features section (!!TRICKY!!)
        $wp_customize->add_setting('features_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'features_enable', array(
            'label'      => __( 'Enable Features Section', 'wp-bootstrap' ),
            'section'    => 'features_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // Feature 1 title text
        $wp_customize->add_setting('feature1_title', array(
            'default'   => _x('Fully Responsive', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('feature1_title_control', array(
            'label'     => __('Feature 1 Title', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'feature1_title',
            'priority'  => 2
        ));


        // Feature 1 description text
        $wp_customize->add_setting('feature1_description', array(
            'default'   => _x('This theme will look great on any device, no matter the size!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('feature1_description_control', array(
            'label'     => __('Feature 1 Description', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'feature1_description',
            'priority'  => 3
        ));

        // Feature 1 icon
        $wp_customize->add_setting( 'feature1_icon', array(
            'default' => 'fa-facebook',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'feature1_icon_control', array(
            'label' => __('Feature 1 Icon', 'bootstrap-blog'),
            'description' => __('Choose an icon for the feature 1', 'bootstrap-blog'),
            'iconset' => 'fa',
            'section' => 'features_section',
            'priority' => 4,
            'settings' => 'feature1_icon'
        )));

        // Feature 2 title text
        $wp_customize->add_setting('feature2_title', array(
            'default'   => _x('Bootstrap 4 Ready', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('feature2_title_control', array(
            'label'     => __('Feature 2 Title', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'feature2_title',
            'priority'  => 5
        ));


        // Feature 2 description text
        $wp_customize->add_setting('feature2_description', array(
            'default'   => _x('Featuring the latest build of the new Bootstrap 4 framework!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('feature2_description_control', array(
            'label'     => __('Feature 2 Description', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'feature2_description',
            'priority'  => 6
        ));

        // Feature 2 icon
        $wp_customize->add_setting( 'feature2_icon', array(
            'default' => 'fa-code',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'feature2_icon_control', array(
            'label' => __('Feature 2 Icon', 'bootstrap-blog'),
            'description' => __('Choose an icon for the feature 2', 'bootstrap-blog'),
            'iconset' => 'fa',
            'section' => 'features_section',
            'priority' => 7,
            'settings' => 'feature2_icon'
        )));

        // Feature 3 title text
        $wp_customize->add_setting('feature3_title', array(
            'default'   => _x('Easy to Use', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('feature3_title_control', array(
            'label'     => __('Feature 3 Title', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'feature3_title',
            'priority'  => 8
        ));


        // Feature 3 description text
        $wp_customize->add_setting('feature3_description', array(
            'default'   => _x('Ready to use with your own content, or customize the source files!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('feature3_description_control', array(
            'label'     => __('Feature 3 Description', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'feature3_description',
            'priority'  => 9
        ));

        // Feature 3 icon
        $wp_customize->add_setting( 'feature3_icon', array(
            'default' => 'fa-check-circle-o',
            'capability' => 'edit_theme_options'
        ));

        $wp_customize->add_control(new O2_Customizer_Icon_Picker_Control($wp_customize, 'feature3_icon_control', array(
            'label' => __('Feature 3 Icon', 'bootstrap-blog'),
            'description' => __('Choose an icon for the feature 3', 'bootstrap-blog'),
            'iconset' => 'fa',
            'section' => 'features_section',
            'priority' => 10,
            'settings' => 'feature3_icon'
        )));

        // Features section background color
        $wp_customize->add_setting('features_bg_color', array(
            'default'       => '#f8f9fa',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'features_bg_color_control', array(
            'label'     => __('Features Section Background Color', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'features_bg_color',
            'priority'  => 11
        )));

        // Features section font color
        $wp_customize->add_setting('features_font_color', array(
            'default'       => '#212529',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'features_font_color_control', array(
            'label'     => __('Features Section Font Color', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'features_font_color',
            'priority'  => 12
        )));

        // Add or remove features button (!!TRICKY!!)
        $wp_customize->add_setting('features_btn_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'features_btn_enable', array(
            'label'      => __( 'Add Button', 'wp-bootstrap' ),
            'section'    => 'features_section',
            'type'       => 'checkbox',
            'priority'   => 13
        ) );

        // Features button text
        $wp_customize->add_setting('features_button_text_settings', array(
            'default'   => _x('See More', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('features_button_text_control', array(
            'label'     => __('Button Text', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'features_button_text_settings',
            'priority'  => 14
        ));

        // features button link
        $wp_customize->add_setting('features_button_link_settings', array(
            'default'   => _x('http://yaser-alazm.com', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('features_button_link_control', array(
            'label'     => __('Button Link Address', 'bootstrap-blog'),
            'section'   => 'features_section',
            'settings'  => 'features_button_link_settings',
            'priority'  => 15
        ));

        /////////////////////**************///////////////////////

        // Showcase section
        $wp_customize->add_section('showcase_section',array(
            'title' => __('Showcase Section','bootstrap-blog'),
            'description'   =>  __('Options for the showcase section'),
            'priority'      => 150
        ));

        // Enable or Disable showcase section (!!TRICKY!!)
        $wp_customize->add_setting('showcase_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'showcase_enable', array(
            'label'      => __( 'Enable Showcase Section', 'wp-bootstrap' ),
            'section'    => 'showcase_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // showcase1 title text
        $wp_customize->add_setting('showcase1_title_settings', array(
            'default'   => _x('Fully Responsive Design', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase1_title_control', array(
            'label'     => __('Showcase 1 Title', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase1_title_settings',
            'priority'  => 2
        ));


        // showcase1 description text
        $wp_customize->add_setting('showcase1_description_settings', array(
            'default'   => _x('When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether its a phone, tablet, or desktop the page will behave responsively!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase1_description_control', array(
            'label'     => __('showcase1 Description', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase1_description_settings',
            'priority'  => 3
        ));

        // Showcase1 image
        $wp_customize->add_setting('showcase1_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/bg-showcase-1.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase1_image_control', array(
            'label'     => __('Showcase 1 Image', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase1_image_settings',
            'priority'  => 4
        )));

        // Enable or Disable showcase 2 (!!TRICKY!!)
        $wp_customize->add_setting('showcase2_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'showcase2_enable', array(
            'label'      => __( 'Enable Showcase 2', 'wp-bootstrap' ),
            'section'    => 'showcase_section',
            'type'       => 'checkbox',
            'priority'   => 5
        ) );

        // showcase2 title text
        $wp_customize->add_setting('showcase2_title_settings', array(
            'default'   => _x('Updated For Bootstrap 4', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase2_title_control', array(
            'label'     => __('Showcase 2 Title', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase2_title_settings',
            'priority'  => 6
        ));


        // showcase2 description text
        $wp_customize->add_setting('showcase2_description_settings', array(
            'default'   => _x('Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase2_description_control', array(
            'label'     => __('Showcase 2 Description', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase2_description_settings',
            'priority'  => 7
        ));

        // Showcase2 image
        $wp_customize->add_setting('showcase2_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/bg-showcase-2.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase2_image_control', array(
            'label'     => __('Showcase 2 Image', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase2_image_settings',
            'priority'  => 8
        )));

        // Enable or Disable showcase 3 (!!TRICKY!!)
        $wp_customize->add_setting('showcase3_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'showcase3_enable', array(
            'label'      => __( 'Enable Showcase 3', 'wp-bootstrap' ),
            'section'    => 'showcase_section',
            'type'       => 'checkbox',
            'priority'   => 9
        ) );

        // showcase3 title text
        $wp_customize->add_setting('showcase3_title_settings', array(
            'default'   => _x('Easy to Use & Customize', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase3_title_control', array(
            'label'     => __('Showcase 3 Title', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase3_title_settings',
            'priority'  => 10
        ));


        // showcase3 description text
        $wp_customize->add_setting('showcase3_description_settings', array(
            'default'   => _x('Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('showcase3_description_control', array(
            'label'     => __('Showcase 3 Description', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase3_description_settings',
            'priority'  => 11
        ));

        // Showcase3 image
        $wp_customize->add_setting('showcase3_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/bg-showcase-3.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase3_image_control', array(
            'label'     => __('Showcase 3 Image', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase3_image_settings',
            'priority'  => 12
        )));

        // Showcase section background color
        $wp_customize->add_setting('showcase_bg_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'showcase_bg_color_control', array(
            'label'     => __('Showcase Section Background Color', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase_bg_color',
            'priority'  => 13
        )));

        // Showcase section font color
        $wp_customize->add_setting('showcase_font_color', array(
            'default'       => '#000000',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'showcase_font_color_control', array(
            'label'     => __('Showcase Section Font Color', 'bootstrap-blog'),
            'section'   => 'showcase_section',
            'settings'  => 'showcase_font_color',
            'priority'  => 14
        )));

        /////////////////////**************///////////////////////

        // Testimonials section
        $wp_customize->add_section('testimonials_section',array(
            'title' => __('Testimonials Section','bootstrap-blog'),
            'description'   =>  __('Options for the testimonials section'),
            'priority'      => 150
        ));

        // Enable or Disable testimonials section (!!TRICKY!!)
        $wp_customize->add_setting('testimonials_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'testimonials_enable', array(
            'label'      => __( 'Enable Testimonials Section', 'wp-bootstrap' ),
            'section'    => 'testimonials_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // Testimonials Section title text
        $wp_customize->add_setting('testimonials_title_settings', array(
            'default'   => _x('What people are saying...', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials_title_control', array(
            'label'     => __('Testimonials Section Title', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials_title_settings',
            'priority'  => 2
        ));

        // testimonials1 title text
        $wp_customize->add_setting('testimonials1_title_settings', array(
            'default'   => _x('Margaret E.', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials1_title_control', array(
            'label'     => __('Testimonial 1 Name', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials1_title_settings',
            'priority'  => 3
        ));


        // testimonials1 description text
        $wp_customize->add_setting('testimonials1_description_settings', array(
            'default'   => _x('This is fantastic! Thanks so much guys!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials1_description_control', array(
            'label'     => __('Testimonials 1 Review','bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials1_description_settings',
            'priority'  => 4
        ));

        // testimonials1 image
        $wp_customize->add_setting('testimonials1_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/testimonials-1.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials1_image_control', array(
            'label'     => __('Testimonial 1 Image (For the best experience, choose an image with equal dimensions)', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials1_image_settings',
            'priority'  => 5
        )));

        // testimonials2 title text
        $wp_customize->add_setting('testimonials2_title_settings', array(
            'default'   => _x('Fred S.', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials2_title_control', array(
            'label'     => __('Testimonials 2 Name', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials2_title_settings',
            'priority'  => 6
        ));


        // testimonials2 description text
        $wp_customize->add_setting('testimonials2_description_settings', array(
            'default'   => _x('Bootstrap is amazing. I\'ve been using it to create lots of super nice landing pages', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials2_description_control', array(
            'label'     => __('Testimonial 2 Review', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials2_description_settings',
            'priority'  => 7
        ));

        // testimonials2 image
        $wp_customize->add_setting('testimonials2_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/testimonials-2.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials2_image_control', array(
            'label'     => __('Testimonial 2 Image (For the best experience, choose an image with equal dimensions)', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials2_image_settings',
            'priority'  => 8
        )));

        // testimonials3 title text
        $wp_customize->add_setting('testimonials3_title_settings', array(
            'default'   => _x('Sarah W.', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials3_title_control', array(
            'label'     => __('Testimonial 3 Name', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials3_title_settings',
            'priority'  => 9
        ));


        // testimonials3 description text
        $wp_customize->add_setting('testimonials3_description_settings', array(
            'default'   => _x('Thanks so much for making these free resources available to us!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('testimonials3_description_control', array(
            'label'     => __('Testimonial 3 Review', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials3_description_settings',
            'priority'  => 10
        ));

        // testimonials3 image
        $wp_customize->add_setting('testimonials3_image_settings', array(
            'default'   => get_template_directory_uri() . '/img/testimonials-3.jpg',
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonials3_image_control', array(
            'label'     => __('Testimonial 3 Image (For the best experience, choose an image with equal dimensions)', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials3_image_settings',
            'priority'  => 11
        )));

        // testimonials section background color
        $wp_customize->add_setting('testimonials_bg_color', array(
            'default'       => '#f8f9fa',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'testimonials_bg_color_control', array(
            'label'     => __('Testimonials Section Background Color', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials_bg_color',
            'priority'  => 12
        )));

        // testimonials section font color
        $wp_customize->add_setting('testimonials_font_color', array(
            'default'       => '#000000',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'testimonials_font_color_control', array(
            'label'     => __('Testimonials Section Font Color', 'bootstrap-blog'),
            'section'   => 'testimonials_section',
            'settings'  => 'testimonials_font_color',
            'priority'  => 13
        )));

        /////////////////////**************///////////////////////

        // Call To Action section
        $wp_customize->add_section('calltoaction_section',array(
            'title' => __('Call To Action Section','bootstrap-blog'),
            'description'   =>  __('Options for Call To Action section'),
            'priority'      => 160
        ));

        // Enable or Disable calltoaction section (!!TRICKY!!)
        $wp_customize->add_setting('calltoaction_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'calltoaction_enable', array(
            'label'      => __( 'Enable Call To Action Section', 'wp-bootstrap' ),
            'section'    => 'calltoaction_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );


        // Call To Action section title text
        $wp_customize->add_setting('calltoaction_title', array(
            'default'   => _x('Ready to get started? Contact us now!', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('calltoaction_title_control', array(
            'label'     => __('Section Title', 'bootstrap-blog'),
            'section'   => 'calltoaction_section',
            'settings'  => 'calltoaction_title',
            'priority'  => 2
        ));

        // Call to action background color
        $wp_customize->add_setting('calltoaction_bg_color', array(
            'default'       => '#343a40',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'calltoaction_bg_color_control', array(
            'label'     => __('Call To Action Background Color', 'bootstrap-blog'),
            'section'   => 'calltoaction_section',
            'settings'  => 'calltoaction_bg_color',
            'priority'  => 3
        )));

        // Call To Action section font color
        $wp_customize->add_setting('calltoaction_font_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'calltoaction_font_color_control', array(
            'label'     => __('Call To Action Section Font Color', 'bootstrap-blog'),
            'section'   => 'calltoaction_section',
            'settings'  => 'calltoaction_font_color',
            'priority'  => 4
        )));

        // Enable or Disable social menu (!!TRICKY!!)
        $wp_customize->add_setting('social_menu_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'social_menu_enable', array(
            'label'      => __( 'Enable Social Menu', 'wp-bootstrap' ),
            'section'    => 'calltoaction_section',
            'type'       => 'checkbox',
            'priority'   => 5
        ) );

        // Call To Action social menu color
        $wp_customize->add_setting('social_menu_color', array(
            'default'       => '#ffffff',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'social_menu_color_control', array(
            'label'     => __('Call To Action Social Menu Color', 'bootstrap-blog'),
            'section'   => 'calltoaction_section',
            'settings'  => 'social_menu_color',
            'priority'  => 6
        )));

        /////////////////////**************///////////////////////

        // Footer section
        $wp_customize->add_section('footer_section',array(
            'title' => __('Footer Section','bootstrap-blog'),
            'description'   =>  __('Options for Footer section'),
            'priority'      => 170
        ));

        // Enable or Disable footer section (!!TRICKY!!)
        $wp_customize->add_setting('footer_enable', array(
            'default'    => true,
            'transport'  =>  'refresh'
        ));

        $wp_customize->add_control( 'footer_enable', array(
            'label'      => __( 'Enable Footer Section', 'wp-bootstrap' ),
            'section'    => 'footer_section',
            'type'       => 'checkbox',
            'priority'   => 1
        ) );

        // Footer section text
        $wp_customize->add_setting('footer_text', array(
            'default'   => _x('Theme Developed By <span class="text-success"><a href="http://yaser-alazm.com" target="_blank">Yaser AlAzm</a></span></p>
            <p>The basic template is from <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            All Rights reserved &copy; 2019', 'bootstrap-blog'),
            'type'      => 'theme_mod'
        ));

        $wp_customize->add_control('footer_text_control', array(
            'label'     => __('Footer Text', 'bootstrap-blog'),
            'section'   => 'footer_section',
            'settings'  => 'footer_text',
            'priority'  => 2
        ));

        // Footer background color
        $wp_customize->add_setting('footer_bg_color', array(
            'default'       => '#f9f9f9',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'footer_bg_color_control', array(
            'label'     => __('Footer Background Color', 'bootstrap-blog'),
            'section'   => 'footer_section',
            'settings'  => 'footer_bg_color',
            'priority'  => 3
        )));

        // Footer section font color
        $wp_customize->add_setting('footer_font_color', array(
            'default'       => '#999999',
            'type'          => 'theme_mod',
            'capability'    => 'edit_theme_options',
            'transport'     => 'refresh'
        ));

        $wp_customize->add_control(new Customize_Alpha_Color_Control($wp_customize, 'footer_font_color_control', array(
            'label'     => __('Footer Section Font Color', 'bootstrap-blog'),
            'section'   => 'footer_section',
            'settings'  => 'footer_font_color',
            'priority'  => 4
        )));
    }

    add_action('customize_register', 'wbp_customize_register');

    // Generating live CSS
    function wpb_customize_css()
    {
        ?>
            <!-- Changing styles for the front page -->

            <style>
                /* General Rules */
                .fa, .blog-header .social-menu .menu-item a,.blog-header .social-menu .menu-item a:hover {
                    color: <?php echo get_theme_mod('main_color', '#007bff'); ?> !important
                }
                .btn,.navbar .menu-item:hover {
                    background-color:<?php echo get_theme_mod('main_color'); ?> !important;
                    border-color: <?php echo get_theme_mod('main_color'); ?> !important;
                }
                /* Blog */
                .cat-featured {
                    background-color: <?php echo get_theme_mod('blog_fp_bg_color', '#343a40'); ?> !important
                }
                .cat-featured {
                    color: <?php echo get_theme_mod('blog_fp_font_color', '#ffffff'); ?> !important
                }
                /* Header section */
                header.masthead{
                background: url(<?php echo get_theme_mod('heading_image_settings', get_template_directory_uri() . '/img/bg-head.jpg'); ?>) no-repeat center center !important;
                }

                header.masthead .overlay {
                background-color: <?php echo get_theme_mod('heading_bg_color', 'rgba(80,122,114,0.38)') ?> !important;
                }

                header.masthead h1, header.masthead h3{
                    color: <?php echo get_theme_mod('heading_font_color', '#ffffff'); ?> !important
                }

                /* Features section */
                .features-icons{
                    background-color: <?php echo get_theme_mod('features_bg_color','#f8f9fa') ?> !important
                }
                .features-icons h3,.features-icons p{
                    color: <?php echo get_theme_mod('features_font_color','#212529') ?> !important
                }

                /* Showcase section */
                .showcase{
                    background-color: <?php echo get_theme_mod('showcase_bg_color', '#ffffff') ?> !important
                }
                .showcase h2, .showcase p{
                    color: <?php echo get_theme_mod('showcase_font_color', '#000000') ?> !important
                }

                /* Testimonials Section */
                .testimonials{
                    background-color: <?php echo get_theme_mod('testimonials_bg_color','#f8f9fa'); ?> !important
                }
                .testimonials h5, .testimonials p {
                    color: <?php echo get_theme_mod('testimonials_font_color', '#000000') ?> !important
                }

                /* Call To Action */
                .call-to-action{
                    background-color: <?php echo get_theme_mod('calltoaction_bg_color','#343a40') ?> !important
                }

                .call-to-action h2, .call-to-action p.lead{
                    color: <?php echo get_theme_mod('calltoaction_font_color','#ffffff') ?>
                }

                .call-to-action .menu-item a,
                .call-to-action .menu-item:before{
                    color: <?php echo get_theme_mod('social_menu_color', '#ffffff'); ?> !important
                }

                /* Footer Section */
                .blog-footer{
                    background-color: <?php echo get_theme_mod('footer_bg_color','#f9f9f9'); ?> !important
                }

                .blog-footer{
                    color: <?php echo get_theme_mod('footer_font_color','#999999'); ?> !important
                }
            </style>

            <?php if((is_front_page()) && (true === get_theme_mod('enable_lato_font')) ) : ?>
                <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
                <style>
                    body {
                        font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
                        }

                    h1,h2,h3,h4,h5,h6 {
                        font-family: 'Lato',
                            'Helvetica Neue', Helvetica, Arial, sans-serif;
                        font-weight: 700;
                    }
                </style>
            <?php else: ?>
                <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

                <style>
                    h1,h2,h3,h4,h5,h6 {
                    font-family: 'Playfair Display', Georgia, 'Times New Roman', serif;
                    }
                </style>
            <?php endif; ?>
        <?php
    }
    add_action( 'wp_head', 'wpb_customize_css');