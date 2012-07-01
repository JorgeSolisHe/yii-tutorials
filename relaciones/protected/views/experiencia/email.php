<?php
$this->breadcrumbs=array(
	'Experiencias',
);

$this->menu=array(
	array('label'=>'Create Experiencia', 'url'=>array('create')),
	array('label'=>'Manage Experiencia', 'url'=>array('admin')),
);
?>

<h1>Experiencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_email',
)); ?>
