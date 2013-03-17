<?php
/* @var $this DictionariesController */
/* @var $model Dictionaries */

$this->breadcrumbs=array(
	'Dictionaries'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Dictionaries', 'url'=>array('index')),
	array('label'=>'Create Dictionaries', 'url'=>array('create')),
	array('label'=>'Update Dictionaries', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dictionaries', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dictionaries', 'url'=>array('admin')),
);
?>

<h1>View Dictionaries #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
	),
)); ?>
