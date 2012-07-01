<?php
$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Categorias', 'url'=>array('index')),
	array('label'=>'Create Categorias', 'url'=>array('create')),
	array('label'=>'Update Categorias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Categorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categorias', 'url'=>array('admin')),
);
?>

<h1>View Categorias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
