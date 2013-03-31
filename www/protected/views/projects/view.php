<?php
/* @var $this DictionariesController */
/* @var $dataProvider Dictionaries */
?>

<h1><?php echo $project->name; ?></h1>

<?php echo CHtml::link( 'New', $project->id . '/dictionaries/create', array('class'=>'btn btn-primary') ); ?>

<table class='table table-striped'>
	<thead>
    	<tr>
      		<th>Title</th>
      		<th>Description</th>
      		<th></th>
      		<th></th>
      		<th></th>
    	</tr>
	</thead>
	<tbody>
    <?php foreach ($dataProvider as $data) { ?>
      	<tr>
        	<td><?php echo $data->title; ?></td>
        	<td><?php echo $data->description; ?></td>
        	<td><?php echo CHtml::link( 'Open',array('projects/' . $project->id . '/dictionaries/' . $data->id)); ?></td>  
        	<td><?php echo CHtml::link('Edit', array('projects/' . $project->id . '/dictionaries/update/' . $data->id)); ?></td>
        	<td><?php echo CHtml::link('Delete',"#", 
					                    array("submit"=>array('dictionaries/delete', 'id'=>$data->id), 
					                    'confirm' => 'Are you sure?') ); ?>
			</td>
      	</tr>
    <?php } ?>
	</tbody>
</table>