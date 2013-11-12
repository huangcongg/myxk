<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'myxk',
    'language'=>'zh_cn',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.modules.admin.controllers.*',
        'bootstrap.helpers.TbHtml',
        'application.extensions.PHPExcel.*',
    ),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

//		'gii'=>array(
//			'class'=>'system.gii.GiiModule',
//			'password'=>'123456',
//			// If removed, Gii defaults to localhost only. Edit carefully to taste.
//			'ipFilters'=>array('127.0.0.1','::1'),
//		),
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
            'generatorPaths'=>array(  //添加一个gii检索的路径
                'bootstrap.gii',
            ),
        ),
        'admin' => array(
            'modules' => array(
                'auth',
            ),
        ),



    ),

	// application components
	'components'=>array(
        // uncomment the following to use a MySQL database
        'db'=>array(
            'connectionString' => 'mysql:host=192.168.1.33;dbname=manyouxingkong',	#117.184.88.30
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '123',
            'charset' => 'utf8',
		'enableParamLogging'=>true,
        ),
//        'authManager' => array(
//            'class' => 'CDbAuthManager',
//            'connectionID' => 'db',
//            'behaviors' => array(
//                'auth' => array(
//                    'class' => 'admin.modules.auth.components.AuthBehavior',
//                ),
//            ),
//        ),

        'authManager' => array(
            'class' => 'CDbAuthManager',
            'connectionID' => 'db',
            'behaviors' => array(
                'auth' => array(
                    'class' => 'admin.modules.auth.components.AuthBehavior',
                ),
            ),
        ),



        'user'=>array(
            'stateKeyPrefix' =>'member',
            'allowAutoLogin'=>true,//这里设置允许cookie保存登录信息，一边下次自动登录
        ),
        'bootstrap'=>array(
            'class'=>'bootstrap.components.Bootstrap',
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
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),




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
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
