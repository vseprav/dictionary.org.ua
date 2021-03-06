<?php
/* @var $this WordsController */
/* @var $model Words */

$this->breadcrumbs=array(
	'Words'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Words', 'url'=>array('index')),
	array('label'=>'Create Words', 'url'=>array('create')),
	array('label'=>'Update Words', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Words', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Words', 'url'=>array('admin')),
);
?>

<h1>View Words #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'dictionary_id',
		'title',
		'phonetic',
		'pronunciation',
		'pos',
		'definition',
		'translation',
	),
)); ?>
