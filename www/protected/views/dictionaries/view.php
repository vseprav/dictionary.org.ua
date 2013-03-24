<?php
/* @var $this DictionariesController */
/* @var $model Dictionaries */

$this->breadcrumbs=array(
	'Dictionaries'=>array('index'),
	$model->title,
);
?>

<h1>View Dictionary</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
	),
)); ?>
