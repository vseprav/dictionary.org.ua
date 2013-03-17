<?php
/* @var $this DictionariesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dictionaries',
);

$this->menu=array(
	array('label'=>'Create Dictionaries', 'url'=>array('create')),
	array('label'=>'Manage Dictionaries', 'url'=>array('admin')),
);
?>

<h1>Dictionaries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
