<?php

return array(

	'user' => array(
		'class' 			=> 'RWebUser',
		'allowAutoLogin' 	=> true,
		'loginUrl' 			=> array( '/user/login' ),
	),

	'authManager' => array(
		'class'			=> 'RDbAuthManager',
		'defaultRoles' 	=> array( 'Guest' ),
	),

	'urlManager' => array(
		'urlFormat' 		=> 'path',
		'showScriptName'	=> false,
	),

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