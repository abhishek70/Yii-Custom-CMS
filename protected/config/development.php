<?php
//import main configurations
$main = include("main.php");
 
// Development configurations
$development = array(
	'components' => array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sampleproject',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => '',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				/*array(
					'class'=>'CWebLogRoute',
				),*/
				
			),
		),
        ),
);
//merge both configurations and return them
return CMap::mergeArray($main, $development);