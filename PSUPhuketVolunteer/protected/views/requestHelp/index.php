<?php
$this->breadcrumbs=array(
	'Request Helps',
);

$this->menu=array(
array('label'=>'Create RequestHelp','url'=>array('create')),
array('label'=>'Manage RequestHelp','url'=>array('admin')),
);
?>

<h1>Request Helps</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
