<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div id="header">
  <div>
    <div id="navigation">
      <div class="infos">
        <?php $this->widget('application.components.HeaderMenu', array(
							'items' => array(
							   array('label'=>'Cart', 'url'=>array('/site/login')),
							   array('label'=>'0 items', 'url' => array('bdlisting/create'))
							),
						));
					?>
      </div>
      <div>
        <?php $this->widget('application.components.HeaderMenu', array(
							'items' => array(
							   array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							   array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
							   array('label'=>'Register', 'url' => array('bdlisting/create'))
							),
						));
					?>
      </div>
      <?php $this->widget('zii.widgets.CMenu',array(
						'id' => 'primary',
						'activeCssClass' => 'selected',
						'linkLabelWrapper' => 'span',
						'items'=>array(
							array('label'=>'Home', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/about')),
							array('label'=>'Men', 'url'=>array(''))						
							),
				      )); 
			     ?>
      <?php $this->widget('zii.widgets.CMenu',array(
						'id' => 'secondary',
						'linkLabelWrapper' => 'span',
						'activeCssClass' => 'selected',
						'items'=>array(
							array('label'=>'Women', 'url'=>array('')),
							array('label'=>'Blog', 'url'=>array('')),
							array('label'=>'Contact', 'url'=>array('/site/contact'))						
							),
				      )); 
			     ?>
    </div>
    <!-- mainmenu --> 
    <a href="<?php echo Yii::app()->createUrl('/site/index') ?>" id="logo"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="LOGO"></a> </div>
</div>
<!-- header --> 

<?php echo $content; ?>

<div id="footer">
  <div class="background">
    <div class="body">
      <div class="subscribe">
        <h3>Get Weekly Newsletter</h3>
        <form action="index.html" method="post">
          <input type="text" value="" class="txtfield">
          <input type="submit" value="" class="button">
        </form>
      </div>
      <div class="posts">
        <h3>Latest Post</h3>
        <p> Integer sit amet erat at nulla sodales fermentum vel quis mi. <br>
          Morbi bibendum <a href="#header">...</a> <span>12/05/2011</span> </p>
      </div>
      <div class="connect">
        <h3>Follow Us:</h3>
        <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> </div>
    </div>
  </div>
  <span id="footnote"> <a href="index.html">Moonstrosity Custom Shirts</a> &copy; <?php echo date('Y'); ?> | All Rights Reserved.</span> 
  <!-- footer --> 
  
</div>
<!-- page -->

</body>
</html>
