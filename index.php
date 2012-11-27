<?php

// include Website Mode 
include(dirname(__FILE__).'/protected/config/mode.php');

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yiiframework/yii.php';

if(YII_MODE=="DEVELOPMENT")
{
	$config=dirname(__FILE__).'/protected/config/development.php';

	// remove the following lines when in production mode
	defined('YII_DEBUG') or define('YII_DEBUG',true);
	
	// specify how many levels of call stack should be shown in each log message
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}
else if(YII_MODE=="PRODUCTION")
{
	$config=dirname(__FILE__).'/protected/config/production.php';
}

require_once($yii);
Yii::createWebApplication($config)->run();
