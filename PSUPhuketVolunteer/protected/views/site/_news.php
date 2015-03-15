<?php ?>

 <div class="list-group">
            <li class="list-group-item">
<div class="media">

  <div class="pull-left">
  <a class="th" href="index.php?r=news/view&id=<?php echo $data->NewsID;?>">
 <img src="<?php echo Yii::app()->request->baseUrl.'/upload/News/'."resize".$data->NewsImage;?>" style="border-color: red;" width="100" height="100" /> 
</a>
    </div>
     <div class="media-body">
    <h4 class="media-heading" ><b>
    <?php echo CHtml::link(CHtml::encode($data->NewsHeader),array('news/view','id'=>$data->NewsID), array('class' => 'hello')); ?>
	
	<br /></h4>
	
	<?php echo CHtml::encode($data->NewsTitle); ?>...
	<br />
	
	<span class="label label-warning">จำนวนผู้เข้าชม : <?php echo $data->Counter;?></span>
  </div>

  </div>
</div>
		</li>
        </div><!--/span-->
           
       <div class="pull-right">
<?php echo CHtml::link('<< ดูข่าวทั้งหมด >>',array('site/contact')); ?>
</div>
