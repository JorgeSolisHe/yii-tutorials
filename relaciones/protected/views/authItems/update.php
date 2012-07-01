<?php
$this->breadcrumbs=array(
	'Auth Items'=>array('index'),
	$model->name=>array('view','id'=>$model->name),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('app','List').' AuthItems', 'url'=>array('index')),
	array('label'=>Yii::t('app','Create').' AuthItems', 'url'=>array('create')),
	array('label'=>Yii::t('app','View').' AuthItems', 'url'=>array('view', 'id'=>$model->name)),
	array('label'=>Yii::t('app','Manage').' AuthItems', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update');?>AuthItems <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>