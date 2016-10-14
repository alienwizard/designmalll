<?php
if ( ! function_exists( 'post_exists' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/post.php' );
}
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array(
			'main_nav' => 'Main Navigation Menu',
            'aside_nav' => 'Aside meny',
			'footer_nav' => 'Main Footer Menu'
			)
	);
}
if ( file_exists( STYLESHEETPATH . '/class.my-theme-options.php' ) )
	include_once( STYLESHEETPATH . '/class.my-theme-options.php' );
add_theme_support( 'post-thumbnails' );


if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	
	$optionsframework_settings = get_option('optionsframework');
	
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
		
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}
add_theme_support( 'custom-logo' );

function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here

//ADD OPTIONS SECTION TO ANPASSA PAGE 

	$wp_customize->add_section( 'mytheme_new_section_name' , array(
    'title'      => __( 'Visible Section Name', 'mytheme' ),
    'priority'   => 30,
    'capability' => 'edit_theme_options', //Capability needed to tweak
    'description' => __('Allows you to customize some example settings for MyTheme.', 'mytheme'), 

) );


		$wp_customize->add_setting( 'header_textcolor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
) );

		$wp_customize->add_setting( 'header_backgroundColor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',

    ) );

				$wp_customize->add_setting( 'nav_backgroundColor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',

    ) );


				$wp_customize->add_setting( 'backgroundColor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
) );


								$wp_customize->add_setting( 'boxColor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
) );

$wp_customize->add_setting( 'textColor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
) );


								$wp_customize->add_setting( 'footer_backgroundColor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
) );

$wp_customize->add_setting( 'footer_textColor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
) );

$wp_customize->add_setting( 'bot_footer_backgroundColor' , array(
    'default'     => '#000000',
    'transport'   => 'postMessage',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
) );


            $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_topheaderbackgroundcolor', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för sidhuvud och sidmeny', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'header_backgroundColor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );



     //define the control itself (which links a setting to a section and renders the HTML controls)...
      $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_link_textcolor', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för text i navigationsmeny och sidmeny', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'header_textcolor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );

            $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_navbackgroundcolor', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för navigationsmeny', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'nav_backgroundColor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );


                        $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_back', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för bakgrund', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'backgroundColor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );



                        $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_boxColor', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för bakgrund på textboxar', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'boxColor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );
      

                              $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_textfarg', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för text', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'textColor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );

                                                            $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_footerbg', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för footer', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'footer_backgroundColor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );


	$wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_footertext', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för text i footer', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'footer_textColor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );

                                                                                          $wp_customize->add_control( new WP_Customize_Color_Control( //Instantiate the color control class
         $wp_customize, //Pass the $wp_customize object (required)
         'mytheme_botfooterbg', //Set a unique ID for the control
         array(
            'label' => __( 'Färg för copyright', 'mytheme' ), //Admin-visible name of the control
            'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
            'settings' => 'bot_footer_backgroundColor', //Which setting to load and manipulate (serialized is okay)
            'priority' => 10, //Determines the order this control appears in for the specified section
         ) 
      ) );


      //4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
      $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
      $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
      $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
      $wp_customize->get_setting( 'header_backgroundColor' )->transport = 'postMessage';
      $wp_customize->get_setting( 'boxColor' )->transport = 'postMessage';
      $wp_customize->get_setting( 'backgroundColor' )->transport = 'postMessage';
   }


/*
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
	'label'        => __( 'Header Color', 'mytheme' ),
	'section'    => 'your_section_id',
	'settings'   => 'your_setting_id',
) ) );
*/

/**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */

 /**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */
function mytheme_customizer_live_preview()
{

	wp_enqueue_script( 
		  'mytheme-themecustomizer',			//Give the script an ID
		  get_template_directory_uri().'/js/theme-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional) 
		  false						//Put script in footer?
	);
}



function mytheme_customize_css()
{
    ?>
         <style type="text/css" id="wp-adminCss">

         body{
         	background-color: <?php echo get_theme_mod('backgroundColor', '000000'); ?>;
         	color: <?php echo get_theme_mod('textColor', '000000'); ?>;
         }


         .top-header-start{
         	background-color: <?php echo get_theme_mod('header_backgroundColor', '000000');?>
         }

         .navtextColor{
            color: #<?php echo get_theme_mod('header_textcolor', '000000'); ?>; 
         }

         .border-wrap{
         	    background-color: <?php echo get_theme_mod('boxColor', '000000'); ?>;
         }

           .bottom-header a { color: #<?php echo get_theme_mod('header_textcolor', '000000'); ?>; }

         	.bottom-header{

         		background-color: <?php echo get_theme_mod('nav_backgroundColor', '000000');?>
         	}



         	footer{
         		background-color: <?php echo get_theme_mod('footer_backgroundColor', '000000');?>;
         		color: <?php echo get_theme_mod('footer_textColor', '000000'); ?>;
         	}

         	.footer-nav-menu a{
         		 color: <?php echo get_theme_mod('footer_textColor', '000000'); ?>;
         	}
         	.footer-bottom{
         		background-color: <?php echo get_theme_mod('bot_footer_backgroundColor', '000000');?>
         	}

         	
         </style>
    <?php
}




add_action( 'customize_register', 'mytheme_customize_register' );


add_action( 'wp_head', 'mytheme_customize_css');

add_action( 'customize_preview_init', 'mytheme_customizer_live_preview' );

/**
* Register our sidebars and widgetized areas.
*
*/
function landqvist_widgets_init() {
	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="sidebar-wrapper">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
	'name' => __( 'Footer Widget adress', 'landqvist' ),
	'id' => 'footer-adress',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => __( 'Öppettider', 'landqvist' ),
	'id' => 'opening-hours',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => __( 'Footer Widget Länkar', 'landqvist' ),
	'id' => 'footer-links',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => __( 'Header Kontaktinfo', 'landqvist' ),
	'id' => 'header-kontakt',
	'description' => __( 'Found at the bottom of every page (except 404s and optional homepage template) Left Footer Widget.', 'landqvist' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'landqvist_widgets_init' );

function offer_custom_init() {
$args = array(
'public' => true,
'label'  => 'Erbjudanden',
'description'        => __( 'Description.', 'landqvist' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'offer' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
				'taxonomies'		 => array('category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
);
register_post_type( 'offer', $args );
}
add_action( 'init', 'offer_custom_init' );


function partners_custom_init() {
$args = array(
'public' => true,
'label'  => 'Partners',
'description'        => __( 'Description.', 'landqvist' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'partners' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
                'taxonomies'         => array('category'),
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
);
register_post_type( 'partners', $args );
}
add_action( 'init', 'partners_custom_init' );



function slide_custom_init() {
$args = array(
'public' => true,
'label'  => 'Slide in box på förstasidan',
'description'        => __( 'Description.', 'landqvist' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slidebox' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
                'taxonomies'         => array('category'),
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
);
register_post_type( 'slidebox', $args );
}
add_action( 'init', 'slide_custom_init' );

function produkt_custom_init() {
$args = array(
'public' => true,
'label'  => 'Produkt',
'description'        => __( 'Description.', 'landqvist' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'produkt' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
				'taxonomies'		 => array('category'),
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
);
register_post_type( 'produkt', $args );
}
add_action( 'init', 'produkt_custom_init' );


/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */

function new_excerpt_more( $more ) {
    return sprintf( '...<a class="read-more" href="%1$s">Läs mer</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>