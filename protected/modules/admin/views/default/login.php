<?php $this->pageTitle=Yii::app()->name . ' - Login'; ?>
<?php $this->pageHeading1='Login to CMS'; ?>
<?php $this->pageHeading2='Enter your credentials below'; ?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 
?>
<fieldset>
	<p>
	  <?php echo $form->labelEx($model,'username'); ?>
      <?php //echo $form->textField($model,'username',array('class'=>'round full-width-input','autofocus'=>'')); ?>
      <?php echo $form->textField($model,'username',array('class'=>'round full-width-input','autofocus'=>'')); ?>
	  <?php echo $form->error($model,'username'); ?>
	</p>
    <p>
	  <?php echo $form->labelEx($model,'password'); ?>
      <?php echo $form->passwordField($model,'password',array('class'=>'round full-width-input')); ?>
	  <?php echo $form->error($model,'password'); ?>
	</p>
    <p>
      <?php echo $form->checkBox($model,'rememberMe',array('class'=>'remember_me_float')); ?>
	  <?php echo $form->label($model,'rememberMe',array('class'=>'remember_me')); ?>
	  <?php echo $form->error($model,'rememberMe'); ?>
    </p>
    <p>I've <a href="#">forgotten my password</a>.</p>
    <?php echo CHtml::submitButton('LOG IN',array('class'=>'button round blue image-right ic-right-arrow')); ?>
    <?php echo CHtml::link('REGISTER',array('default/register'),array('class'=>'button round blue image-right ic-right-arrow')); ?>
</fieldset>

<?php $this->endWidget(); ?>