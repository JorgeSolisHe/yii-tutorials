<?php
$this->breadcrumbs=array(
	'Auth Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AuthItems', 'url'=>array('index')),
	array('label'=>'Manage AuthItems', 'url'=>array('admin')),
);
?>

<h1>Create AuthItems</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>