<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'experiencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarios_id'); ?>
		<?php echo $form->dropDownList($model,'usuarios_id',CHtml::listData(Usuarios::model()->findAll(" estado = 1"),'id','nombres'),array('empty'=>'seleccione Usuario')); ?>
		<?php echo $form->error($model,'usuarios_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio'); ?>
		<?php #echo $form->textField($model,'inicio');
                		
$this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
            'model'=>$model,
            'attribute'=>'inicio',
            'language' => 'es',
            'options' => array(
                    'dateFormat'=>'yy-mm-dd',
                    'constrainInput' => 'false',
                    'duration'=>'fast',
                    'showAnim' =>'slide',
            ),
        )
);


		?>
		<?php echo $form->error($model,'inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finalizacion'); ?>
		<?php               		
$this->widget('zii.widgets.jui.CJuiDatePicker',
            array(
            'model'=>$model,
            'attribute'=>'finalizacion',
            'language' => 'es',
            'options' => array(
                    'dateFormat'=>'yy-mm-dd',
                    'constrainInput' => 'false',
                    'duration'=>'fast',
                    'showAnim' =>'slide',
            ),
        )
);
 ?>
		<?php echo $form->error($model,'finalizacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jefe'); ?>
		<?php echo $form->textField($model,'jefe',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jefe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->