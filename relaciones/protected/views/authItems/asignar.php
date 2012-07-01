<?php
$this->breadcrumbs=array(
	'Auth Items'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AuthItems', 'url'=>array('index')),
	array('label'=>'Create AuthItems', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('auth-items-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Asignando items a <?php echo $_GET['id'];?></h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 

$this->widget('ext.widgets.bmenu.XBatchMenu', array(
    'formId'=>'asignar-form',
    'checkBoxId'=>'asignar-id',
    'ajaxUpdate'=>'auth-items-grid', // if you want to update grid by ajax
    'emptyText'=>Yii::t('ui','Please check items you would like to perform this action on!'),
    'confirm'=>Yii::t('ui','Are you sure to perform this action on checked items?'),
    'items'=>array(
        array('label'=>'Seleccione los items','url'=>array('asignar','op'=>'asignando','item'=>$_GET['id'])),
        #array('label'=>Yii::t('ui','Make selected persons 1 year older'),'url'=>array('updateYears','op'=>'less')),
    ),
    'htmlOptions'=>array('class'=>'actionBar'),
));
echo CHtml::beginForm('','post',array('id'=>'asignar-form'));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'auth-items-grid',
	'dataProvider'=>$model->search(),
	'selectableRows'=>2, // multiple rows can be selected
        'ajaxUpdate'=>false,	
    
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CCheckBoxColumn',
			'id'=>'asignar-id',
		),
		'name',
		'type',
		'description',
		'bizrule',
		'data',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
echo CHtml::endForm();
?>
