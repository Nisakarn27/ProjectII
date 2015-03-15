
        <div class="span6">
        <b><h3 style="color:#666666; ">ข่าวประชาสัมพันธ์</h3></b>
<?php echo $this->renderPartial('_slider', array()); ?>
 </div><!--/span-->
<div class="span6">
<b><h3 style="color:#666666; ">ข่าวประชาสัมพันธ์</h3></b>
<?php 

	$this->widget('booster.widgets.TbListView',array(
		'template'=>"{items}",
		'dataProvider'=>$dataProvider,
		'itemView'=>'_news',
		)); 
?>

</div>
