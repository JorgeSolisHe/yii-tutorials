<?php
$this->breadcrumbs=array(
	'Estudioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudios', 'url'=>array('index')),
	array('label'=>'Create Estudios', 'url'=>array('create')),
	array('label'=>'View Estudios', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Estudios', 'url'=>array('admin')),
);
?>

<h1>Update Estudios <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>