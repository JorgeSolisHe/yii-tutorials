<?php
class TareasController extends Controller{

	public function actionIndex(){
		$tareas=Tareas::model()->findAll();
		$this->render('index',array('tareas'=>$tareas));
	}
	
	public function actionView($id){
		$model = Tareas::model()->findByPk($id);
		$this->render('view',array('model'=>$model));
	}
	
	public function actionEdit($id){
		$model=Tareas::model()->findByPk($id); // esto es como hacer un select de tu registro con limit 1
		
		if(isset($_POST['Tareas'])){ // valkidamos si trae algun valor en el formulario
		
		$model->attributes=$_POST['Tareas']; // se asignan los valores del formulario a la clase modelo
		
		if($model->save()) // esto es como hacer un UPDATE tareas... WHERE id = {el ide que trae la accion}
			$this->redirect(array('view','id'=>$model->id)); // esto es como hacer un header location en el caso que guarde
		}
		$this->render('edit',array('model'=>$model));
	}
	
	
	public function actionAdd(){
		$model=new Tareas();
		if(isset($_POST['Tareas'])){ // valkidamos si trae algun valor en el formulario
		
		$model->attributes=$_POST['Tareas']; // se asignan los valores del formulario a la clase modelo
		
		if($model->save()) // esto es como hacer un UPDATE tareas... WHERE id = {el ide que trae la accion}
			$this->redirect(array('view','id'=>$model->id)); // esto es como hacer un header location en el caso que guarde
		}
		$this->render('add',array('model'=>$model));
	}
	
	public function actionDelete($id){
		$model=Tareas::model()->findByPk($id);
		$model->delete();
		$this->redirect(array('index'));
	}
}