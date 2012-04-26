<div class="form" style="width:50%">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'focus'=>array($model,'username'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<fieldset>
	<p>
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('maxlength'=>255,'class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'username'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255,'class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'password'); ?>
	</p>
    
    <!-- <p>
		<?php //echo $form->labelEx($model,'confirmpassword'); ?>
        <?php //echo $form->passwordField($model,'confirmpassword',array('class'=>'round full-width-input')); ?>
		<?php //echo $form->error($model,'confirmpassword'); ?>
	</p>-->

	<p>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255,'class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'email'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>255,'class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255,'class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</p>

	<p class="radiobuttonlist">
		<?php echo $form->labelEx($model,'isactive'); ?>
        <div class="compactRadioGroup">
		<?php echo $form->radioButtonList($model,'isactive',array('yes'=>"Yes",'no'=>"No"),array( 'separator' => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" )); ?>
        </div>
		<?php echo $form->error($model,'isactive'); ?>
	</p>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Add' : 'Update',array('class'=>'button round blue image-right ic-add text-upper')); ?>
        <?php echo CHtml::resetButton('Reset',array('id'=>'reset-button','class'=>'button round blue image-right ic-refresh text-upper')); ?>
        <?php echo CHtml::link('Cancel','index', array('class'=>'button round blue image-right ic-refresh text-upper')); ?>
        <?php 
		if($model->id!='') {
		echo CHtml::button('Delete', array("submit"=>array('delete', 'id'=>$model->id), 'confirm' => 'Are you sure you want to delete this item?','class'=>'button round blue image-right ic-delete text-upper')); 
		 }
		?>
	</div>
</fieldset>
<?php $this->endWidget(); ?>

</div><!-- form -->