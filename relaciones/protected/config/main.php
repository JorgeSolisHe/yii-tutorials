<?php

// uncomment the following to define a path alias
 Yii::setPathOfAlias('gus',dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'extensions'.DIRECTORY_SEPARATOR.'gustavo');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Relaciones en Yii',
	'language'=>'es',
	'sourceLanguage'=>'en',
	'charset'=>'utf-8',
	'theme'=>'plantilla1',
	
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
			'generatorPaths'=>array('application.modules.gii')
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'widgetFactory' => array(
		'widgets' => array(
			'CGridView' => array(
				'cssFile' =>false,
				'pager' =>array('cssFile' =>false),
				'pagerCssClass' =>'pagination',
				'rowCssClass'=>array('light','dark'),
				'itemsCssClass'=>'table table-bordered table-condensed table-striped',
			),
			'CListView' =>array(
				'cssFile' =>false,
				'pager' =>array('cssFile' =>false),
				'pagerCssClass' =>'pagination',
				
			),
			'CDetailView' =>array(
				'cssFile' =>false,
				'htmlOptions'=>array('class'=>'table table-bordered table-condensed table-striped'),
			),
			/*
			'CLinkPager' =>array(
			),
			*/
		)
		),
		
		 'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
            'itemTable'=>'auth_items',
            'itemChildTable'=>'auth_relacion',
            'assignmentTable'=>'auth_asignacion',
        ),
		
		
		'urlManager'=>array(
			'class'=>'application.components.MyCUrlManager',
			'urlFormat'=>'path',
			'showScriptName'=>false,
			#'urlSuffix'=>'.asp',
			'rules'=>array(
				#'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				#'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<lg>/<controller:\w+>/<action:\w+>/<id>/<title>'=>'<controller>/<action>',
				'<lg>/<controller:\w+>/<action:\w+>/<id>'=>'<controller>/<action>',
				'<lg>/<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				#'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=datos2',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'enableProfiling'=>true,
		),
		
		'db1'=>array(
			'class' => 'CDbConnection',
			'connectionString' => 'mysql:host=localhost;dbname=datos1',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'enableProfiling'=>true,
		),
		
		'coreMessages'=>array(
			'basePath'=>'protected/messages'
		),
		
		// 'messages'=>array(
			// 'onMissingTranslation'=>array('GMensajes','getNecesitoTraduccion')
		// ),
		
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
				/*
				array(
					'class'=>'CWebLogRoute',
					'categories' => 'system.db.CDbCommand.query',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'micorreo@gmail.com',
		'empresa'=>'Empresa de servicios',
		'slogan'=>'Administramos sus empleados',
		'twiter'=>'@gsalgadotoledo',
	),
);

























