<div id="sidebar-bottom-right">
	<?php 
		if (is_active_sidebar('bottom-right'))
		{
			dynamic_sidebar('bottom-right');
		}
		else
		{
			?>
			<p>Booo hooo! No widgets defined!!!
			<?php
		}
	?>
</div>