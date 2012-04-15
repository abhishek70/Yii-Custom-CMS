<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
    <?php Yii::app()->clientScript->registerCssFile( Yii::app()->themeManager->baseUrl . '/css/style.css'); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<?php Yii::app()->clientScript->registerScriptFile( Yii::app()->themeManager->baseUrl . '/js/script.js', CClientScript::POS_HEAD); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<!-- TOP BAR -->
	<div id="top-bar">
		
		<?php if(Yii::app()->user->id != '') : ?>
        
        <div class="page-full-width cf">

			<ul id="nav" class="fl">
	
				<li class="v-sep"><a href="#" class="round button dark ic-left-arrow image-left">Go to website</a></li>
				<li class="v-sep"><a href="#" class="round button dark menu-user image-left">Logged in as <strong>admin</strong></a>
					<ul>
						<li><a href="#">My Profile</a></li>
						<li><a href="#">User Settings</a></li>
						<li><a href="#">Change Password</a></li>
						<li><a href="logout">Log out</a></li>
					</ul> 
				</li>
			
				<li><a href="#" class="round button dark menu-email-special image-left">3 new messages</a></li>
				<li><a href="logout" class="round button dark menu-logoff image-left">Log out</a></li>
				
			</ul> <!-- end nav -->

					
			<form action="#" method="POST" id="search-form" class="fr">
				<fieldset>
					<input type="text" id="search-keyword" class="round button dark ic-search image-right" placeholder="Search..." />
					<input type="hidden" value="SUBMIT" />
				</fieldset>
			</form>

		</div>
        
        <?php else: ?>
        <div class="page-full-width">
		
			<a href="<?php echo Yii::app()->baseUrl; ?>" target="_blank"  class="round button dark ic-left-arrow image-left ">Return to website</a>

		</div> 
        <?php endif; ?>
        <!-- end full-width -->	
	
	</div> <!-- end top-bar -->
        
        <!-- HEADER -->
	<div id="header-with-tabs">
		
		<div class="page-full-width cf">
			<?php if(Yii::app()->user->id == '') : ?>
			<div id="login-intro" class="fl">
			
				<h1><?php echo CHtml::encode($this->pageHeading1); ?></h1>
				<h5><?php echo CHtml::encode($this->pageHeading2); ?></h5>
			
			</div> <!-- login-intro -->
			<?php else: ?>
            <ul id="tabs" class="fl">
				<li><?php echo CHtml::link('Dashboard',array('default/index'),array('class'=>'active-tab dashboard-tab')); ?></li>
			</ul>
            <?php endif; ?>
			<!-- Change this image to your own company's logo -->
			<!-- The logo will automatically be resized to 39px height. -->
			<a href="#" id="company-branding" class="fr"><img src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/company-logo.png" alt="CMS" /></a>
			
		</div> <!-- end full-width -->	

	</div> 
    
    <!-- end header -->

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
			<div class="page-full-width cf">
            <?php if(Yii::app()->user->id != '') : ?>
            <div class="side-menu fl">
				
				<h3>Side Menu</h3>
				<ul>
					<li><a href="#">Side menu link</a></li>
					<li><a href="#">Another link</a></li>
					<li><a href="#">A third link</a></li>
					<li><a href="#">Fourth link</a></li>
				</ul>
				
			</div> <!-- end side-menu -->
            
            <div class="side-content fr">
            <?php endif; ?>
			<?php echo $content; ?>
            <?php if(Yii::app()->user->id != '') : ?>
            </div>
            <?php endif; ?>
            </div>
        </div>
	<div class="clear"></div>

	<!-- FOOTER -->
	<div id="footer">

		<p>&copy; Copyright 2012  CMS. All rights reserved.</p>
		<p><strong>SimpleAdmin</strong> theme</p>
	
	</div> <!-- end footer -->
</body>
</html>
