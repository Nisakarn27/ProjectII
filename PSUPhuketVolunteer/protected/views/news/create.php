<?php
$this->breadcrumbs=array(
	'News'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List News','url'=>array('index')),
array('label'=>'Manage News','url'=>array('admin')),
);
?>

<div class="span1"></div>
<div class="span10">

	<?php $this->widget(
    'booster.widgets.TbPanel',
    array(
        'title' => 'เพิ่มข่าวประชาสัมพันธ์',
    	'context' => 'primary',
		//'padContent' => false,
     //   'headerIcon' => 'lock',
        'content' =>  $this->renderPartial('_form', array('model'=>$model),true,false),
    )
);?>
		
		</div>