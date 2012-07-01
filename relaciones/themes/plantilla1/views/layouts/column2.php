<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
	<?php echo $content; ?>
</div>
    
<div id="column">
  <div class="subnav">
	<h2>Operaciones</h2>
	<?php
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
	?>
  </div>
</div>

<?php $this->endContent(); ?>