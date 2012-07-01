<?php
$this->breadcrumbs=array(
	'Folios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Folio', 'url'=>array('index')),
	array('label'=>'Manage Folio', 'url'=>array('admin')),
);
?>

<h1>Create Folio</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>