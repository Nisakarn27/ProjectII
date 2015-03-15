	
<div class="span1"></div>
<div class="span4">
 <div class="list-group">
            <li class="list-group-item">
  <a class="th" href="index.php?r=news/view&id=<?php echo $model->NewsID;?>">
 <img src="<?php echo Yii::app()->request->baseUrl.'/upload/News/'.$model->NewsImage;?>" style="border-color: red;" width="500" height="900" /> 
</a>
</li>
        </div><!--/span-->
</div>
	<div class="span6">

	
	<?php $this->widget(
    'booster.widgets.TbPanel',
    array(
        'title' => 'รายละเอียดข่าว : '.$model->NewsHeader,
    	'context' => 'info',
		//'padContent' => false,
    //    'headerIcon' => 'user',
        'content' =>  $this->renderPartial('_form_detail_news', array('model'=>$model),true,false),
    )
);?>
		</div>
		