

<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    		'action'=>Yii::app()->createUrl('//SlideImage/Update'),
    		
    		'enableAjaxValidation'=>false,
    		'type' => 'horizontal',
    		'clientOptions'=>array(
    				'validateOnSubmit'=>true,
    		),
    		'htmlOptions'=>array('class'=>'form-horizontal well',
    				'role'=>'form',
    				'enctype' => 'multipart/form-data'),
     //		'htmlOptions' => array('class' => 'panel panel-default'), // for inset effect
     //   'htmlOptions' => array('class' => 'well'), // for inset effect
    )
); ?>
<h3> สไลด์ที่ 1 </h3>

<?php echo $form->errorSummary($model); ?>

	<div class="list-group">
 <?php     if(!empty($model->SlideImage1)): echo '
    <div class="form-group">
 
    <img src="'.Yii::app()->request->baseUrl.  '/upload/Slider/'.$model->SlideImage1.'" style="width:500px;"><br><br>'.
 $form->fileFieldGroup($model,'SlideImage1',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); 
echo $form->textAreaGroup($model,'Caption_1',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200))));

    '</div>';
            else :echo '<div class="form-group">
    <div class="col-sm-4 col-md-3">no image</div></div>';
            endif; ?>
</div>

<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'เปลี่ยนสไลด์',
		)); ?>
<?php $this->endWidget(); ?>
<br><br><br>

<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    		'action'=>Yii::app()->createUrl('//SlideImage/Update1'),
    		
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

<h3> สไลด์ที่ 2 </h3>

<?php echo $form->errorSummary($model); ?>

	<div class="list-group">
 <?php     if(!empty($model->SlideImage2)): echo '
    <div class="form-group">
 
    <img src="'.Yii::app()->request->baseUrl.  '/upload/Slider/'.$model->SlideImage2.'" style="width:500px;"><br><br>'.
 $form->fileFieldGroup($model,'SlideImage2',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); 
echo $form->textAreaGroup($model,'Caption_2',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200))));

    '</div>';
            else :echo '<div class="form-group">
    <div class="col-sm-4 col-md-3">no image</div></div>';
            endif; ?>
</div>

<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'เปลี่ยนสไลด์',
		)); ?>
<?php $this->endWidget(); ?>
<br><br><br>
<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    		'action'=>Yii::app()->createUrl('//SlideImage/Update2'),
    		
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

<h3> สไลด์ที่ 3</h3>

<?php echo $form->errorSummary($model); ?>

	<div class="list-group">
 <?php     if(!empty($model->SlideImage3)): echo '
    <div class="form-group">
 
    <img src="'.Yii::app()->request->baseUrl.  '/upload/Slider/'.$model->SlideImage3.'" style="width:500px;"><br><br>'.
 $form->fileFieldGroup($model,'SlideImage3',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); 
echo $form->textAreaGroup($model,'Caption_3',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200))));

    '</div>';
            else :echo '<div class="form-group">
    <div class="col-sm-4 col-md-3">no image</div></div>';
            endif; ?>
</div>

<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'เปลี่ยนสไลด์',
		)); ?>
<?php $this->endWidget(); ?>


<br><br><br>
<?php $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
        'id' => 'verticalForm',
    		'action'=>Yii::app()->createUrl('//SlideImage/Update3'),
    		
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

<h3> สไลด์ที่ 4 </h3>

<?php echo $form->errorSummary($model); ?>

	<div class="list-group">
 <?php     if(!empty($model->SlideImage4)): echo '
    <div class="form-group">
 
    <img src="'.Yii::app()->request->baseUrl.  '/upload/Slider/'.$model->SlideImage4.'" style="width:500px;"><br><br>'.
 $form->fileFieldGroup($model,'SlideImage4',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); 
echo $form->textAreaGroup($model,'Caption_4',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200))));

    '</div>';
            else :echo '<div class="form-group">
    <div class="col-sm-4 col-md-3">no image</div></div>';
            endif; ?>
</div>

<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'เปลี่ยนสไลด์',
		)); ?>
<?php $this->endWidget(); ?>
