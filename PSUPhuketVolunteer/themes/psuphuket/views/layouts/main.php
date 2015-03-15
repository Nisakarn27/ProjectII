<?php
	Yii::app()->clientscript
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/form.css' )
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<style type="text/css">
  body {
	padding-top: 60px;
	padding-bottom: 40px;
  }
  .sidebar-nav {
	padding: 9px 0;
  }

	@media (max-width: 980px) {
		body{
			padding-top: 0px;
		}
	}
</style>

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			
				<div class="nav-collapse">
				<img src="<?php echo Yii::app()->theme->baseUrl . '/img/Logo4.png';?>  "  width="200px" height="100px" />
	
					<?php $this->widget('zii.widgets.CMenu',array(
					 	'htmlOptions' => array(
                    	'class'=>'nav nav-pills pull-right',
                        ),
							'encodeLabel'=>false,

						'activeCssClass'	=> 'active',
						'items'=>array(
							array('label'=>'เพิ่มข่าว','url'=>array('news/create'),'visible'=>Yii::app()->user->isGuest),
							array('label'=>'เปลี่ยนภาพ slide','url'=>array('slideimage/update'),'visible'=>Yii::app()->user->isGuest),
							array('label'=>'location','url'=>array('LocationVolunteer/create'),'visible'=>Yii::app()->user->isGuest),
							array('label'=>'request','url'=>array('requestHelp/create'),'visible'=>Yii::app()->user->isGuest),
							array('label'=>'สมัครสมาชิก','url'=>array('profileMerchant/admin'),'visible'=>Yii::app()->user->isGuest),
							array('label'=>'เข้าสู่ระบบ','url'=>array('site/login'),'visible'=>Yii::app()->user->isGuest),
							array('label'=>'เกี่ยวกับเรา','url'=>array('profileMerchant/admin'),'visible'=>Yii::app()->user->isGuest),

						//array('label'=>'Merchant Management','url'=>array('profileMerchant/admin'),'visible'=>Yii::app()->user->isGuest),
						
						
	
						
						
						),
					)); ?>
			
				</div><!--/.nav-collapse -->
				
			</div>
		
		</div>
			<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'หน้าแรก', 'url'=>array('/site/index')),
                array('label'=>'ค้นหาสถานที่ทำกิจกรรม', 'url'=>array('/locationVolunteer/index')),
				array('label'=>'กิจกรรมที่ผ่านมา', 'url'=>array('/site/contact')),
				array('label'=>'ขอความช่วยเหลือ', 'url'=>array('/requesthelp/create')),
				array('label'=>'อาสาสมัคร ม.อ.ภูเก็ต', 'url'=>array('/site/contact')),
				array('label'=>'ชมรมอาสา ม.อ.ภูเก็ต', 'url'=>array('/site/contact')),
				
			),
         
             
           
    )); ?>
	</div>


    <div class="container-fluid">
    <div class="span12">
    <div class="span1"></div>
        <div class="span10 well">
    <br>
      <?php echo $content ?>
</div>
  </div>

</body>
  <footer>
	<div class="nav navbar-fixed-bottom">
	<div class="navbar-inner">
			
      
        <p>&copy; Copyright <?php echo date('Y'); ?></p>
      
</div></div></footer>
</html>
