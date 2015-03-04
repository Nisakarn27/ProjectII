	 <div class="span1"></div>
        <div class="span5">
  <br>  <br>  <br>  <br>  <br>  <br>  <br>  
 <?php $this->widget(
    'booster.widgets.TbCarousel',
    array(
    		
        'items' => array(
            array(
                'image' => 'http://outburstmovement.com/wp-content/uploads/2014/03/volunteer_thumbnail.jpg',
                'label' => 'PSU Phuket Volunteer Information System',
                'caption' => 'ระบบจัดการฐานข้อมูลจิตอาสา ม.อ.ภูเก็ต'
            ),
            array(
                'image' => 'http://image.ohozaa.com/i/900/6aHbTq.jpg',
                'label' => 'โครงการเปิดโลกให้น้อง',
                'caption' => ''
            ),
//             array(
//                 'image' => bu('images/third-placeholder830x400.gif'),
//                 'label' => 'Third Thumbnail label',
//                 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
//             ),
        ),
    )
);?>
        </div><!--/span-->
        <div class="span5">
          <h2>ข่าวประชาสัมพันธ์</h2>
  <div class="list-group">
            <li class="list-group-item">
		      <?php
		for($i=0;$i<=1;$i++)
		{
			?>


<div class="media">
  <div class="media-left ">
    <a href="#">
      <img src="<?php echo Yii::app()->request->baseUrl.'/images/testpic.jpg ';?>" style="border-color: red;" height="100" width="120" /> 
    </a>
     <div class="media-body">
    <h4 class="media-heading">หัวข้อข่าว</h4>
    ภรรยาเหมือนเสื้อผ้า
ขาดหรือหายไปก็หาใหม่ได้
พี่น้องเหมือนแขนซ้ายขวา
ขาดแล้วยากที่จะต่อได้..... อ่านต่อได้ที่: https://www.gotoknow.org/posts/30537
  </div>
  <div class="pull-right">
   <a href="#"> อ่านต่อได้ที่ >></a>
</div></div>
  </div>

			<?php 
			
		}
		?></div>
            <div class="pull-right">
   <a href="#"> ดูทั้งหมด</a>
</div></li>
        </div><!--/span-->

       