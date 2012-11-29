<?php $this->pageTitle=Yii::app()->name . ' - Contact Us'; ?>
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success"> <?php echo Yii::app()->user->getFlash('contact'); ?> </div>
<?php endif; ?>
<div id="body">
  <div id="contents">
    <h1>Contact</h1>
    <div id="sidebar">
      <h4>Contact Information</h4>
      <ul class="contacts">
        <li> <span>Address:</span> <a href="http://www.freewebsitetemplates.com/misc/contact"> 123 Lorem Ipsum Street, Dolor set amet, Maecenas, MA 456789 </a> </li>
        <li> <span>Phone Number:</span> <a href="http://www.freewebsitetemplates.com/misc/contact" class="num"> 1-800-111-1111 or 1-800-999-9999 </a> </li>
        <li> <span>Fax Number:</span> <a href="http://www.freewebsitetemplates.com/misc/contact" class="num"> 1-800-222-2222 </a> </li>
      </ul>
    </div>
    <div class="main">
      <h4 class="uppercase">Get in touch with us</h4>
      <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacts',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
      
      <!--<p class="note">Fields with <span class="required">*</span> are required.</p>--> 
      
      <?php echo $form->errorSummary($model); ?>
      <div> <?php echo $form->labelEx($model,'name'); ?> <?php echo $form->textField($model,'name'); ?> <?php echo $form->error($model,'name'); ?> </div>
      <div > <?php echo $form->labelEx($model,'email'); ?> <?php echo $form->textField($model,'email'); ?> <?php echo $form->error($model,'email'); ?> </div>
      <div> <?php echo $form->labelEx($model,'subject'); ?> <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?> <?php echo $form->error($model,'subject'); ?> </div>
      <div > <?php echo $form->labelEx($model,'body',array('style'=>'vertical-align:top')); ?> <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?> <?php echo $form->error($model,'body'); ?> </div>
      <?php if(CCaptcha::checkRequirements()): ?>
      <div > <?php echo $form->labelEx($model,'verifyCode'); ?>
        <?php $this->widget('CCaptcha'); ?>
        <?php echo $form->textField($model,'verifyCode'); ?> <br/>
        <span> Please enter the letters as they are shown in the image above. <br/>
        Letters are not case-sensitive.</span> <?php echo $form->error($model,'verifyCode'); ?> </div>
      <?php endif; ?>
      <div> <?php echo CHtml::submitButton('',array('class'=>"button")); ?> </div>
      <?php $this->endWidget(); ?>
    </div>
  </div>
</div>

<!-- form --> 
