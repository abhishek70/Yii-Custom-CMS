<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
?>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php endif; ?>

<div id="body">
		<div id="contents">
			<h1>Contact</h1>
			<div id="sidebar">
				<h4>Contact Information</h4>
				<ul class="contacts">
					<li>
						<span>Address:</span>
						<a href="http://www.freewebsitetemplates.com/misc/contact">
							123 Lorem Ipsum Street, Dolor set amet, Maecenas, MA 456789
						</a>
					</li>
					<li>
						<span>Phone Number:</span>
						<a href="http://www.freewebsitetemplates.com/misc/contact" class="num">
							1-800-111-1111 or 1-800-999-9999
						</a>
					</li>
					<li>
						<span>Fax Number:</span>
						<a href="http://www.freewebsitetemplates.com/misc/contact" class="num">
							1-800-222-2222
						</a>
					</li>
				</ul>
			</div>
			<div id="main">
				<h4 class="uppercase">Get in touch with us</h4>
				<form action="index.html" method="post" id="contacts">
					<table>
						<tbody>
							<tr>
								<td><label>Name:</label></td>
								<td><input type="text" value=""></td>
							</tr> <tr>
								<td><label>Email Address:</label></td>
								<td><input type="text" value=""></td>
							</tr> <tr>
								<td><label>Phone:</label></td>
								<td><input type="text" value=""></td>
							</tr> <tr>
								<td><label>Message:</label></td>
								<td><textarea></textarea></td>
							</tr> <tr>
								<td colspan="2"><input type="submit" value="" class="button"></td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>

<!--<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contacts',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div>--><!-- form -->
