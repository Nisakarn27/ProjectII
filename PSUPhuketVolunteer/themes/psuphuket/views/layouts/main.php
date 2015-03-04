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
				<a class="brand" href="<?php echo Yii::app()->homeURL; ?>"><?php echo Yii::app()->name ?></a>
				<div class="nav-collapse">
					
				</div><!--/.nav-collapse -->
				
			</div>
		</div>
	</div>

    <div class="container-fluid">
      <?php echo $content ?>

  
	<div class="navbar navbar-fixed-bottom">
	<div class="navbar-inner">
			<div class="container-fluid">
      
        <p>&copy; Yii FINAL <?php echo date('Y'); ?></p>
      
</div></div>
    </div><!--/.fluid-container-->
</body>
</html>
