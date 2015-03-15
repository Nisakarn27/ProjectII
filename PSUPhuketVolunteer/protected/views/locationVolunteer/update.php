<?php
$this->breadcrumbs=array(
	'Location Volunteers'=>array('index'),
	$model->LocationID=>array('view','id'=>$model->LocationID),
	'Update',
);

	$this->menu=array(
	array('label'=>'List LocationVolunteer','url'=>array('index')),
	array('label'=>'Create LocationVolunteer','url'=>array('create')),
	array('label'=>'View LocationVolunteer','url'=>array('view','id'=>$model->LocationID)),
	array('label'=>'Manage LocationVolunteer','url'=>array('admin')),
	);
	?>

	<h1>Update LocationVolunteer <?php echo $model->LocationID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>