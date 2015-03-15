<?php
$this->breadcrumbs=array(
	'Location Volunteers'=>array('index'),
	$model->LocationID,
);

$this->menu=array(
array('label'=>'List LocationVolunteer','url'=>array('index')),
array('label'=>'Create LocationVolunteer','url'=>array('create')),
array('label'=>'Update LocationVolunteer','url'=>array('update','id'=>$model->LocationID)),
array('label'=>'Delete LocationVolunteer','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->LocationID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage LocationVolunteer','url'=>array('admin')),
);
?>

<h1>View LocationVolunteer #<?php echo $model->location->icon_name; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'LocationID',
		'LocationName',
		'LocationAddress',
		'AmphurID',
		'ProvinceID',
		'LocationPostCode',
		'LocationImage',
		'Latitude',
		'Longitude',
		'MobileNumber',
		'Telephone',
		'Fax',
		'ContactName',
		'Website',
		'Email',
		'DatetimeContact',
'location.icon_name'
),
)); ?>
