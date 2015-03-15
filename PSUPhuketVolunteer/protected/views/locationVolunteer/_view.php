<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('LocationID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->LocationID),array('view','id'=>$data->LocationID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LocationName')); ?>:</b>
	<?php echo CHtml::encode($data->LocationName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LocationAddress')); ?>:</b>
	<?php echo CHtml::encode($data->LocationAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AmphurID')); ?>:</b>
	<?php echo CHtml::encode($data->AmphurID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProvinceID')); ?>:</b>
	<?php echo CHtml::encode($data->ProvinceID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LocationPostCode')); ?>:</b>
	<?php echo CHtml::encode($data->LocationPostCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LocationImage')); ?>:</b>
	<?php echo CHtml::encode($data->LocationImage); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Latitude')); ?>:</b>
	<?php echo CHtml::encode($data->Latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Longitude')); ?>:</b>
	<?php echo CHtml::encode($data->Longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MobileNumber')); ?>:</b>
	<?php echo CHtml::encode($data->MobileNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telephone')); ?>:</b>
	<?php echo CHtml::encode($data->Telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fax')); ?>:</b>
	<?php echo CHtml::encode($data->Fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ContactName')); ?>:</b>
	<?php echo CHtml::encode($data->ContactName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Website')); ?>:</b>
	<?php echo CHtml::encode($data->Website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DatetimeContact')); ?>:</b>
	<?php echo CHtml::encode($data->DatetimeContact); ?>
	<br />

	*/ ?>

</div>