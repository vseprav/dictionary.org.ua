<?php
/* @var $this ProjectsController */
/* @var $model Project */
?>

<h1>Projects</h1>

<?php echo CHtml::link( 'New',array('projects/create'), array('class'=>'btn btn-primary') ); ?>

<table class='table table-striped'>
	<thead>
    	<tr>
      		<th>Name</th>
      		<th>Description</th>
      		<th></th>
      		<th></th>
      		<th></th>
    	</tr>
	</thead>
	<tbody>
    <?php foreach ($dataProvider as $data) { ?>
      	<tr>
        	<td><?php echo $data->name; ?></td>
        	<td><?php echo $data->description; ?></td>
        	<td><?php echo CHtml::link( 'Open',array('projects/view', 'id'=>$data->id)); ?></td>  
        	<td><?php echo CHtml::link('Edit', array('projects/update', 'id'=>$data->id)); ?></td>
        	<td><?php echo CHtml::link('Delete',"#", 
					                    array("submit"=>array('delete', 'id'=>$data->id), 
					                    'confirm' => 'Are you sure?') ); ?>
			</td>
      	</tr>
    <?php } ?>
	</tbody>
</table>