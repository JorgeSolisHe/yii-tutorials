<?php

class GCronController extends Controller
{
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			
			array('allow',  // allow all users to perform 'index' and 'view' actions
			
				#'actions'=>array('estado'),
				#'controllers'=>array('usuarios','experiencia'),
				#'users'=>array('?'),
				'ips'=>array('111.222.333'), // ip de mi servidor
				#'roles'=>array('demo'),
				#'verbs'=>array('GET','POST'),
				#'expression'=>$this->getNombres(),
			),
			
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'users'=>array('*'),
			),
		);
	}
	
}
