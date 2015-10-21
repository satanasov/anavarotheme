<div class="footer">
    <p>Тази тема е разработена за <a href="http://www.anavaro.com/" target="_self">anavaro.com</a> от Lucifer с огромната помощ на <a href="http://twitter.com/web_enthusast" target="_new">@web_enthusast</a></p>
    <p>Последна ревизия 0.22 на 15.06.2012 г.</p>
</div>
</div>
<!--// Test for scripts //-->
		<script>
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
			jQuery(document).ready(function($) {
				waypoint();
				dropdown();
				jQuery('.selector').change(function() {
					window.location = $(this).find("option:selected").val();
				});
			});
		</script>
</body>
</html>