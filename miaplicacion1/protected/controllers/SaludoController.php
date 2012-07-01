<?php
class SaludoController extends Controller{

	public function actionIndex(){
	
	$saludo = 'Hola Que tal como estas?';
	$this->render('index',array('saludo'=>$saludo));
	}
}