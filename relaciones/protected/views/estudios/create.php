<?php
$this->breadcrumbs=array(
	'Estudioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estudios', 'url'=>array('index')),
	array('label'=>'Manage Estudios', 'url'=>array('admin')),
);
?>

<h1>Create Estudios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>