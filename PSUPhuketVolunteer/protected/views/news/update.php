<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->NewsID=>array('view','id'=>$model->NewsID),
	'Update',
);

	$this->menu=array(
	array('label'=>'List News','url'=>array('index')),
	array('label'=>'Create News','url'=>array('create')),
	array('label'=>'View News','url'=>array('view','id'=>$model->NewsID)),
	array('label'=>'Manage News','url'=>array('admin')),
	);
	?>

	<h1>Update News <?php echo $model->NewsID; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>