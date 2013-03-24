<?php
/* @var $this WordsController */
/* @var $model Words */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'words-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dictionary_id'); ?>
		<?php echo $form->textField($model,'dictionary_id'); ?>
		<?php echo $form->error($model,'dictionary_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phonetic'); ?>
		<?php echo $form->textField($model,'phonetic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phonetic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pronunciation'); ?>
		<?php echo $form->textField($model,'pronunciation',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pronunciation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pos'); ?>
		<?php echo $form->textField($model,'pos',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'definition'); ?>
		<?php echo $form->textArea($model,'definition',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'definition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'translation'); ?>
		<?php echo $form->textArea($model,'translation',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'translation'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->