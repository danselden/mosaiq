<?php
	global $wpalchemy_media_access;?>

<ul class="nav nav-tabs" role="tablist">
	<li role="presentation" class="active"><a href="#general" aria-controls="home" role="tab" data-toggle="tab">General</a></li>
	<li role="presentation"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Details</a></li>
	<li role="presentation"><a href="#meetings" aria-controls="meetings" role="tab" data-toggle="tab">Meetings</a></li>
	<li role="presentation"><a href="#quotes" aria-controls="quotes" role="tab" data-toggle="tab">Quotes</a></li>
</ul>

<!-- TO CHANGE TO YOUR TEMPLATES FOR THESE SECTIONS, EITHER ELIMINATE THE FULL PATH TO THE PARENT DIRECTORY AND INCLUDE THINGS FROM THIS DIRECTORY OR CHANGE get_template_directory() to get_stylesheet_directory() -->
<div class="tab-content">
	<div role="tabpanel" class="tab-pane active" id="general">
		<?php
			// Child
			// include('_general.php');
			// Parent
			include( get_template_directory() . '/library/_prodaq/participant/_general.php' );
		?>
	</div>

	<div role="tabpanel" class="tab-pane" id="details">
		<?php
			// Child
			// include('_details.php');
			// Parent
			include( get_template_directory() . '/library/_prodaq/participant/_details.php' ); ?>
	</div>

	<div role="tabpanel" class="tab-pane" id="meetings">
		<?php
			// Child
			// include('_meetings.php');
			// Parent
			include( get_template_directory() . '/library/_prodaq/participant/_meetings.php' ); ?>
	</div>

	<div role="tabpanel" class="tab-pane" id="quotes">
		<?php 
			// Child
			// include('_quotes.php');
			// Parent
			include( get_template_directory() . '/library/_prodaq/participant/_quotes.php' ); ?>
	</div>
</div>
