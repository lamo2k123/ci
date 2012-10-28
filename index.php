<?php

if( getenv( 'AppMode' ) ) {

	defined( 'YII_DEBUG' ) || define( 'YII_DEBUG', true );
	defined( 'YII_TRACE_LEVEL' ) || define( 'YII_TRACE_LEVEL', 3 );

	require_once( dirname(__FILE__) . '/../../framework/yii.php' );
	Yii::createWebApplication( dirname(__FILE__) . '/protected/config/development.php' )->run();

} else {

	require_once( dirname(__FILE__) . '/../../framework/yii.php' );
	Yii::createWebApplication( dirname(__FILE__) . '/protected/config/production.php' )->run();

}


