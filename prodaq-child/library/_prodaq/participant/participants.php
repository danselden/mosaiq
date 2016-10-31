<?php
// Override function from parent that defines MetaBox and template
function addParticipantMetabox(){
	$participantData = new WPAlchemy_MetaBox(array
		(
			'id' => '_participant_data',
			'mode' => WPALCHEMY_MODE_EXTRACT,
			'prefix' => '_participant_',
			'title' => 'Participant Information',
			'types' => array('participant'),
			'context' => 'normal', // same as above, defaults to "normal"
			'priority' => 'high', // same as above, defaults to "high"
			'template' => get_stylesheet_directory() . '/library/_prodaq/participant/participant-base.php'
		));
}
