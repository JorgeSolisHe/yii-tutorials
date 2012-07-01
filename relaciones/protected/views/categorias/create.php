<?php
$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Categorias', 'url'=>array('index')),
	array('label'=>'Manage Categorias', 'url'=>array('admin')),
);
?>

<h1>Create Categorias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>