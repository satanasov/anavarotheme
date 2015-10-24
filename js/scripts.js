(function($) {			
	// Let's make the small menus
	function dropdown()
	{
		jQuery('<select />').appendTo('#main-nav');
		jQuery('<option />', {
			slected: 'selected',
			value: '',
			text: 'Go to...'
		}).appendTo('#main-nav select');
		jQuery('#main-nav select').addClass('selector')
		jQuery('#main-nav select').addClass('center-block')
		// Populating dropdawn
		jQuery('#main-nav ul li').each(function() {
			var el = jQuery(this);
			var elements = jQuery(el).children().length;
			jQuery(el).children().each(function() {
				var child = jQuery(this);
				if (jQuery(child)[0].tagName == 'A')
				{
					var prep = '';
					if (jQuery(child).parent().parent().hasClass('sub-menu')) {
						prep = '--> '
					}
					if (jQuery(child).parent().parent().parent().parent().hasClass('sub-menu')) {
						prep = '---> '
					}
					if (jQuery(child).parent().parent().parent().parent().parent().parent().hasClass('sub-menu')) {
						prep = '----> '
					}
					jQuery('<option />', {
						value: child.attr('href'),
						text: prep + child.text()
					}).appendTo('#main-nav select');
				}
			})

			//console.log(jQuery(el).children().get(0).tagName);
		});
	}
	function waypoint()
	{
		stick_me = new Waypoint({
			element: jQuery('.trigger1'),
			handler: function() {
				if (jQuery('#branding').hasClass('stuck'))
				{
					jQuery('#branding').removeClass('stuck');
				}
				else
				{
					jQuery('#branding').addClass('stuck');
				}
				//alert('test');
			}
		});
	}
	var current = 0;
	var carouselTimer = null;
	function carousel()
	{
		carouselTimer = setTimeout(function () {
			switch (current)
			{
				case 0:
					if (jQuery('#image5').is(':visible'))
					{
						jQuery('#image5').slideToggle('slow');
						jQuery('#image1').slideToggle('slow');
					}
					current = 1;
					console.log(current);
				break;
				case 1:
					jQuery('#image1').slideToggle('slow');
					jQuery('#image2').slideToggle('slow');
					current = 2;
					console.log(current);
				break;
				case 2:
					jQuery('#image2').slideToggle('slow');
					jQuery('#image3').slideToggle('slow');
					current = 3;
					console.log(current);
				break;
				case 3:
					jQuery('#image3').slideToggle('slow');
					jQuery('#image4').slideToggle('slow');
					current = 4;
				break;
				default:
					jQuery('#image4').slideToggle('slow');
					jQuery('#image5').slideToggle('slow');
					current = 0;
			}
			carousel();
		},10000);
	}
	jQuery(document).ready(function($) {
		waypoint();
		dropdown();
		jQuery('.selector').change(function() {
			window.location = $(this).find("option:selected").val();
		});
		carousel();
	});
})( jQuery );