<?php

class UsuariosController extends GSeguroController
{
	public $layout='//layouts/column2';
	
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	
	public function	filterMyFiltro($filterChain)
	{
		$filterChain->run(); // para que siga otro filtro
		$this->getId(); //nombre del controlador
	}
	
	public function filters()
	{
		return array(
			'MyFiltro + edit, create',
			array(
			'ext.filtros.MiFiltro - edit, create',
			'parametro1'=>'valordemiparametro',
			)
		);
	}
	 */

	
	public function actions()
	{
		return array(
			'estado'=>array(
			'class'=>'ext.acciones.EstadoAction',
			'model'=>'Usuarios',
			'redirect'=>'index',
			),
		);
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$id=25;
		
		$criteria=new CDbCriteria;
		#$criteria->compare("email",'gma',true);
		#$criteria->select="t.email, t.nombres, c.nombre ,t.id";
		#$criteria->condition="t.email LIKE '%gmail%' AND t.estado = 1";
		#$criteria->join="LEFT JOIN ciudad c ON c.id=t.ciudad_id ";
		$criteria->order="t.id DESC";
		#$criteria->group="";
		#$criteria->having="";
		
		#$criteria->addCondition("t.genero='H'");
		#$criteria->addInCondition("t.id",array(20,21,22));
		#$criteria->addBetweenCondition("t.id",10,20);
		#$criteria->addNotInCondition("t.id",array(11,13));
		/*
		echo '<pre>';
		print_r($criteria->toArray());
		echo '</pre>';
		*/
		
		#$criteria->compare("estado",1);
		
		$criteria->with=array('ciudad');
		$usuario=Usuarios::model()->findAll($criteria);
		/*
		$usuario=Usuarios::model()->findAll(array(
											'select'=>'t.email, t.nombres, c.nombre ,t.id',
											'join'=>"LEFT JOIN ciudad c ON c.id=t.ciudad_id ",
											'condition'=>"t.genero='H' AND t.id BETWEEN 10 AND 20",
											'order'=>"t.id DESC",
											));
		*/
		
		
		#$usuario=Usuarios::model()->findAllByPk(array(25,22,24,21));
		#$usuario=Usuarios::model()->findAllByAttributes(array('estado'=>1));
		#$sql="SELECT * FROM usuarios WHERE genero='H' ";
		#$usuario=Usuarios::model()->findAllBySql($sql);
		
		#$usuario=Usuarios::model()->find("genero='H' AND estado=1");
		#$usuario=Usuarios::model()->findByPk($id);
		#$usuario=Usuarios::model()->findByAttributes(array('genero'=>'H'));
		#$sql="SELECT * FROM usuarios WHERE genero='M' AND identificacion = '123456789' ";
		#$usuario=Usuarios::model()->findBySql($sql);
		
		
		#$usuario=Usuarios::model()->findAll("genero='H' AND estado=1");
		#$usuario=Usuarios::model()->findAllByPk(array(25,22,24,21));
		#$usuario=Usuarios::model()->findAllByAttributes(array('estado'=>1));
		#$sql="SELECT * FROM usuarios WHERE genero='H' ";
		#$usuario=Usuarios::model()->findAllBySql($sql);
		
		
		$model=new Usuarios;
		/*
		$model=Usuarios::model()->findByPk(25);
		
		$model->nombres='Otra forma de EDITAR nombres';
		$model->ciudad_id=2;
		$model->identificacion=99999999;
		$model->email='emain@gmail.co';
		$model->estado=1;
		$model->genero='H';
		$model->save();
		*/
		
		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);
		/*
		 if(isset($_POST['ajax']) && $_POST['ajax']==='usuarios-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
		*/
		
		if(isset($_POST['Usuarios']))
		{
		
			$model->attributes=$_POST['Usuarios'];
		/*
			$model->attributes=array(
			'nombres'=>'Otra forma de ingresar nombres',
			'ciudad_id'=>2,
			'identificacion'=>999,
			'email'=>'emain@gmail.com',
			'estado'=>1,
			'genero'=>'H',
			);
			if($model->validate())
				echo 'Todo se valido bien';
			else
				echo 'Epaa algun dato no esta bien';
		*/		
		
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
			'usuario'=>$usuario,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
	
		#$tareas=Tareas::model()->findAll();
		
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Usuarios']))
		{
		/*

			$model=Usuarios::model();
			$guardado=false;
			$transaction=$model->dbConnection->beginTransaction();
			try
			{
				
				$tareas=Tareas::model()->findByPk(20);
				$tareas->descripcion='Nueva descripcion';
				$tareas->save();
				
				$model->attributes=$_POST['Usuarios'];
				if($model->save())
					$guardado=true;
				
				$transaction->commit();
			}
			catch(Exception $e)
			{
				$transaction->rollBack();
			}
				if($guardado)
		*/
			$model->attributes=$_POST['Usuarios'];
				$model->password=$model->hashPassword($_POST['Usuarios']['password'],$session=$model->generateSalt());
				$model->session=$session;
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			#'tareas'=>$tareas,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
	
		// creacion del la estructura
		/*
		$auth=Yii::app()->authManager;
		$auth->createOperation('editar_usuarios','Esta operacion es para editar.');
		$tash=$auth->createTask('tarea_edicion','Esta tarea es para editar.');
		$tash->addChild('editar_usuarios');
		$role=$auth->createRole('rol_edicion','Esta tarea es para editar.');
		$role->addChild('tarea_edicion');
		*/
		
		/*
		rol  rol_edicion
			- tarea tarea_edicion
				- operacion editar_usuarios
		
		$auth->assign('rol_edicion',Yii::app()->user->id);
		
		if(Yii::app()->authManager->checkAccess('rol_edicion',Yii::app()->user->id))
		{
			echo 'SIIIIII!!!!! je je je ';
		}else
			echo 'NOOOOOOOOOO!!!  ha ha ha ha ha ha';
		
		*/
		
		
		$dataProvider=new CActiveDataProvider('Usuarios');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Usuarios('search');
		$model->unsetAttributes();  // clear any default values
		
		
		if(isset($_GET['Usuarios'])){
			$model->attributes=$_GET['Usuarios'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Usuarios::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='usuarios-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
