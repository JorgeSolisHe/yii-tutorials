<?php
$this->breadcrumbs=array(
	'Vacantes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Vacantes', 'url'=>array('index')),
	array('label'=>'Create Vacantes', 'url'=>array('create')),
	array('label'=>'Update Vacantes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vacantes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vacantes', 'url'=>array('admin')),
);
?>

<h1>View Vacantes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
	),
)); ?>
