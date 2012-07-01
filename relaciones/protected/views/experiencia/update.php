<?php
$this->breadcrumbs=array(
	'Experiencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experiencia', 'url'=>array('index')),
	array('label'=>'Create Experiencia', 'url'=>array('create')),
	array('label'=>'View Experiencia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Experiencia', 'url'=>array('admin')),
);
?>

<h1>Update Experiencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>