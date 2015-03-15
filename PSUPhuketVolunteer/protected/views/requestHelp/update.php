<?php
$this->breadcrumbs=array(
	'Request Helps'=>array('index'),
	$model->RequestID=>array('view','id'=>$model->RequestID),
	'Update',
);

	$this->menu=array(
	array('label'=>'List RequestHelp','url'=>array('index')),
	array('label'=>'Create RequestHelp','url'=>array('create')),
	array('label'=>'View RequestHelp','url'=>array('view','id'=>$model->RequestID)),
	array('label'=>'Manage RequestHelp','url'=>array('admin')),
	);
	?>

	<h1>Update RequestHelp <?php echo $model->RequestID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>