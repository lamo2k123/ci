<?php

return array(

	'user' => array(
		'hash' 					=> 'md5',
		'sendActivationMail' 	=> true,
		'loginNotActiv' 		=> false,
		'activeAfterRegister' 	=> false,
		'autoLogin' 			=> true,
		'registrationUrl' 		=> array( '/user/registration' ),
		'recoveryUrl' 			=> array( '/user/recovery' ),
		'loginUrl' 				=> array( '/user/login' ),
		'returnUrl' 			=> array( '/user/profile' ),
		'returnLogoutUrl' 		=> array( '/user/login' ),

	),

	'rights',

	'gii' => array(
		'class'		=> 'system.gii.GiiModule',
		'password'	=> '123',
		'ipFilters'	=> array( '127.0.0.1', '::1' ),
	),

);