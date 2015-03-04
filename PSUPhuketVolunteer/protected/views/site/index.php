	<div class="row-fluid">

	
	
	<div class="subnav subnav-fixed">
	
	<?php $this->widget(
    'booster.widgets.TbTabs',
    array(
        'type' => 'tabs', // 'tabs' or 'pills'
		'justified' => true,
        'tabs' => array(
            array(
                'label' => 'หน้าแรก',
               'content' =>  $this->renderPartial('_news',array(),true,false)." <hr>".
            		 $this->renderPartial('_invite',array(),true,false),

                'active' => true
            ),
            array('label' => 'ค้นหาสถานที่จิตอาสา',

            	  'content' =>  $this->renderPartial('_invite',array(),true,false),
			),
            array('label' => 'ประวัติการทำกิจกรรม', 'content' => 'Messages Content'),
        ),
    )
);?>
    
  </div>
  
      </div><!--/row-->
          <hr>
         