<?php $this->pageTitle=Yii::app()->name; ?>
<div class="span12">
	<div class="hero-unit">
		<h1>Bienvenido a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

		<p>Felicitaciones tu has creado tu primera Aplicación.</p>
		
		<br><?php echo CHtml::link("Mi link",array("usuarios/index","id"=>"2","title"=>"Mi pagina"));?>
		<br><?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl."/images/004.png","Eliminar",array("title"=>"Mi title")),array("usuarios/index","id"=>"2","title"=>"Mi pagina"));?>
		<br><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/004.png","Eliminar",array("title"=>"Mi title"));?>
		
		
		<p>You may change the content of this page by modifying the following two files:</p>
		<ul>
			<li>View file: <tt><?php echo __FILE__; ?></tt></li>
			<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
		</ul>

		<p>For more details on how to further develop this application, please read
		the <a rel="tooltip" title="Ir a la documentacion" href="http://www.yiiframework.com/doc/">documentation</a>.
		Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
		should you have any questions.</p>
    </div>
</div>
