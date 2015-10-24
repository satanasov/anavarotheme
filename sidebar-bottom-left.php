<div id="sidebar-bottom-left">
	<?php 
		if (is_active_sidebar('bottom-left'))
		{
			dynamic_sidebar('bottom-left');
		}
		else
		{
			?>
			<p>Booo hooo! No widgets defined!!!
			<?php
		}
	?>
</div>