<?php

require ('carousel.php');
add_action('customize_register','anavaro_customize_carousel');
require ('3colfeat.php');
add_action('customize_register','anavaro_customize_feature');
require ('settings.php');
add_action('customize_register','anavaro_customize_settings');
?>