<?php
/* @var $this WordsController */
/* @var $data Words */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dictionary_id')); ?>:</b>
	<?php echo CHtml::encode($data->dictionary_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phonetic')); ?>:</b>
	<?php echo CHtml::encode($data->phonetic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pronunciation')); ?>:</b>
	<?php echo CHtml::encode($data->pronunciation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pos')); ?>:</b>
	<?php echo CHtml::encode($data->pos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('definition')); ?>:</b>
	<?php echo CHtml::encode($data->definition); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('translation')); ?>:</b>
	<?php echo CHtml::encode($data->translation); ?>
	<br />

	*/ ?>

</div>