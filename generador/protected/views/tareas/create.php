<?php
$this->breadcrumbs=array(
	'Tareases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tareas', 'url'=>array('index')),
	array('label'=>'Manage Tareas', 'url'=>array('admin')),
);
?>

<h1>Create Tareas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>