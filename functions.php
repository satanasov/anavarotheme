<?php
if ( function_exists('register_sidebar') ) {
	register_sidebar(
		array(
			'name'	=> 'Right blog',
			'id'	=> 'right-sidebar',
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
			'name'	=> 'Bottom left',
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

array( "name" => "In Post settins",
    "type" => "title",),
array( 
    "name"    =>    "Use META <code>rel=author</code>",
    "desc"    =>    "Do you want to use the meta for athorship?",
    "id"    =>    $shortname."_usegrelauthor",
    "type"    =>    "checkbox",
    "default"    =>    "false"
    ),

array( "name" => "test",
    "type" => "break",),

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
                update_option( $value['id'], trim( $_REQUEST[ $value['id'] ] ) );
            }
            foreach ($options as $value) {
                if( isset( $_REQUEST[ $value['id'] ] ) ) {
                    update_option( $value['id'], trim( $_REQUEST[ $value['id'] ] ) );
                } else {
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
add_theme_support( 'post-thumbnails' );

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

function anavaro_customize_register($wp_customize) {
	$wp_customize->add_section( 
		'anavaro_carousel_options', 
		array(
			'title'       => __( 'Carousel options', 'anavaro' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change front page carousel. If you want to disable any image - just leave the address empty. If you are going to use carousel you need to have at least first image', 'anavaro'), 
		) 
	);
	
	// Use carousel
	$wp_customize->add_setting( 'carousel_active',
		array(
			'default' => 1,
			'transport'   => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_active',
			array(
				'label'          => __( 'Use carousel', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'checkbox'
			)
		)
	);
	// First image control
	$wp_customize->add_setting( 'carousel_first_slide_image',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => get_template_directory_uri() . '/img/4054180179_e146a52baa_o.jpg',
			'transport'   => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_first_slide_image',
			array(
				'label'          => __( 'First image:', 'anavaro' ),
				'description' => __( 'What image should we use for first carousel slide? <br /> Best used resolution 1200x575', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text'
			)
		)
	);
	// Second image control
	$wp_customize->add_setting( 'carousel_second_slide_image',
		array(
			'default' => get_template_directory_uri() . '/img/18046343975_65c2031027_k.jpg',
			'transport'   => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_second_slide_image',
			array(
				'label'          => __( 'Second image:', 'anavaro' ),
				'description' => __( 'What image should we use for second carousel slide? <br /> Best used resolution 1200x575', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text'
			)
		)
	);
	// Third image control
	$wp_customize->add_setting( 'carousel_third_slide_image',
		array(
			'default' => get_template_directory_uri() . '/img/8499155449_1235a88784_k.jpg',
			'transport'   => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_third_slide_image',
			array(
				'label'          => __( 'Third image:', 'anavaro' ),
				'description' => __( 'What image should we use for third carousel slide? <br /> Best used resolution 1200x575', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text'
			)
		)
	);
	// Fourth image control
	$wp_customize->add_setting( 'carousel_fourth_slide_image',
		array(
			'default' => '',
			'transport'   => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fourth_slide_image',
			array(
				'label'          => __( 'Fourth image:', 'anavaro' ),
				'description' => __( 'What image should we use for fourth carousel slide? <br /> Best used resolution 1200x575', 'anavaro' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text'
			)
		)
	);
	// Fifth image control
	$wp_customize->add_setting( 'carousel_fifth_slide_image',
		array(
			'default' => '',
			'transport'   => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'carousel_fifth_slide_image',
			array(
				'label'          => __( 'Fifth image:', 'anavaro' ),
				'description' => __( 'What image should we use for fifth carousel slide? <br /> Best used resolution 1200x575', 'twentyfifteen' ),
				'section'        => 'anavaro_carousel_options',
				'type'           => 'text'
			)
		)
	);
}
add_action('customize_register','anavaro_customize_register');
?>