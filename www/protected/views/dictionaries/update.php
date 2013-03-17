<?php
/* @var $this DictionariesController */
/* @var $model Dictionaries */

$this->breadcrumbs=array(
	'Dictionaries'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dictionaries', 'url'=>array('index')),
	array('label'=>'Create Dictionaries', 'url'=>array('create')),
	array('label'=>'View Dictionaries', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dictionaries', 'url'=>array('admin')),
);
?>

<h1>Update Dictionaries <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>