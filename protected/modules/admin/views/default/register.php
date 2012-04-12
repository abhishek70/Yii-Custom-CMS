<?php $this->pageTitle=Yii::app()->name . ' - Registration'; ?>
<?php $this->pageHeading1='Registration'; ?>
<?php $this->pageHeading2='Enter your credentials below'; ?>

<?php if(Yii::app()->user->hasFlash('register')) : ?>

<div class="flash-success" align="center">
<div class="confirmation-box round" style="width:600px; text-align:left">
	<?php echo Yii::app()->user->getFlash('register'); ?>
</div>
</div>

<?php endif; ?>

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
        <?php echo $form->textField($model,'username',array('class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'username'); ?>
	</p>
    <p>
		<?php echo $form->labelEx($model,'password'); ?>
        <?php echo $form->passwordField($model,'password',array('class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'password'); ?>
	</p>
    <p>
		<?php echo $form->labelEx($model,'confirmpassword'); ?>
        <?php echo $form->passwordField($model,'confirmpassword',array('class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'confirmpassword'); ?>
	</p>
    <p>
		<?php echo $form->labelEx($model,'firstname'); ?>
        <?php echo $form->textField($model,'firstname',array('class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</p>
    <p>
		<?php echo $form->labelEx($model,'lastname'); ?>
        <?php echo $form->textField($model,'lastname',array('class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</p>
    <p>
		<?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email',array('class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'email'); ?>
	</p>
    
    <?php echo CHtml::submitButton('REGISTER',array('class'=>'button round blue image-right ic-right-arrow')); ?>
    <?php echo CHtml::link('BACK TO LOGIN',array('default/login'),array('class'=>'button round blue image-right ic-right-arrow')); ?>
</fieldset>

<?php $this->endWidget(); ?>