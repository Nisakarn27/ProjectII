
 <div class="list-group">
            <li class="list-group-item">
<div class="media">
  <div class="pull-left">
    <a href="#">
      <img src="<?php echo Yii::app()->request->baseUrl.'/images/'.$data->NewsImage;?>" style="border-color: red;" height="100" width="100" /> 
    </a></div>
     <div class="media-body">
    <h4 class="media-heading"><b>
    <?php echo CHtml::link(CHtml::encode($data->NewsHeader),array('view','id'=>$data->NewsID)); ?>
	
	<br /></h4>
	
	<?php echo CHtml::encode($data->NewsTitle); ?>
	<br />
	
  </div>

  </div>
</div>
		</li>
        </div><!--/span-->
           
       <div class="pull-right">
<?php echo CHtml::link('<< ดูข่าวทั้งหมด >>',array('site/contact')); ?>
</div>