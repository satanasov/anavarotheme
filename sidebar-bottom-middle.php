<div id="sidebar-bottom-middle">
	<?php 
		if (is_active_sidebar('bottom-middle'))
		{
			dynamic_sidebar('bottom-middle');
		}
		else
		{
			?>
			<p>Booo hooo! No widgets defined!!!
			<?php
		}
	?>
</div>