<?php
$this->breadcrumbs=array(
	'Folios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Folio', 'url'=>array('index')),
	array('label'=>'Create Folio', 'url'=>array('create')),
	array('label'=>'View Folio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Folio', 'url'=>array('admin')),
);
?>

<h1>Update Folio <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>