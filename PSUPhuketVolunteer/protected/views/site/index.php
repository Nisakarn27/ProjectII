	<div class="row-fluid">

	<div class="subnav subnav-fixed">
	
	<?php echo $this->renderPartial('news', array('dataProvider'=>$dataProvider)); ?>
	<hr>
	<?php echo $this->renderPartial('_invite', array()); ?>
	<hr>
	
	<?php echo $this->renderPartial('_history_video', array()); ?>
   		  


  </div>
 