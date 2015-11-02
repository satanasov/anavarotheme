<?php
load_theme_textdomain( 'anavaro', get_template_directory() . '/languages' );
if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name'	=> 'Right blog',
			'id'	=> 'right',
			'description'	=> 'All right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
		)
	);
	register_sidebar(
		array(
			'name'	=> 'Bottom left',
			'id'	=> 'bottom-left',
			'description'	=> 'Bottom left sidebar (this is the second (first is copiright info))',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
		)
	);
	register_sidebar(
		array(
			'name'	=> 'Bottom middle',
			'id'	=> 'bottom-middle',
			'description'	=> 'Bottom middle sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
		)
	);
	register_sidebar(
		array(
			'name'	=> 'Bottom right',
			'id'	=> 'bottom-right',
			'description'	=> 'Bottom right sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
		)
	);
}
$themename = 'Anavaro';
$shortname = 'anavaro';
 
/*"name" - This is the title for this particular option.
"desc" - A description for the option.
"id" - We will be using this to retrieve the variable value in the theme files.
"type" - This defines what type of option it is. You can have such types of input: text, checkbox, textarea,  select. 
"default" - This is the 'default' setting for the option. For example, if this was a checkbox, you could enter true or false here. True would be checked, and false would be unchecked.*/
 
$options = array (
/*
array( "name" => "Header Settings (Not usable for the moment)",
    "type" => "title",),


array( "name" => "Google Verification code",
    "desc" => "Please add your Google Verification Code",
    "id" => $shortname."_gvcode",
    "type" => "text",
    "default" => ""),
array( 
    "name"    =>    "Google Analytics",
    "desc"    =>    "Do you use Google Analytics?",
    "id"    =>    $shortname."_usega",
    "type"    =>    "checkbox",
    "default"    =>    "true"
    ),
array( "name" => "Google Analytics code",
    "desc" => "Please add your Google Analytics Code",
    "id" => $shortname."_gacode",
    "type" => "text",
    "default" => "UA-XXXXXXX-X"),

array( 
    "name"    =>    "+1",
    "desc"    =>    "Do you use Google +1",
    "id"    =>    $shortname."_usegpo",
    "type"    =>    "checkbox",
    "default"    =>    "true"
    ),
array( 
    "name"    =>    "Twitter",
    "desc"    =>    "Do you use Twitter API",
    "id"    =>    $shortname."_usegtwit",
    "type"    =>    "checkbox",
    "default"    =>    "true"
    ),
array( "name" => "test",
    "type" => "break",),

*/

array( "name" => "Header Analytics",
    "type" => "title",),

array( "name" => "Google Verification code",
    "desc" => "Please add your Google Verification Code",
    "id" => $shortname."_gvcode",
    "type" => "text",
    "default" => "n/a"),

array( "name" => "Google Analytics code",
    "desc" => "Please add your Google Analytics Code. To deactivate return to default value <code>UA-XXXXXXX-X</code>. It has integrated Social Network Button tracking!<br>!!!NOTE!!!: It works only with twitter at the moment.",
    "id" => $shortname."_gacode",
    "type" => "text",
    "default" => "UA-XXXXXXX-X"),

array( "name" => "Google Analytics Domain",
    "desc" => "Set the domain profile you are tracking",
    "id" => $shortname."_gatdn",
    "type" => "text",
    "default" => "your.domain.tdn"),

array( "name" => "test",
    "type" => "break",),

array( "name" => "Header Social",
    "type" => "title",),

array( 
    "name"    =>    "+1",
    "desc"    =>    "Do you use Google +1",
    "id"    =>    $shortname."_usegpo",
    "type"    =>    "checkbox",
    "default"    =>    "false"
    ),
array( "name" => "Google Plus badge",
    "desc" => "Plese add your Google Plus page number. <br> Open your page and get the URL <code>https://plus.google.com/nnnnnnnnnnnnnnn</code>.<br>You will have to add badge code manualy where you want it.<BR>!!!NOTE!!! You WILL HAVE TO ACTIVATE +1 button usage!<br><a href=\"https://developers.google.com/+/plugins/badge/config\"> Here you can get the code </a>",
    "id" => $shortname."_gabadge",
    "type" => "text",
    "default" => "N/A"),
    
array( 
    "name"    =>    "Twitter",
    "desc"    =>    "Do you use Twitter API",
    "id"    =>    $shortname."_usegtwit",
    "type"    =>    "checkbox",
    "default"    =>    "false"
    ),
array( 
    "name"    =>    "Facebook special optimisations",
    "desc"    =>    "Get post images to Facebook. It extends a bit of FB WP Integration (adds automaticaly featured post). If you are adding manual featured post - disable this.",
    "id"    =>    $shortname."_specialfb",
    "type"    =>    "checkbox",
    "default"    =>    "false"
    ),
array( 
    "name"    =>    "Facebook admin IDs",
    "desc"    =>    "Add Facebook IDs of comment moderators (,) sepparated. If you do not wish to use them use <code>n/a</code>",
    "id"    =>    $shortname."_fbadmins",
    "type"    =>    "text",
    "default"    =>    "n/a"
    ),        
    
array( "name" => "test",
    "type" => "break",),

array( "name" => "Header SEO",
    "type" => "title",),

array( "name" => "Index page keywords",
    "desc" => "Set META keywords for the index page. <code>,</code> separeted",
    "id" => $shortname."_keywords",
    "type" => "text",
    "default" => "blog, personal, i didn't config my theme"),

array( 
    "name"    =>    "SEO Additions",
    "desc"    =>    "If you are not using some SEO optimization you could use this option to add <code>tags</code> or hidden field <code>keyowrds</code> as keywords",
    "id"    =>    $shortname."_theme_seo",
    "type"    =>    "checkbox",
    "default"    =>    "false"
    ),



/*
array( "name" => "Text input example",
    "desc" => "Text input description example. Example: <code>example</code>",
    "id" => $shortname."_text",
    "type" => "text",
    "default" => "default"),
 
array( "name" => "Checkbox example",
    "desc" => "Checkbox description example.",
    "id" => $shortname."_checkbox",
    "type" => "checkbox",
    "default" => "true" // can be "false"
    ),
 
array( "name" => "Select example",
    "desc" => "Select description example.",
    "id" => $shortname."_select",
    "type" => "select",
    "options" => array("red", "green", "blue"),
    "default" => "green"),
 
array( "name" => "Textare example",
    "desc" => "Textare description example.",
    "id" => $shortname."_textarea",
    "type" => "textarea",
    "default" => "textarea default"),
 */
);
 
 
function theme_add_options() {
    global $themename, $shortname, $options;
    if ( $_GET['page'] == basename(__FILE__) ) {
        if ( 'save' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
				switch($value['id']['type'])
				{
					case 'text':
					case 'textarea':
						$ready = sanitize_text_field(trim($_REQUEST[$value['id']]));
					break;
					default:
						$ready = trim($_REQUEST[$value['id']]);
				}
                update_option( $value['id'], $ready);
            }
            foreach ($options as $value) {
                if( isset( $_REQUEST[ $value['id'] ] ) ) {
					switch($value['id']['type'])
					{
						case 'text':
						case 'textarea':
							$ready = sanitize_text_field(trim($_REQUEST[$value['id']]));
						break;
						default:
							$ready = trim($_REQUEST[$value['id']]);
					}
					update_option( $value['id'], $ready);
                }
				else {
                    delete_option( $value['id'] );
                }
            }
            header("Location: themes.php?page=functions.php&saved=true");
            die;
        } else if( 'reset' == $_REQUEST['action'] ) {
            foreach ($options as $value) {
                delete_option( $value['id'] );
            }
            header("Location: themes.php?page=functions.php&reset=true");
            die;
        }
    }
    add_theme_page($themename." settings", $themename." settings", 'edit_themes', basename(__FILE__), 'theme_admin');
}
 
