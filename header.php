<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb="https://www.facebook.com/2008/fbml">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <meta name="robots" content="follow, all" />
        <!-- META DEFS -->
        <?php if (get_option('anavaro_theme_seo') == "on") { ?>
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
                        $tags = get_option('anavaro_keywords');
                    }
                }
            }
            else { $tags = get_option('anavaro_keywords'); }?>
        <meta name="keywords" content="<?php echo $tags; ?>"/>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php } ?>
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php 
        //add google plus badge link
           if (get_option('anavaro_gabadge') != "N/A") { 
            ?>

            <link href="https://plus.google.com/<?php echo get_option('anavaro_gabadge'); ?>" rel="publisher" />

            <?php }
        ?>
        <?php 
            if (get_option('anavaro_gvcode') != "n/a") { ?><meta name="verify-v1" content="<?php echo get_option('anavaro_gvcode'); ?>" /> <?php }
            if (get_option('anavaro_gacode') != "UA-XXXXXXX-X") { ?>
         <script type="text/javascript">
             var _gaq = _gaq || [];
            _gaq.push(['_setAccount', '<?php echo get_option('anavaro_gacode'); ?>']);
            _gaq.push(['_setDomainName', '.<?php echo get_option('anavaro_gatdn'); ?>']);
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
            if (get_option('anavaro_usegpo') == "on") { ?>
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
            
            if (get_option('anavaro_usegtwit') == "on") { ?>
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
    if (get_option('anavaro_specialfb') == "on") { ?>
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
        <?php if (get_option('anavaro_fbadmins') != "n/a") { ?>
        <meta property="fb:admins" content="<?php echo get_option('anavaro_fbadmins'); ?>"/>
        <?php } ?>
        <?php wp_head(); ?>
		<!--// Styles //-->
		<script>
			function writeMail(n1, n2)
			{
				var name = n1;
				var sign = '@';
				var dom = n2;
				document.write("<a href=\"mailto:" + name + sign + dom + "\">" + name + sign + dom + "</a>");

			}
		</script>
    </head>
    <body <?php body_class(); ?>>
	<div class="trigger1"></div>
    <?php if (get_option('anavaro_specialfb') == "on") { ?>
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
	<div class="container-fluid">
    <div id="branding" class="row">
		<div id="logo" class="col-md-3 center-block">
			<a href="<?php echo get_site_url(); ?>"><?php echo bloginfo('name'); ?></a>
		</div>
		<div id="main-nav" class="col-md-9 center-block">
			<?php wp_nav_menu(array('theme_location' => 'main_nav', 'container' => '')); ?>
		</div>
		<div class="clear"></div>
	</div>
	</div>