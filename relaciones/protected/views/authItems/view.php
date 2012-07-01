<?php
$this->breadcrumbs=array(
	'Auth Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List AuthItems', 'url'=>array('index')),
	array('label'=>'Create AuthItems', 'url'=>array('create')),
	array('label'=>'Update AuthItems', 'url'=>array('update', 'id'=>$model->name)),
	array('label'=>'Delete AuthItems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AuthItems', 'url'=>array('admin')),
);
?>

<h1>View AuthItems #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'type',
		'description',
		'bizrule',
		'data',
	),
)); ?>
