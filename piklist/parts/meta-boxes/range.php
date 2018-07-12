<?php
/*
Title: Progress
Post Type: skill, language
Order: 200
Priority: default
Context: side
*/

piklist('field', array(
	'type' => 'range',
	'field' => 'progress',
	'label' => 'Progress',
	'attributes' => array(
		'min' => 0
		,'max' => 100
		,'step' => 1
	)
));
