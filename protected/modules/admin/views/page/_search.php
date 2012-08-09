<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<fieldset>
	<p>
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255,'class'=>'round')); ?>
	</p>
    
    <p>
		<?php echo $form->label($model,'isactive'); ?>
		<div class="compactRadioGroup">
		<?php echo $form->radioButtonList($model,'isactive',array('yes'=>"Yes",'no'=>"No"),array( 'separator' => "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" )); ?>
        </div>            
	</p>
    
    <div class="row buttons">
		<?php echo CHtml::submitButton('Search',array('class'=>'button round blue image-right ic-search text-upper')); ?>
        <?php echo CHtml::resetButton('Refresh',array('id'=>'reset-button','class'=>'button round blue image-right ic-refresh text-upper')); ?>
	</div>
</fieldset>
<?php $this->endWidget(); ?>

</div><!-- search-form -->