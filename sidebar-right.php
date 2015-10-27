<div id="sidebar-right">
	<?php 
		if (is_active_sidebar('right'))
		{
			dynamic_sidebar('right');
		}
		else
		{
			?>
			<p>Booo hooo! No widgets defined!!!
			<?php
		}
	?>
</div>