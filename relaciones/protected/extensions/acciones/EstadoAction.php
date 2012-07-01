<?php
class EstadoAction extends CAction
{

	public $model=null;
	public $redirect='index';
	public $campo='estado';

	function run()
	{
		if(empty($_GET['id']))
			throw new CHttpException(404);
			
		$model=CActiveRecord::model($this->model)->findByPk($_GET['id']);
		if($model===null)
			throw new CHttpException(404);
		$model->{$this->campo}=$model->{$this->campo}==1?0:1;
		
		if($model->update())
			$this->controller->redirect(array($this->redirect));
			
		throw new CHttpException(500);
		
	}

}
