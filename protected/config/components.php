<?php

return array(

	'user' => array(
		'class' 			=> 'RWebUser',
		'allowAutoLogin' 	=> true,
		'loginUrl' 			=> array( '/user/login' ),
	),

	'authManager'=>array(
		'class'			=> 'RDbAuthManager',
		'defaultRoles' 	=> array( 'Guest' ),
	),

	// uncomment the following to enable URLs in path-format
	/*
	'urlManager'=>array(
		'urlFormat'=>'path',
		'rules'=>array(
			'<controller:\w+>/<id:\d+>'=>'<controller>/view',
			'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
		),
	),
	*/

	'db' => array(
		'connectionString' 		=> 'mysql:host=localhost;dbname=ci',
		'emulatePrepare' 		=> true,
		'username' 				=> 'root',
		'password' 				=> 'vertrigo',
		'charset' 				=> 'utf8',
		'tablePrefix' 			=> 'tbl_',
		'enableProfiling'		=> true,
		'enableParamLogging'	=> true,
	),

	'errorHandler' => array(
		'errorAction' => 'site/error',
	),

	'log' => array(
		'class'		=> 'CLogRouter',
		'routes'	=> array(
			array(
				'class'		=> 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
				'ipFilters'	=> array( '127.0.0.1' ),
			),
		),
	),
);