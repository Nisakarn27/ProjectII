<?php
$model = RequestHelp::model()->findAllBySql("SELECT * FROM request_help ORDER BY DateTimeStart DESC LIMIT 4");
//$model = RequestHelp::model()->findAll(); // Field user_id (PK) = 1

?>
      	 <div class="row-fluid">
      	 
	 
        <h2>เชิญชวนเข้าร่วมกิจกรรม</h2>
         <?php
		foreach ($model as $rows){
?>
			

  <div class="col-sm-4 col-md-3">
  
    <div class="thumbnail">
   <br>
      <img src="<?php echo Yii::app()->request->baseUrl.'/upload/Request/'.$rows->RequestImage;?>" style="border-color: red;" width="200" height="200" /> 
 
      <div class="caption">
        <h3><?php  echo $rows->ProjectName."<br>";?> </h3>
        <p>เริ่มกิจกรรม:<?php  echo $rows->DateTimeStart."<br>";?></p>
        <p>เวลาสิ้นสุดกิจกรรม:<?php  echo $rows->DateTimeStop."<br>";?></p>
        <p><a href="index.php?r=requestHelp/view&id=<?php  echo $rows->RequestID."<br>";?>" class="btn btn-primary pull-right" role="button">รายละเอียดเพิ่มเติม</a> <BR></p>
      </div>
    </div>
  </div>

		
<?php }?>
		</div></li>
           </div>
       
        
		

