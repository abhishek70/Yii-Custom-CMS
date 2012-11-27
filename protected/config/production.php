<?php
//import main configurations
$main = include("main.php");
 
// Production configurations
$production = array(
	'components' => array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=sampleproject',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => '',
		),
		'log' => array(
			'class'=>'CLogRouter',
			'routes' => array(
				// Configures Yii to email all errors and warnings to an email address
				array(
					'class' => 'CEmailLogRoute',
					'levels' => 'error, warning',
					'emails' => 'admin@example.com',
				),
			),
        ),
	)
);	
//merge both configurations
return CMap::mergeArray($main, $production);