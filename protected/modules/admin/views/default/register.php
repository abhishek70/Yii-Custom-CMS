<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); 
?>
<fieldset>
	<p>
		<?php echo $form->labelEx($model,'username'); ?>
        <?php echo $form->textField($model,'username',array('class'=>'round full-width-input','autofocus'=>'')); ?>
		<?php echo $form->error($model,'username'); ?>
	</p>
    <p>
		<?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array('class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'password'); ?>
	</p>
     
    <p>I've <a href="#">forgotten my password</a>.</p>
    
    <?php echo CHtml::submitButton('REGISTER',array('class'=>'button round blue image-right ic-right-arrow')); ?>
    <?php echo CHtml::link('BACK',array('default/login'),array('class'=>'button round blue image-right ic-right-arrow')); ?>
</fieldset>

<?php $this->endWidget(); ?>