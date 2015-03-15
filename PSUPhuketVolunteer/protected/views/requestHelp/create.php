<?php
$this->breadcrumbs=array(
	'Request Helps'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List RequestHelp','url'=>array('index')),
array('label'=>'Manage RequestHelp','url'=>array('admin')),
);
?>

<h1>Create RequestHelp</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>