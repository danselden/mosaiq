<?php
// Override function from parent that defines MetaBox and template
function addCampaignMetabox(){
	$campaignData = new WPAlchemy_MetaBox(array
		(
			'id' => '_campaign_data',
			'mode' => WPALCHEMY_MODE_EXTRACT,
			'prefix' => '_campaign_',
			'title' => 'Campaign Information',
			'types' => array('campaign'),
			'context' => 'normal', // same as above, defaults to "normal"
			'priority' => 'high', // same as above, defaults to "high"
			'template' => get_stylesheet_directory() . '/library/_prodaq/campaign/campaign-base.php'
		));
}
