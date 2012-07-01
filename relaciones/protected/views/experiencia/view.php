<?php
$this->breadcrumbs=array(
	'Experiencias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Experiencia', 'url'=>array('index')),
	array('label'=>'Create Experiencia', 'url'=>array('create')),
	array('label'=>'Update Experiencia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Experiencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experiencia', 'url'=>array('admin')),
);
?>

<h1>View Experiencia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuarios_id',
		'usuarios.nombres',
		'empresa',
		'inicio',
		'finalizacion',
		'jefe',
	),
)); ?>
