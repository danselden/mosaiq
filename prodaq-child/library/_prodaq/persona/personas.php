<?php
// Override function from parent that defines MetaBox and template
function addPersonaMetabox(){
	$personaData = new WPAlchemy_MetaBox(array
		(
			'id' => '_persona_data',
			'mode' => WPALCHEMY_MODE_EXTRACT,
			'prefix' => '_persona_',
			'title' => 'Persona Information',
			'types' => array('persona'),
			'context' => 'normal', // same as above, defaults to "normal"
			'priority' => 'high', // same as above, defaults to "high"
			'template' => get_stylesheet_directory() . '/library/_prodaq/persona/persona-base.php'
		));
}
