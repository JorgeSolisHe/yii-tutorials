<?php

class GSeguroController extends Controller
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
			/*
			array('deny',  // allow all users to perform 'index' and 'view' actions
			
				#'actions'=>array('estado'),
				#'controllers'=>array('usuarios','experiencia'),
				#'users'=>array('?'),
				#'ips'=>array('111.222.333'),
				#'roles'=>array('rol_edicion'),
				#'verbs'=>array('GET','POST'),
				#'expression'=>$this->getNombres(),
			),
			*/
		
			
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	function getNombres()
	{
		/*
		puedes consultar en la db
		*/
		return '$user->name=="admin"';
	}
}
