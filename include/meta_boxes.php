<?php
	function anavaro_meta_init()
	{
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
		$post_type = $_GET['post_type'];

		add_meta_box('anavaro_add_title_setup', __('Add user title', 'anavaro'), 'anavaro_add_title_setup', 'info', 'normal', 'high');
		add_meta_box('anavaro_prime_contacts_setup', __('Add user primary contacts', 'anavaro'), 'anavaro_prime_contacts_setup', 'info', 'normal', 'high');
		add_meta_box('anavaro_secondary_contacts_setup', __('Add user secondary contacts', 'anavaro'), 'anavaro_secondary_contacts_setup', 'info', 'normal', 'high');
		add_meta_box('anavaro_projects_setup', __('Add projects', 'anavaro'), 'anavaro_projects_setup', 'info', 'normal', 'high');
		add_meta_box('anavaro_work_setup', __('Add work', 'anavaro'), 'anavaro_work_setup', 'info', 'normal', 'high');
	}

	/**
	* Add title
	*/
	function anavaro_add_title_setup()
	{
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		$title = get_post_meta($post_id, 'usertitle', true);
		echo '<input type="hidden" name="anavaro_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
		echo '<input type="text" name="usertitle" id="usertitle" value="' . $title . '" placeholder="User title ..." size="45">';
	}

	/**
	* Add prime contacts
	*/
	function anavaro_prime_contacts_setup()
	{
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		echo '<div id="postcustomstuff">';
		echo '<table class="contact-table">';
		echo '<thead><tr><th class="left"><label for="project">Contact type</label></th><th>Contact</th><th>Extra</th></tr></thead>';
		_e('Extra field for URL is the visualisation and for Mail - the GPG public key link', 'anavaro');
		$contacts = get_post_meta($post_id, 'contacts', true);
		$counter = 0;
		if ($contacts)
		{
			foreach($contacts as $contact)
			{
				echo '<tr>';
				echo '<td>';
					echo '<select id="contacts['.$counter.'][type]" name="contacts['.$counter.'][type]">';
						echo '<option value="phone"' .($contact['type'] == 'phone' ? ' SELECTED' : ''). '>Phone</value>';
						echo '<option value="mail"' .($contact['type'] == 'mail' ? ' SELECTED' : ''). '>Mail</value>';
						echo '<option value="url"' .($contact['type'] == 'url' ? ' SELECTED' : ''). '>URL</value>';
					echo '</select>';
				echo '</td>';
				echo '<td>';
					echo '<input type="text" name="contacts['.$counter.'][value]" name="contacts['.$counter.'][value]" value="'.$contact['value'].'">';
				echo '</td>';
				echo '<td>';
					echo '<input type="text" name="contacts['.$counter.'][extra]" name="contacts['.$counter.'][extra]" value="'.$contact['extra'].'">';
				echo '</td>';
				echo '</tr>';
				$counter++;
			}
		}
		else
		{
			echo '<tr>';
				echo '<td>';
					echo '<select id="contacts[0][type]" name="contacts[0][type]">';
						echo '<option value="phone">Phone</value>';
						echo '<option value="mail">Mail</value>';
						echo '<option value="url">URL</value>';
					echo '</select>';
				echo '</td>';
				echo '<td>';
					echo '<input type="text" name="contacts[0][value]" name="contacts[0][value]">';
				echo '</td>';
				echo '<td>';
					echo '<input type="text" name="contacts[0][extra]" name="contacts[0][extra]">';
				echo '</td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '<button class="contactadd">Add primary contact</button></div>';
		?>
		<script>
			counter = <?php echo $counter; ?>;
			jQuery('.contactadd').click(function( event ) {
				event.preventDefault();
				jQuery('.contact-table').append('<tr><td><select id="contacts[' + (counter + 1) +'][type]" name="contacts[' + (counter + 1) +'][type]"><option value="phone">Phone</value><option value="mail">Mail</value><option value="url">URL</value></select></td><td><input type="text" name="contacts[' + (counter + 1) +'][value]" name="contacts[' + (counter + 1) +'][value]"></td><td><input type="text" name="contacts[' + (counter + 1) +'][extra]" name="contacts[' + (counter + 1) +'][extra]"></td></tr>');
				counter++;
		});
		</script>
		<?php
	}
	/**
	* Add secondary contacts support
	*/
	function anavaro_secondary_contacts_setup()
	{
		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.js');
		wp_enqueue_script('fapjs', get_template_directory_uri() . '/fapicker/js/fontawesome-iconpicker.js');
		wp_enqueue_script('scrs', get_template_directory_uri() . '/js/adm.js');
		wp_enqueue_style('font-awesome', get_template_directory_uri() . '/fontawesome/css/font-awesome.min.css'); 
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css'); 
		wp_enqueue_style('fap', get_template_directory_uri() . '/fapicker/css/fontawesome-iconpicker.css'); 
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		echo '<div id="postcustomstuff">';
		echo '<table class="sec-contact-table">';
		echo '<thead><tr><th class="left"><label for="project">Contact type</label></th><th>Contact</th></tr></thead>';
		$contacts = get_post_meta($post_id, 'secondary_contacts', true);
		$counters = 0;
		if ($contacts)
		{
			foreach ($contacts as $contact)
			{
				echo '<tr>
						<td><input type="text" name="secondary_contacts[' . $counters . '][type]" name="secondary_contacts[' . $counters . '][type]" class="selector" value="' . $contact['type'] . '">
						</td>
						<td><input type="text" name="secondary_contacts[' . $counters . '][value]" name="secondary_contacts[' . $counters . '][value]" value="' . $contact['value'] . '"></td>
					</tr>';
				$counters++;
			}
		}
		else
		{
			echo '<tr>
					<td><input type="text" name="secondary_contacts[0][type]" name="secondary_contacts[0][type]" class="selector">
					</td>
					<td><input type="text" name="secondary_contacts[0][value]" name="secondary_contacts[0][value]"></td>
				</tr>';
		}
		echo '</table>';
		echo '<button class="scontactadd">Add secondary contact</button></div>';
		?>
		<script>
			counters = <?php echo $counters; ?>;
			jQuery('.scontactadd').click(function( event ) {
				event.preventDefault();
				jQuery('.sec-contact-table').append('<tr>' +
					'<td><input type="text" name="secondary_contacts[' + (counters + 1) + '][type]" name="secondary_contacts[' + (counters + 1) + '][type]" class="selector">' +
					'<td><input type="text" name="secondary_contacts[' + (counters + 1) + '][value]" name="secondary_contacts[' + (counters + 1) + '][value]"></td>' +
				'</tr>');
				jQuery('.selector').iconpicker();
				counters++;
			});
		</script>
		<?php
	}
	/**
	* Add project table
	*/
	function anavaro_projects_setup() {
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		echo '<div id="postcustomstuff">';
		echo '<table class="form-table">';
		echo '<thead><tr><th class="left"><label for="project">Project</label></th><th>Project description</th></tr></thead>';
		_e('Project description supports <i>HTML</i>', 'anavaro');
		$projects = get_post_meta($post_id, 'project', true);
		$counter = 0;
		if ($projects)
		{
			foreach ($projects as $project)
			{
				echo '<tr><td><label for="projectname">Project name</label><br><input type="text" id="project[' . $counter . '][name]" name="project[' . $counter . '][name]" value="' . $project['name'] .'"><br><label for="projecturl">Project URL</label><br><input type="url" id="project[' . $counter . '][url]" name="project[' . $counter . '][url]" value="' . $project['url'] .'"></td><td><label for="projectdesc">Project Description<br/></label><textarea name="project[' . $counter . '][desc]" id="project[' . $counter . '][desc]" value="" cols="90" rows="3"/>' . $project['desc'] .'</textarea></td></tr>';
				$counter++;
			}
		}
		else
		{
			echo '<tr><td><label for="projectname">Project name</label><br><input type="text" id="project[0][name]" name="project[0][name]"><br><label for="projecturl">Project URL</label><br><input type="url" id="project[0][url]" name="project[0][url]"></td><td><label for="projectdesc">Project Description<br/></label><textarea name="project[0][desc]" id="project[0][desc]" value="" cols="90" rows="3"/></textarea></td></tr>';
		}
		echo '</table>';
		echo '<button class="elementadd">Add new project</button></div>';
		?>
		<script>
			counter = <?php echo $counter; ?>;
			jQuery('.elementadd').click(function( event ) {
				event.preventDefault();
				jQuery('.form-table').append('<tr><td><label for="projectname">Project name</label><br><input type="text" id="project[' + ( counter + 1) + '][name]" name="project[' + ( counter + 1) + '][name]"><br><label for="projecturl">Project URL</label><br><input type="url" id="project[' + ( counter + 1) + '][url]" name="project[' + ( counter + 1) + '][url]"></td><td><label for="projectdesc">Project Description<br/><textarea name="project[' + ( counter + 1) + '][desc]" id="project[' + ( counter + 1) + '][desc]" value=""  cols="90" rows="3"/></textarea></td></tr>');
				counter++;
		});
		</script>
		<?php
	}
	/*
	* Add work and qualifications
	*/
	function anavaro_work_setup()
	{
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		echo '<div id="postcustomstuff">';
		echo '<table class="work-table">';
		echo '<thead><tr><th class="left"><label for="project">Time</label></th><th>Info</th></tr></thead>';
		_e('Date fields are normal text fields.<br />Description supports <i>HTML</i>', 'anavaro');
		$work = get_post_meta($post_id, 'work', true);
		$counter = 0;
		if ($work)
		{
			foreach ($work as $var)
			{
				echo '<tr>
					<td>
						<label for="workstart">' . __('Start date', 'anavaro') . '</label><br />
						<input type="text" id="work[' . $counter . '][start]" name="work[' . $counter . '][start]" value="' . $var['start'] . '"/>
						<label for="workend">' . __('End date', 'anavaro') . '</label><br />
						<input type="text" id="work[' . $counter . '][end]" name="work[' . $counter . '][end]" value="' . $var['end'] . '"/>
					</td>
					<td>
						<label for="position">' . __('Position', 'anavaro') . '</label><br />
						<input type="text" id="work[' . $counter . '][position]" name="work[' . $counter . '][position]" value="' . $var['position'] . '" />
						<label for="company">' . __('Company name', 'anavaro') . '</label><br />
						<input type="text" id="work[' . $counter . '][company]" name="work[' . $counter . '][company]" value="' . $var['company'] . '" /><br />
						<label for="jobdesc">' . __('Job Description', 'anavaro') . '</label><br />
						<textarea name="work[' . $counter . '][desc]" id="work[' . $counter . '][desc]" cols="90" rows="3"/>' . $var['desc'] . '</textarea>
					</td>
				</tr>';
				$counter++;
			}
		}
		else
		{
			echo '<tr>
				<td>
					<label for="workstart">' . __('Start date', 'anavaro') . '</label><br />
					<input type="text" id="work[0][start]" name="work[0][start]" />
					<label for="workend">' . __('End date', 'anavaro') . '</label><br />
					<input type="text" id="work[0][end]" name="work[0][end]" />
				</td>
				<td>
					<label for="position">' . __('Position', 'anavaro') . '</label><br />
					<input type="text" id="work[0][position]" name="work[0][position]" />
					<label for="company">' . __('Company name', 'anavaro') . '</label><br />
					<input type="text" id="work[0][company]" name="work[0][company]" /><br />
					<label for="jobdesc">' . __('Job Description', 'anavaro') . '</label><br />
					<textarea name="work[0][desc]" id="work[0][desc]" cols="90" rows="3"/></textarea>
				</td>
			</tr>';
		}
		echo '</table>';
		echo '<button class="jobadd">Add new job</button></div>';
		?>
		<script>
			jcounter = <?php echo $counter; ?>;
			jQuery('.jobadd').click(function( event ) {
				event.preventDefault();
				jQuery('.work-table').append('<tr>' +
					'<td>' + 
						'<label for="workstart"><?php  _e('Start date', 'anavaro'); ?></label><br />' + 
						'<input type="Text" id="work[' + ( jcounter + 1) + '][start]" name="work[' + ( jcounter + 1) + '][start]" />' +
						'<label for="workend"><?php  _e('End date', 'anavaro'); ?></label><br />' +
						'<input type="text" id="work[' + ( jcounter + 1) + '][end]" name="work[' + ( jcounter + 1) + '][end]" />' +
					'</td>' +
					'<td>' +
						'<label for="position"><?php  _e('Position', 'anavaro'); ?></label><br />' +
						'<input type="text" id="work[' + ( jcounter + 1) + '][position]" name="work[' + ( jcounter + 1) + '][position]" />' +
						'<label for="company"><?php  _e('Company name', 'anavaro'); ?></label><br />' +
						'<input type="text" id="work[' + ( jcounter + 1) + '][company]" name="work[' + ( jcounter + 1) + '][company]" /><br />' +
						'<label for="jobdesc"><?php  _e('Job Description', 'anavaro'); ?></label><br />' +
						'<textarea name="work[' + ( jcounter + 1) + '][desc]" id="work[' + ( jcounter + 1) + '][desc]" cols="90" rows="3"/></textarea>' +
					'</td>' +
				'</tr>');
				jcounter++;
		});
		</script>
		<?php
	}
	function anavaro_meta_save($post_id) {
		if (!wp_verify_nonce($_POST['anavaro_meta_box_nonce'], basename(__FILE__)))
		{
			return $post_id;
		}
		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		{
			return $post_id;
		}
		if ('page' == $_POST['post_type'])
		{
			if (!current_user_can('edit_page', $post_id))
			{
				return $post_id;
			}
		}
		elseif (!current_user_can('edit_post', $post_id))
		{
			return $post_id;
		}
		// Save user title
		$title = $_POST['usertitle'];
		update_post_meta($post_id, 'usertitle', $title);
		
		// Save prime contacts
		$contacts = $_POST['contacts'];
		foreach($contacts as $ID => $contact)
		{
			if ($contact['value'] == '')
			{
				unset($contacts[$ID]);
			}
		}
		if (!empty($contacts))
		{
			update_post_meta($post_id, 'contacts', $contacts);
		}
		else
		{
			delete_post_meta($post_id, 'contacts');
		}
		// Save secondary contacts
		$secondary_contacts = $_POST['secondary_contacts'];
		foreach($secondary_contacts as $ID => $secondary_contact)
		{
			if ($secondary_contact['value'] == '')
			{
				unset($secondary_contacts[$ID]);
			}
		}
		if (!empty($secondary_contacts))
		{
			update_post_meta($post_id, 'secondary_contacts', $secondary_contacts);
		}
		else
		{
			delete_post_meta($post_id, 'secondary_contacts');
		}
		// Save projects
		$projects = $_POST['project'];
		foreach ($projects as $ID => $project)
		{

			if ($project['name'] == '' && $project['url'] == '' && $project['desc'] == '')
			{
				unset($projects[$ID]);
			}
		}
		if (!empty($projects))
		{
			update_post_meta($post_id, 'project', $projects);
		}
		else
		{
			delete_post_meta($post_id, 'project');
		}
		// Save work form
		$works = $_POST['work'];
		foreach ($works as $ID => $work)
		{
			if ($work['position'] == '' && $work['company'] == '' && $work['desc'] == '')
			{
				unset($works[$ID]);
			}
		}
		if (!empty($works))
		{
			update_post_meta($post_id, 'work', $works);
		}
		else
		{
			delete_post_meta($post_id, 'work');
		}
	}
?>