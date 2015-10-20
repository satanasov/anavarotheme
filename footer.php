<div class="footer">
    <p>Тази тема е разработена за <a href="http://www.anavaro.com/" target="_self">anavaro.com</a> от Lucifer с огромната помощ на <a href="http://twitter.com/web_enthusast" target="_new">@web_enthusast</a></p>
    <p>Последна ревизия 0.22 на 15.06.2012 г.</p>
</div>
</div>
<!--// Test for scripts //-->
		<script>
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
			});
		</script>
</body>
</html>