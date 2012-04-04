<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
    <?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/style.css'); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>



	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
		
			<a href="#" class="round button dark ic-left-arrow image-left ">Return to website</a>

		</div> <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
        
        <!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
			
				<h1>Login to CMS</h1>
				<h5>Enter your credentials below</h5>
			
			</div> <!-- login-intro -->
			
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<a href="#" id="company-branding" class="fr"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/company-logo.png" alt="CMS" /></a>
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->

	<!--<div id="mainmenu">
		<?php /* $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); */ ?>
	</div>--><!-- mainmenu -->
        
	<?php //if(isset($this->breadcrumbs)):?>
		<?php //$this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,
		//)); ?><!-- breadcrumbs -->
	<?php //endif?>
                
        <div id="content">
	<?php echo $content; ?>
        </div>
	<div class="clear"></div>

	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2012 <a href="#">CMS</a>. All rights reserved.</p>
		<p><strong>SimpleAdmin</strong> theme</p>
	
	</div> <!-- end footer -->
</body>
</html>
