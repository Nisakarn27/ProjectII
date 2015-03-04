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

<?php $this->widget('booster.widgets.TbListView',array(
		'template'=>"{items}",
'dataProvider'=>$dataProvider,
'itemView'=>'_news',
)); ?>

</div>