<?php
$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>Create Usuarios</h1>
<?php 
/*
foreach($usuario as $data)
{
	echo '<br>'.$data->id.'<br>';
	echo $data->nombres.'<br>';
	echo '<br>'.$data->nombre.'<br>';
	echo $data->email.'<br>';
	echo $data->ciudad->nombre.'<br>';
	echo $data->identificacion.'<br>************************';
}
*/

?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>