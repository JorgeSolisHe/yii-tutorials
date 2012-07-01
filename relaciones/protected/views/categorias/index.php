<?php
$this->breadcrumbs=array(
	'Categoriases',
);

$this->menu=array(
	array('label'=>Yii::t('app','Create').' Categorias', 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage').'Categorias', 'url'=>array('admin')),
);
?>

<h1>Categoriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
