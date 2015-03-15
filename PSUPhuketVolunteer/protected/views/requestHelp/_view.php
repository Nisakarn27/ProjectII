<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('RequestID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RequestID),array('view','id'=>$data->RequestID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HelpingID')); ?>:</b>
	<?php echo CHtml::encode($data->HelpingID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LocationID')); ?>:</b>
	<?php echo CHtml::encode($data->LocationID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectName')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RequestName')); ?>:</b>
	<?php echo CHtml::encode($data->RequestName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RequestDetail')); ?>:</b>
	<?php echo CHtml::encode($data->RequestDetail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RequestImage')); ?>:</b>
	<?php echo CHtml::encode($data->RequestImage); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DateTimeStart')); ?>:</b>
	<?php echo CHtml::encode($data->DateTimeStart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateTimeStop')); ?>:</b>
	<?php echo CHtml::encode($data->DateTimeStop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Counter')); ?>:</b>
	<?php echo CHtml::encode($data->Counter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activate')); ?>:</b>
	<?php echo CHtml::encode($data->Activate); ?>
	<br />

	*/ ?>

</div>