<h1>Listado de tareas</h1>
<?php echo 'Probando la vista index je je.';?>
<?php echo CHtml::link('Crear Tarea',array('add'));?>
<table>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Descripcion</th>
	<th>Ver</th>
	<th>Editar</th>
	<th>Borrar</th>
	</tr>
	<?php foreach($tareas as $t){ ?>
	<tr>
	<td><?php echo $t->id;?></td>
	<td><?php echo $t->nombre;?></td>
	<td><?php echo $t->descripcion;?></td>
	<td><?php echo CHtml::link('Ver',array('view','id'=>$t->id));?></td>
	<td><?php echo CHtml::link('Editar',array('edit','id'=>$t->id));?></td>
	<td><?php echo CHtml::link('Borrar',array('delete','id'=>$t->id),array('confirm'=>'Seguro lo borro?'));?></td>
	</tr>
	<?php } ?>
</table>