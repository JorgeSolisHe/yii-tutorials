<?php
$this->breadcrumbs=array(
	'Estudioses',
);

$this->menu=array(
	array('label'=>'Create Estudios', 'url'=>array('create')),
	array('label'=>'Manage Estudios', 'url'=>array('admin')),
);
?>

<h1>Estudioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
