<?php
/* @var $this DictionariesController */
/* @var $model Dictionaries */

$this->breadcrumbs=array(
	'Dictionaries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dictionaries', 'url'=>array('index')),
	array('label'=>'Manage Dictionaries', 'url'=>array('admin')),
);
?>

<h1>Create Dictionaries</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>