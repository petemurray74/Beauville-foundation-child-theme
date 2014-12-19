<?php
// ---------------
//  BETTER TITLES
// ---------------
function pm_better_wp_title( $title ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;
	
    // has user inputted a custom title?
	if ($override_title=get_post_meta( get_the_ID(), 'title', true ))
	{
        $title=$override_title;
    }
    
	else
	{	
        $sep=" | ";
		// Add the blog name
		$blogName = get_bloginfo( 'name', 'display' );        
 
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= "$blogName $sep $site_description";
		}
		// Add a page number if necessary:
		
		else if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= "$blogName $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
		}
		
		else {$title .= $sep.$blogName;}
	}
	return $title;
}
add_filter( 'wp_title', 'pm_better_wp_title', 10, 2 );
// ---------------
//  RANDOM IMAGE
// ---------------

function randomImage()
{
$folder = 'wp-content/gallery/header_banner_images/';

// Space seperated list of extensions, you probably won't have to change this.
$exts = 'jpg jpeg png gif';

$files = array(); $i = -1; // Initialize some variables
if ('' == $folder) $folder = './';

$handle = opendir($folder);
$exts = explode(' ', $exts);
while (false !== ($file = readdir($handle))) {
	foreach($exts as $ext) { // for each extension check the extension
		if (preg_match('/\.'.$ext.'$/i', $file, $test)) { // faster than ereg, case insensitive
		$files[] = $file; // it's good
		++$i;
		}
	}
}
closedir($handle); // We're not using it anymore
mt_srand((double)microtime()*1000000); // seed for PHP < 4.2
$rand = mt_rand(0, $i); // $i was incremented as we went along

return $folder.$files[$rand];
}

// ---------------
//  CHILD THEME CSS
// ---------------

// put css all in one place in child
	add_action('wp_enqueue_scripts', 'pm_scripts_and_styles', 1000);
	function pm_scripts_and_styles()  {
	if (!is_admin()) {
		//CSS
        
        // deregister main joints stylesheet. I'll use sass to add the styles into child stylesheet. One big file. Nice
		wp_dequeue_style('joints-stylesheet');
		wp_dequeue_style('foundation-icons');
		
		// register child theme stylesheet
		wp_enqueue_style( 'beauville-stylesheet', get_stylesheet_directory_uri() . '/library/css/style.css', array(), '', 'all' );
        wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Droid+Sans:400,700', array(), '', 'all' );
        
        //JS
        // adding Foundation scripts file in the footer
         wp_dequeue_script( 'foundation-js');
         wp_enqueue_script( 'foundation-customised-js', get_template_directory_uri() . '/bower_components/foundation/js/foundation_customised_min.js', array( 'jquery' ), $theme_version, true );
        wp_dequeue_script( 'joints-js');
        wp_enqueue_script( 'joints-js', get_template_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), $theme_version, true );
		}
	}


/*********************
SIDEBARS FROM JOINTS CODE
*********************/

// Sidebars & Widgetizes Areas
function ba_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar right 1', 'jointstheme'),
		'description' => __('The first group of widgets shown on the right of the page', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointstheme'),
		'description' => __('The offcanvas sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
    
    register_sidebar(array(
		'id' => 'sidebar-home',
		'name' => __('Home Page Sidebar', 'jointstheme'),
		'description' => __('The sidebar shown only on the homepage.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>',
	));
    
	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar right 2', 'jointstheme'),
		'description' => __('The second group of widgets shown on the right of the page', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));  
    
	register_sidebar(array(
		'id' => 'sidebar-nav',
		'name' => __('Navigation Sidebar', 'jointstheme'),
		'description' => __('The sidebar on the left of the page, usually shows a navigation menu', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));    
    

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointstheme'),
		'description' => __('The second (secondary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

// removing joints sidebars and adding BA ones

function unregister_joints_sidebars() {
remove_action('widgets_init', 'joints_register_sidebars' );
}
// Call 'remove_thematic_actions' (above) during WP initialization
add_action('after_setup_theme','unregister_joints_sidebars', 17);

//add BA new sidebars
add_action( 'widgets_init', 'ba_register_sidebars' );




// MAKE SURE THERE ARE NO SPACES OR LINE BREAKS AFTER THE CLOSING php TAG BELOW
// THIS SEEMS TO BREAK NEXT GEN GALLERY - EDIT THUMBS
?>