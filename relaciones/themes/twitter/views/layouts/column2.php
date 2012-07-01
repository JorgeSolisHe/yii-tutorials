<?php $this->beginContent('//layouts/main'); ?>
<div class="span9">
<?php echo $content; ?>
</div>
<div class="span3">
  <div class="well sidebar-nav"><?php
  array_unshift($this->menu,array('label'=>'Operaciones','itemOptions'=>array('class'=>'nav-header')));
	$this->widget('zii.widgets.CMenu', array(
		'items'=>$this->menu,
		'htmlOptions'=>array('class'=>'nav nav-list'),
	));
?></div>
</div>
<?php $this->endContent(); ?>