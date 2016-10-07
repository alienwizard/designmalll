<?php

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
            'label' => __( 'Färg för sidhuvud', 'mytheme' ), //Admin-visible name of the control
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
            'label' => __( 'Färg för text i navigationsmeny', 'mytheme' ), //Admin-visible name of the control
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
         <style type="text/css">

         body{
         	background-color: <?php echo get_theme_mod('backgroundColor', '000000'); ?>;
         	color: <?php echo get_theme_mod('textColor', '000000'); ?>;
         }


         .top-header{
         	background-color: <?php echo get_theme_mod('header_backgroundColor', '000000');?>
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



if(function_exists('register_nav_menus')){


	register_nav_menus(


		array(

            'side_menu' => 'Sidoställd meny',


			'single_nav' => 'Single page menu',


			'footer_nav' => 'Main Footer Menu'


			)


	);




}


function enqueue_jquery() {


		wp_enqueue_script('jquery', get_template_directory_uri() . '/node_modules/jquery/jquery.js', NULL, false);


}


add_action('wp_enqueue_scripts', 'enqueue_jquery');


function my_enqueue_assets() {





	wp_enqueue_script( 'masonry',  get_template_directory_uri() . '/node_modules/masonry-layout/masonry.js', array( 'jquery' ), NULL, false);


	wp_enqueue_script( 'imagesloaded',  get_template_directory_uri() . '/node_modules/imagesloaded/imagesloaded.pkgd.js', array( 'jquery' ), NULL, false);


    wp_enqueue_script( 'script',  get_template_directory_uri() . '/js/script.js', array( 'jquery' ), NULL, true);


    global $wp_query;

    wp_localize_script( 'script', 'ajaxpagination', array(
	'ajaxurl' => admin_url( 'admin-ajax.php' ),
	'query_vars' => json_encode( $wp_query->query )
	));


}

add_action('wp_enqueue_scripts', 'my_enqueue_assets');



add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );


function my_ajax_pagination() {
    $query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );

    if ($_POST['page'] != 'allt') {

    	$query_vars['category_name'] = $_POST['page'];

      }

	$query_vars['post_type'] = 'showcase';
	$query_vars['posts_per_page'] = -1;
	

     $posts = new WP_Query( $query_vars );


     $GLOBALS['wp_query'] = $posts;


     while ( $posts->have_posts() ) { ?>

     	<?php $posts->the_post(); ?>

     				<div class="project-item">
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail('large'); ?>
					<div class="title-bak"><h3 class="project-text"><?php the_title(); ?></h3></div>
				</a>
			</div>

        <?php }





    die();
}




add_theme_support( 'post-thumbnails' ); 



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


function slideshow_post_init() {

	 $args = array(

	 	'public' => true,


      'label'  => 'Bildspel på förstasidan',


      'description'        => __( 'Bildspel på förstasidan', 'landqvist' ),


		'public'             => true,


		'publicly_queryable' => true,


		'show_ui'            => true,


		'show_in_menu'       => true,


		'query_var'          => true,


		'rewrite'            => array( 'slug' => 'slide' ),


		'capability_type'    => 'post',


		'has_archive'        => true,


		'taxonomies'		 => array('category'),


		'hierarchical'       => false,


		'menu_position'      => null,


		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )




	);


register_post_type( 'slide', $args );

}


add_action( 'init', 'slideshow_post_init' );


function tjanst_custom_init() {


    $args = array(


      'public' => true,


      'label'  => 'Referensbilder på förstasidan',


      'description'        => __( 'Showcase-bilder på förstasidan.', 'landqvist' ),


		'public'             => true,


		'publicly_queryable' => true,


		'show_ui'            => true,


		'show_in_menu'       => true,


		'query_var'          => true,


		'rewrite'            => array( 'slug' => 'showcase' ),


		'capability_type'    => 'post',


		'has_archive'        => true,


		'taxonomies'		 => array('category'),


		'hierarchical'       => false,


		'menu_position'      => null,


		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )


    );


    register_post_type( 'showcase', $args );


}


add_action( 'init', 'tjanst_custom_init' );