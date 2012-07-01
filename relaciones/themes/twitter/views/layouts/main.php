<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language;?>" lang="<?php echo Yii::app()->language;?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
	Yii::app()->clientScript->registerCoreScript('jquery');
	$assets = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
	$baseUrl = Yii::app()->getAssetManager()->publish($assets);
	Yii::app()->clientScript->registerScriptFile($baseUrl . '/' . 'js/bootstrap.min.js',CClientScript::POS_HEAD);
	?>
    <!-- Le styles <?php
	/*
	Yii::app()->clientScript->registerCssFile($baseUrl . '/' . 'less/bootstrap.less');
	Yii::app()->clientScript->registerCssFile($baseUrl . '/' . 'less/responsive.less');		
	Yii::app()->clientScript->registerScriptFile($baseUrl . '/' . 'js/less-1.3.0.min.js',CClientScript::POS_HEAD);
	*/
	?> -->
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
    
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" rel="stylesheet">
    <style type="text/css">
      #main {
        margin-top: 60px;
        margin-bottom: 40px;
      }
	  
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-57-precomposed.png">

</head>

  
<body>
  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
          <div class="nav-collapse">
			
			 <?php $this->widget('ext.widgets.GMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>"Usuarios", 'url'=>array('#'),'sub'=>true,
							'items'=>array(
								array('label'=>'Nuevo', 'url'=>array('/usuarios/create')),
								array('label'=>'Administrar', 'url'=>array('/usuarios/admin')),
								array('label'=>'Listado', 'url'=>array('/usuarios/index')),
							)
			),
				array('label'=>'Ciudad', 'url'=>array('/ciudad/index')),
				array('label'=>'Experiencia', 'url'=>array('/experiencia/index')),
				array('label'=>'Estudios', 'url'=>array('/estudios/index')),
				array('label'=>'Folio', 'url'=>array('/folio/index')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'htmlOptions'=>array('class'=>'nav'),
		)); ?>
	
		  </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	
    <div class="container" id="main">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<?php
	$flashMessages = Yii::app()->user->getFlashes();
	if($flashMessages!==null){
	?><div class="info" style="text-align:left"><?php
		foreach($flashMessages as $key => $message){
			echo '<div class="alert alert-' . $key . '">' . $message . " <a class=\"close\" data-dismiss=\"alert\">×</a></div>\n";
		}
	?></div><?php
	}
	?>
	<div class="row"><?php echo $content; ?></div>

      <hr>
      <footer>

		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
     
      </footer>
    </div> <!-- /container -->

  </body>
</html>
			
<?php
// Efecto para el div de Mensajes Flash
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 100000).slideUp("slow");',
   CClientScript::POS_READY
);

// Efecto para el div de Mensajes Flash
Yii::app()->clientScript->registerScript(
   'tooltip',
   "$('a').tooltip()",
   CClientScript::POS_READY
);
?>