function theme_admin() {
 
global $themename, $shortname, $options;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>Settings for '.$themename.' were saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>Settings for '.$themename.' were cleared.</strong></p></div>';
 
?>
<div class="wrap">
<h2>Settings for <?php echo $themename; ?></h2>
 
<form method="post">
<table class="widefat">
<?php foreach ($options as $value) {
    switch ( $value['type'] ) {
 
case 'text':
?>
 
<tr>
    <td>
        <label for="<?php echo $value['id']; ?>"><strong><?php echo $value['name']; ?></strong><br />
        <small><?php echo $value['desc']; ?></small></label>
    </td>
    <td>
        <input size="50" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['default']; } ?>" />
    </td>
</tr>
 
 
<?php
break;
 
case 'textarea':
?>
 
<tr>
    <td>
        <label for="<?php echo $value['id']; ?>"><strong><?php echo $value['name']; ?></strong><br />
        <small><?php echo $value['desc']; ?></small></label>
    </td>
    <td>
        <textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="50" rows="10"><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['default']; } ?></textarea>
    </td>
</tr>
 
<?php
break;
 
case 'select':
?>
<tr>
    <td>
        <label for="<?php echo $value['id']; ?>"><strong><?php echo $value['name']; ?></strong><br />
        <small><?php echo $value['desc']; ?></small></label>
    </td>
    <td>
        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
        <?php foreach ($value['options'] as $option) { ?>
            <?php if( get_settings( $value['id'] ) ) { ?>
                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
            <?php } else { ?>
                <option<?php if ($option == $value['default']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
            <?php } ?>
        <?php } ?>
        </select>
    </td>
</tr>
 
 
<?php
break;
 
case "checkbox":
?>
<tr>
    <td>
        <label for="<?php echo $value['id']; ?>"><strong><?php echo $value['name']; ?></strong><br />
        <small><?php echo $value['desc']; ?></small></label>
    </td>
    <td>
        <?php 
        if( get_settings($value['id']) ){
            $checked = 'checked="checked"';
        }else{
            $checked = '';
        }
        ?>
        <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" <?php echo $checked; ?> />
    </td>
</tr>
 
<?php break;
case "title":
?>
<tr>
    <th colspan="2">
        <?php echo $value['name']; ?>
    </th>
</tr>
 
<?php break;
case "break":
?>
</table>
<br>
<table class="widefat">
 
<?php break;
    }
}
?>
 
