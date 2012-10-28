<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'		=> dirname(__FILE__) . '/..',
	'name'			=> 'My Web Application',

	'preload'		=> array('log'),

	'import' 		=> require_once( dirname(__FILE__) . '/import.php' ),

	'modules'		=> require_once( dirname(__FILE__) . '/modules.php' ),

	'components'	=> require_once( dirname(__FILE__) . '/components.php' ),


	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);