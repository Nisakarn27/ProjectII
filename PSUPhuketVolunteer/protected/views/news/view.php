<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->NewsID,
);

$this->menu=array(
array('label'=>'List News','url'=>array('index')),
array('label'=>'Create News','url'=>array('create')),
array('label'=>'Update News','url'=>array('update','id'=>$model->NewsID)),
array('label'=>'Delete News','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->NewsID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage News','url'=>array('admin')),
);
?>

<h1>View News #<?php echo $model->NewsID; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'NewsID',
		'NewsHeader',
		'NewsTitle',
		'NewsDetail',
		'NewsImage',
		'InsertBy',
		'InsertDateTime',
		'UpdateBy',
		'UpdateDatetime',
		'Counter',
),
)); ?>
