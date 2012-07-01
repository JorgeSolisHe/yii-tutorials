<?php
$this->breadcrumbs=array(
	'Estudioses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Estudios', 'url'=>array('index')),
	array('label'=>'Create Estudios', 'url'=>array('create')),
	array('label'=>'Update Estudios', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Estudios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudios', 'url'=>array('admin')),
);
?>

<h1>View Estudios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuarios_id',
		'institucion',
		'anio_graduacion',
		'titulo',
	),
)); ?>
