     
      	 <div class="row-fluid">
      	 
	 <div class="span2"></div>
        <div class="span10">
        <h2>เชิญชวนเข้าร่วมกิจกรรม</h2>
          <div class="list-group">
		      <?php
		for($i=0;$i<=2;$i++)
		{
			?>

  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
   <br>
      <img src="<?php echo Yii::app()->request->baseUrl.'/images/testpic.jpg ';?>" style="border-color: red;" width="200" /> 
 
      <div class="caption">
        <h3>"ชมรมสานฝันปันรอยยิ้ม" </h3>
        <p>ชมรมสานฝันปันรอยยิ้ม
ชมรมสานฝันปันรอยยิ้ม
เกี่ยวกับชมรม "ชมรมสานฝันปันรอยยิ้ม" ! เป็นการรวมกลุ่มของบุคคลหลายสาขาหลายอาชีพ เพื่อร่วมกันดำเนินกิจกรรมที่เป็นประโยชน์ต่อส่วนรวม ก่อตั้งอย่างเป็นทางการเมื่อวันที่ 23 ตุลาคม ...</p>
        <p><a href="#" class="btn btn-primary pull-right" role="button">รายละเอียดเพิ่มเติม</a> <BR></p>
      </div>
    </div>
  </div>


			<?php 
			
		}
		?>
           </div>
        </div><!--/span-->
    