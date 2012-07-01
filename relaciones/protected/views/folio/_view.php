<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psicologica')); ?>:</b>
	<?php echo CHtml::encode($data->psicologica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tecnica')); ?>:</b>
	<?php echo CHtml::encode($data->tecnica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entrevista')); ?>:</b>
	<?php echo CHtml::encode($data->entrevista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('puntaje')); ?>:</b>
	<?php echo CHtml::encode($data->puntaje); ?>
	<br />


</div>