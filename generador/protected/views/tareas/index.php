<?php
$this->breadcrumbs=array(
	'Tareases',
);

$this->menu=array(
	array('label'=>'Create Tareas', 'url'=>array('create')),
	array('label'=>'Manage Tareas', 'url'=>array('admin')),
);
?>

<h1>Tareases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
