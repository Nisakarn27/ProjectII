<?php
$this->breadcrumbs=array(
	'Location Volunteers'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List LocationVolunteer','url'=>array('index')),
array('label'=>'Manage LocationVolunteer','url'=>array('admin')),
);
?>

<h1>Create LocationVolunteer</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>