<?php

Yii::setPathOfAlias('chartjs', dirname(__FILE__).'/../extensions/yii-chartjs');
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',

	'name'=>'asea',
    //'themeManager'=>'classic',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
		'application.extensions.phpCAS.phpCAS',
		'application.extensions.phpCAS.CAS.*',
	),

	'modules'=>array(
		'admin',
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'loginUrl' => array('/site/login'),
			'class' => 'WebUser',
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			//'showScriptName' => false,//index.php
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
           /*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		), */
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			//'connectionString' => 'mysql:host=yf-imdp-db02.yf01.baidu.com;dbname=kenan_dashboard;port=8307',
			'connectionString' => 'mysql:host=127.0.0.1;dbname=msa_dashboard',
			'emulatePrepare' => true,
			'username' => 'root',
			//'password' => 'msa_rd',
			'password' => '123456',
			'charset' => 'utf8',
		    'tablePrefix' => 'kenan_',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				array(
					'class'=>'CWebLogRoute',
					'levels'=>'trace, info, error, warning',
					'categories' => 'system.db.*',
					//'showInFireBug' => true, 灏嗗湪firebug涓樉绀烘棩蹇�				),
				// uncomment the following to show log messages on web pages
				
				
				/**/
			),
		),
	),

	
),
// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@dd.com',
		'asea_param' =>require(dirname(__FILE__) . '/asea_param.php'),
		'cmatch_param' =>require(dirname(__FILE__) . '/cmatch_param.php'),
		'sys_param' =>require(dirname(__FILE__) . '/sys_param.php'),
	),
	'language'=>'zh_cn',
);
