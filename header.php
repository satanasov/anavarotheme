<?php
    
global $options;
foreach ($options as $value) {
    global $$value['id'];
    if (get_settings( $value['id'] ) === FALSE) {
        $$value['id'] = $value['default'];
    } else {
        $$value['id'] = get_settings( $value['id'] ); 
    }
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb="https://www.facebook.com/2008/fbml">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="robots" content="follow, all" />
        <!-- META DEFS -->
        <?php if ($anavaro_theme_seo == "on") { ?>
        <meta itemprop="name" content="<?php the_title(); ?>">
        <?php 
            if (is_single()) { 
                $descr = get_post_meta($post->ID, 'description', true);
                if (!strlen($descr)) {
                     $descr = get_the_excerpt();
                     $strip = strpos($descr, '<a');
                     if($strip > 2) {
                         $descr = substr($descr, 0, $strip);
                     }
                     if (!strlen($descr)) {
                        $descr = get_bloginfo('description');
                    }
                }
            }
            else { $descr = get_bloginfo('description'); }  
        ?>
        <meta name="description" content="<?php echo $descr; ?>" /> 
        <?php 
            if (is_single()) { 
                $tags = get_post_meta($post->ID, 'keywords', true); 
                if (!strlen($tags)) {
                    $tmp_tags = wp_get_post_tags( $post->ID, array( 'fields' => 'names' ) );
                    foreach ($tmp_tags as $VAR) {
                        $tags .= $VAR.", ";
                    }
                    $tags = substr($tags,0,-1);
                    if (!strlen($tags)) {
                        $tags = $anavaro_keywords;
                    }
                }
            }
            else { $tags = $anavaro_keywords; } ?>
        <meta name="keywords" content="<?php echo $tags; ?>"/>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php } ?>
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php 
        //add google plus badge link
           if ($anavaro_gabadge != "N/A") { 
            ?>

            <link href="https://plus.google.com/<?php echo $anavaro_gabadge; ?>" rel="publisher" />

            <?php }
        ?>
        <?php 
            if ($anavaro_gvcode != "n/a") { ?><meta name="verify-v1" content="<?php echo $anavaro_gvcode; ?>" /> <?php }
            if ($anavaro_gacode != "UA-XXXXXXX-X") { ?>
         <script type="text/javascript">
             var _gaq = _gaq || [];
            _gaq.push(['_setAccount', '<?php echo $anavaro_gacode; ?>']);
            _gaq.push(['_setDomainName', '.<?php echo $anavaro_gatdn; ?>']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
            </script>
        <!-- Google Analytics Social Button Tracking -->
        <script type="text/javascript" src="http://lab.anavaro.com/cdn/ga_social_tracking.js"></script>
            <?php }
            if ($anavaro_usegpo == "on") { ?>
            <script type="text/javascript">
              (function() {
                    var po = document.createElement('script'); 
                    po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; 
                    s.parentNode.insertBefore(po, s);
              })();
            </script>
            <?php }
            
            if ($anavaro_usegtwit == "on") { ?>
<!-- Load Twitter JS-API asynchronously -->
<script>
(function(){
var twitterWidgets = document.createElement('script');
twitterWidgets.type = 'text/javascript';
twitterWidgets.async = true;
twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
// Setup a callback to track once the script loads.
twitterWidgets.onload = _ga.trackTwitter;
document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
})();
</script>
            <?php }
              
    //Add special Facebook options for posts
    if ($anavaro_specialfb == "on") { ?>
    <!-- Begin FB Sharing for WP by Chad Von Lind. Get the latest code here: http://vonlind.com/?p=539  -->
<?php
    if(is_single() || is_page()) {
        $args = array(
            'numberposts' => 1,
            'order'=> 'ASC',
            'post_mime_type' => 'image',
            'post_parent' => $post->ID,
            'post_status' => null,
            'post_type' => 'attachment'
        );
        $attachments = get_children( $args );
        if (has_post_thumbnail()) {
            $domsxe = simplexml_load_string(get_the_post_thumbnail());
            $thumbnailsrc = $domsxe->attributes()->src;
            $thumb = $thumbnailsrc;
        }
        else if ($attachments) {
            foreach($attachments as $attachment) {
                $image_attributes = wp_get_attachment_image_src( $attachment->ID, 'thumbnail' )  ? wp_get_attachment_image_src( $attachment->ID, 'thumbnail' ) : wp_get_attachment_image_src( $attachment->ID, 'full' );
                    
                $thumb = wp_get_attachment_thumb_url( $attachment->ID );
                
            }
        }
        else { $thumb = get_bloginfo('stylesheet_directory').'/img/gerb143alpha.png'; }
 ?>
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php single_post_title(''); ?>" />
    <meta property="og:description" content="<?php echo $descr; ?>" />
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:image" content="<?php echo $thumb; ?>" />
<?php  } else { 
    $thumb = get_bloginfo('stylesheet_directory').'/img/gerb143alpha.png';
    ?>
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
    <meta property="og:description" content="<?php echo $descr; ?>" />
    <meta property="og:image" content="<?php echo $thumb; ?>" />
<?php  }  ?>
<!-- End FB Sharing for WP -->
<?php }
        ?>
        <script>
            // Copyright 2006-2007 javascript-array.com

            var timeout    = 500;
            var closetimer    = 0;
            var ddmenuitem    = 0;

            // open hidden layer
            function mopen(id)
            {    
                // cancel close timer
                mcancelclosetime();

                // close old layer
                if(ddmenuitem) ddmenuitem.style.display = 'none';

                // get new layer and show it
                ddmenuitem = document.getElementById(id);
                ddmenuitem.style.display = 'block';

            }
            // close showed layer
            function mclose()
            {
                if(ddmenuitem) ddmenuitem.style.display = 'none';
            }

            // go close timer
            function mclosetime()
            {
                closetimer = window.setTimeout(mclose, timeout);
            }

            // cancel close timer
            function mcancelclosetime()
            {
                if(closetimer)
                {
                    window.clearTimeout(closetimer);
                    closetimer = null;
                }
            }

            // close layer when click-out
            document.onclick = mclose; 
        </script>
        <?php if ($anavaro_fbadmins != "n/a") { ?>
        <meta property="fb:admins" content="<?php echo $anavaro_fbadmins ?>"/>
        <?php } ?>
        <?php wp_head(); ?>
		<!--// Add bootstrap //-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/bootstrap/css/bootstrap.css' ?>" type="text/css">
		<script src="<?php echo get_template_directory_uri() . '/bootstrap/js/bootstrap.js' ?>"></script>
		<!--// Add aditional JS //-->
		<script src="<?php echo get_template_directory_uri() . '/js/jquery.waypoints.min.js' ?>"></script>
		<script src="<?php echo get_template_directory_uri() . '/js/shortcuts/sticky.min.js' ?>"></script>
		<!--// Styles //-->
		<!--//<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> //-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/base.css' ?>" type="text/css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/menu.css' ?>" type="text/css">
		
    </head>
    <body <?php body_class(); ?>>
	<div class="trigger1"></div>
	<div class="container-fluid">
    <?php if ($anavaro_specialfb == "on") { ?>
        <div id="fb-root"></div>
        <script>   
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <?php } ?>
    <div id="branding" class="row">
		<div id="logo" class="col-md-3">
			<a href="<?php echo get_site_url(); ?>"><?php echo bloginfo('name'); ?></a>
		</div>
		<div id="main-nav" class="col-md-9">
			<?php wp_nav_menu(array('theme_location' => 'main_nav', 'container' => '')); ?>
		</div>
		<div class="clear"></div>
	</div>  