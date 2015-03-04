<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('NewsID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NewsID),array('view','id'=>$data->NewsID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NewsHeader')); ?>:</b>
	<?php echo CHtml::encode($data->NewsHeader); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NewsTitle')); ?>:</b>
	<?php echo CHtml::encode($data->NewsTitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NewsDetail')); ?>:</b>
	<?php echo CHtml::encode($data->NewsDetail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NewsImage')); ?>:</b>
	<?php echo CHtml::encode($data->NewsImage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InsertBy')); ?>:</b>
	<?php echo CHtml::encode($data->InsertBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InsertDateTime')); ?>:</b>
	<?php echo CHtml::encode($data->InsertDateTime); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdateBy')); ?>:</b>
	<?php echo CHtml::encode($data->UpdateBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('UpdateDatetime')); ?>:</b>
	<?php echo CHtml::encode($data->UpdateDatetime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Counter')); ?>:</b>
	<?php echo CHtml::encode($data->Counter); ?>
	<br />

	*/ ?>

</div>