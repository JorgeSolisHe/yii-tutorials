<?php
$this->breadcrumbs=array(
	'Vacantes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vacantes', 'url'=>array('index')),
	array('label'=>'Create Vacantes', 'url'=>array('create')),
	array('label'=>'View Vacantes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vacantes', 'url'=>array('admin')),
);
?>

<h1>Update Vacantes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>