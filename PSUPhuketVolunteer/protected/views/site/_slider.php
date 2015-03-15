

<?php $slideall= array();
$slide= Yii::app()->db->createCommand('select * from slide_image where SlideImageID=:SlideImageID')->bindValue('SlideImageID',1)->queryRow();
// $usersArr = CHtml::listData( $brand, 'BrandID' , 'BrandName');
// print_r( $usersArr );


foreach($slide as $slideall )
{
    $cap1= $slide["Caption_1"]  ;
    $cap2= $slide["Caption_2"]  ;
    $cap3= $slide["Caption_3"]  ;
    $cap4= $slide["Caption_4"]  ;
    $img1= $slide["SlideImage1"]  ;
    $img2= $slide["SlideImage2"]  ;
    $img3= $slide["SlideImage3"]  ;
    $img4= $slide["SlideImage4"]  ;
    
}
?>
<?php //slide extensions xflexslider
	
$this->widget('ext.xflexslider.XFlexSlider',array(
    'slides'=>array(
    //    use content
        'slide1' => array(
            'id'=>'slide1',
            'caption'=>$cap1,
            'content'=>'<img src="' . Yii::app()->request->baseUrl . '/upload/Slider/'.$img1.'"  width="500" height="400" />',
        ),
   //     use view
       'slide2' => array(
            'id'=>'slide2',
            'caption'=>$cap2,
            'content'=>'<img src="' . Yii::app()->request->baseUrl . '/upload/Slider/'.$img2.'"  width="500" height="400" />',
        ),
    		'slide3' => array(
    				'id'=>'slide3',
    				'caption'=>$cap3,
    				'content'=>'<img src="' . Yii::app()->request->baseUrl . '/upload/Slider/'.$img3.'"  width="500" height="400" />',
    		),
    		'slide4' => array(
    				'id'=>'slide4',
    				'caption'=>$cap4,
    				'content'=>'<img src="' . Yii::app()->request->baseUrl . '/upload/Slider/'.$img4.'"  width="500" height="400" />',
    		),
    ),
 
    'flexsliderOptions'=>array(
    //  'animation' => "'slide'",
    //  'slideDirection' => 'vertical',
        'mousewheel' => true,
    ),
)); 
?>
 
       