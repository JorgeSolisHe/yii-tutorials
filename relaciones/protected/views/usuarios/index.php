<?php
$this->breadcrumbs=array(
	'Usuarioses',
);

$this->menu=array(
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>
<?php echo Yii::app()->user->id.'<br>';?>
<?php echo Yii::app()->user->name.'<br>';?>
<?php echo Yii::app()->user->getState('nombre').'<br>';?>
<?php echo Yii::app()->user->getState('identificacion').'<br>';?>

<?php echo Yii::t('app','Name');?>
<?php echo Yii::t('app','Car');?>

<?php 
$var=10;
echo Yii::t('app',"Save # {VAR}",array('{VAR}'=>$var));?>
<h1>Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>