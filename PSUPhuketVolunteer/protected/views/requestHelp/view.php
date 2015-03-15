<?php
$this->breadcrumbs=array(
	'Request Helps'=>array('index'),
	$model->RequestID,
);

$this->menu=array(
array('label'=>'List RequestHelp','url'=>array('index')),
array('label'=>'Create RequestHelp','url'=>array('create')),
array('label'=>'Update RequestHelp','url'=>array('update','id'=>$model->RequestID)),
array('label'=>'Delete RequestHelp','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->RequestID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage RequestHelp','url'=>array('admin')),
);
?>

<h1>View RequestHelp #<?php echo $model->RequestID; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'RequestID',
		'HelpingID',
		'LocationID',
		'ProjectName',
		'RequestName',
		'RequestDetail',
		'RequestImage',
		'DateTimeStart',
		'DateTimeStop',
		'Counter',
		'Activate',
),
)); ?>
