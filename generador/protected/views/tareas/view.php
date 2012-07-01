<?php
$this->breadcrumbs=array(
	'Tareases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tareas', 'url'=>array('index')),
	array('label'=>'Create Tareas', 'url'=>array('create')),
	array('label'=>'Update Tareas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tareas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tareas', 'url'=>array('admin')),
);
?>

<h1>View Tareas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
	),
)); ?>
