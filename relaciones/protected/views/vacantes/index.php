<?php
$this->breadcrumbs=array(
	'Vacantes',
);

$this->menu=array(
	array('label'=>'Create Vacantes', 'url'=>array('create')),
	array('label'=>'Manage Vacantes', 'url'=>array('admin')),
);
?>

<h1>Vacantes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
