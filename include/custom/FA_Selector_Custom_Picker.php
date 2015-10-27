<?php
if ( !class_exists( 'WP_Customize_Control' ) )
{
	return NULL;
}
/**
* Class to create a FA selector
*/

class FA_Selector_Custom_Picker extends WP_Customize_Control
{
	/**
	* Enqueue stylsheets and scripts
	*/
	public function enqueue()
	{
		wp_enqueue_style('font-awsome-picker-css', get_template_directory_uri() . '/fontawsome-picker/css/fontawesome-iconpicker.min.css');
		wp_enqueue_script('font-awsome-picker-js', get_template_directory_uri() . '/fontawsome-picker/js/fontawesome-iconpicker.min.js');
		wp_enqueue_script('font-awsome-picker-js-activator', get_template_directory_uri() . '/js/fa-selector.js');
	}
	public function render_content()
	{
		?>
			<label>
				<span class="customize-fa-selector-control"><?php echo esc_html( $this->label ); ?></span>
				<input type="text" id="<?php echo $this->id; ?>" name="<?php echo $this->id; ?>" value="<?php echo $this->value(); ?>" class="fa-selector" />
			</label>
		<?php
	}
}
?>