<tr>
<td style="width:28%;">&nbsp;</td>
<td>
<input name="save" type="submit" class="button-primary" value="Save settings" />
<input type="hidden" name="action" value="save" />
</td>
 
</table>
</form>
 
<form method="post">
<p class="submit">
<input name="reset" type="submit" class="button" value="Reset settings" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
</div>
<?php
}
 
add_action('admin_menu', 'theme_add_options');

// Let's add menus ...
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'main_nav' => __( 'Menu 1' )
		)
	);
}

// Let's add some customization options.

//Setup
function anavaro_setup() {
	add_theme_support( 'post-thumbnails' );
	
	/* Enable support for HTML5 markup. */
	add_theme_support('html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	));

}
add_action('after_setup_theme', 'anavaro_setup');

/* Customizer additions. */
require get_template_directory() . '/include/customizer.php';

// Do the jQuery right way!!!
function load_js() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js');
	wp_enqueue_script('waipoint', get_template_directory_uri() . '/js/jquery.waypoints.min.js');
}
add_action("wp_enqueue_scripts", "load_js");

// Enqueue stylesheets
function load_css() {
	// Add font awsome
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fontawesome/css/font-awesome.min.css'); 
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fontawesome/css/font-awesome.min.css'); 
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css'); 
	wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css'); 
	wp_enqueue_style('menu', get_template_directory_uri() . '/css/menu.css'); 
	wp_enqueue_style('carousel', get_template_directory_uri() . '/css/carousel.css'); 
	wp_enqueue_style('posts', get_template_directory_uri() . '/css/posts.css'); 
	wp_enqueue_style('info', get_template_directory_uri() . '/css/info.css'); 
}
add_action('wp_enqueue_scripts','load_css');


// Let's check for option and then notify admin if there is none set!
function notify_admin()
{
	if (!get_theme_mod('posts_page'))
	{
		?>
		<div class="update-nag">
        <p><?php _e( 'Warning! You need to set posts page from the theme customization menu', 'anavaro' ); ?></p>
		</div>
		<?php
	}
}
add_action( 'admin_notices', 'notify_admin' );


/******************
*******************
*** Meta BOX ******
*****************/
require get_template_directory() . '/include/meta_boxes.php';
add_action('admin_init', 'anavaro_meta_init');
add_action('save_post', 'anavaro_meta_save');

/*********************
**********************
*** Custom Post ******
**********************
*********************/
add_action( 'init', 'bookworm_blog_cpt' );

function bookworm_blog_cpt() {

register_post_type( 'info', array(
	'labels' => array(
		'name' => 'User info',
		'singular_name' => 'User info',
	),
	'description' => 'Create user info pages.',
	'public' => true,
	'menu_position' => 20,
	'supports' => array( 'title', 'editor', 'thumbnail'),
	'menu_icon'	=> 'dashicons-admin-users'
));
}

/**
 * Remove the slug from published post permalinks. Only affect our CPT though.
 */

function anavaro_remove_cpt_slug( $post_link, $post, $leavename ) {
 
    if ( 'info' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
 
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 
    return $post_link;
}
add_filter( 'post_type_link', 'anavaro_remove_cpt_slug', 10, 3 );

/**
 * Have WordPress match postname to any of our public post types (page, post, race)
 * All of our public post types can have /post-name/ as the slug, so they better be unique across all posts
 * By default, core only accounts for posts and pages where the slug is /post-name/
 */
function anavaro_parse_request_trick( $query ) {
 
    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;
 
    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }
 
    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'info', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'anavaro_parse_request_trick' );
?>
