
<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    		//'action'=>Yii::app()->createUrl('//sit/index'),
    		'enableAjaxValidation'=>false,
    		'type' => 'horizontal',
    		'clientOptions'=>array(
    				'validateOnSubmit'=>true,
    		),
    		
    		'htmlOptions'=>array('class'=>'form-horizontal',
    				'role'=>'form',
    				'enctype' => 'multipart/form-data'),
     //		'htmlOptions' => array('class' => 'panel panel-default'), // for inset effect
     //   'htmlOptions' => array('class' => 'well'), // for inset effect
    )
); ?>   
        
<p class="help-block"><span class="required">*</span> ช่องที่ต้องใส่ </p>
<br>
<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'NewsHeader',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textFieldGroup($model,'NewsTitle',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php echo $form->textAreaGroup($model,'NewsDetail', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>40, 'class'=>'span5')))); ?>
	
	<?php echo $form->fileFieldGroup($model, 'NewsImage',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
					'onchange'=>"uploadImage(this)" ,'data-target'=>"#aImgShow"
				),
			)

		); ?>
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>


<?php $this->endWidget(); ?>
