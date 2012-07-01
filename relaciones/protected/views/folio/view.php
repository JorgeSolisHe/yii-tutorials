<?php
$this->breadcrumbs=array(
	'Folios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Folio', 'url'=>array('index')),
	array('label'=>'Create Folio', 'url'=>array('create')),
	array('label'=>'Update Folio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Folio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Folio', 'url'=>array('admin')),
);
?>

<h1>View Folio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuarios_id',
		'lugar',
		'psicologica',
		'tecnica',
		'entrevista',
		'puntaje',
	),
)); ?>
