<?php
$this->breadcrumbs=array(
	'Tareases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tareas', 'url'=>array('index')),
	array('label'=>'Create Tareas', 'url'=>array('create')),
	array('label'=>'View Tareas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tareas', 'url'=>array('admin')),
);
?>

<h1>Update Tareas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>