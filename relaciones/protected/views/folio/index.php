<?php
$this->breadcrumbs=array(
	'Folios',
);

$this->menu=array(
	array('label'=>'Create Folio', 'url'=>array('create')),
	array('label'=>'Manage Folio', 'url'=>array('admin')),
);
?>

<h1>Folios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
