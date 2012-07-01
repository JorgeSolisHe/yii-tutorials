<?php
$this->breadcrumbs=array(
	'Auth Items',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' AuthItems', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').' AuthItems', 'url'=>array('admin')),
);
?>

<h1>Auth Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
