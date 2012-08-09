<div class="form" style="width:50%">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'page-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'focus'=>array($model,'title'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
<fieldset>
	<?php echo $form->errorSummary($model); ?>

	<p>
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255,'class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'title'); ?>
	</p>

	<p>
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50,'class'=>'round full-width-input')); ?>
		<?php echo $form->error($model,'description'); ?>
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