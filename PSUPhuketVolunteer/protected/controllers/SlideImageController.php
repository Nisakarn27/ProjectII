<?php

class SlideImageController extends Controller
{
public $layout='//layouts/column2';

/**
* @return array action filters
*/
public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

public function accessRules()
{
	return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
					'actions'=>array('update3','update2','update1','update','index','view'),
					'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
					'actions'=>array('create'),
					'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
					'actions'=>array('admin','delete'),
					'users'=>array('admin'),
			),
			array('deny',  // deny all users
					'users'=>array('*'),
			),
	);
}

public function actionUpdate()
{
	$id=1;
	$model=$this->loadModel($id);

	if(isset($_POST['SlideImage']))
	{
		$_POST['SlideImage']['SlideImage1'] = $model->SlideImage1;
		$model->attributes=$_POST['SlideImage'];

		$uploadedFile=CUploadedFile::getInstance($model,'SlideImage1');

		if($model->save())
		{
			if(!empty($uploadedFile))  // check if uploaded file is set or not
			{	$model->SlideImage1=$uploadedFile;
				$model->Save();
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/upload/Slider/';
				$uploadedFile->saveAs($path.$model->SlideImage1);
				
				Yii::import("ext.EPhpThumb.EPhpThumb.EPhpThumb");
				$thumb=new EPhpThumb();
				$thumb->init(); //this is needed
				//chain functions
				
				
				$thumb=Yii::app()->phpThumb->create($path .$model->SlideImage1);
				$thumb->adaptiveResize(600,350);
				$thumb->save($path .$model->SlideImage1 );
			}
// 				$this->redirect( array( 'site/index' ) );
					}

	}

	$this->render('update',array(
			'model'=>$model,
	));
}
public function actionUpdate1()
{
	$id=1;
	$model=$this->loadModel($id);

	if(isset($_POST['SlideImage']))
	{
		$_POST['SlideImage']['SlideImage2'] = $model->SlideImage2;
		$model->attributes=$_POST['SlideImage'];

		$uploadedFile=CUploadedFile::getInstance($model,'SlideImage2');

		if($model->save())
		{
			if(!empty($uploadedFile))  // check if uploaded file is set or not
			{	$model->SlideImage2=$uploadedFile;
				$model->Save();
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/upload/Slider/';
				$uploadedFile->saveAs($path.$model->SlideImage2);
			
				Yii::import("ext.EPhpThumb.EPhpThumb.EPhpThumb");
				$thumb=new EPhpThumb();
				$thumb->init(); //this is needed
				//chain functions
				
				
				$thumb=Yii::app()->phpThumb->create($path .$model->SlideImage2);
				$thumb->adaptiveResize(600,350);
				
				$thumb->save($path .$model->SlideImage2 );
			}
// 				$this->redirect( array( 'site/index' ) );
					}

	}

	$this->render('update',array(
			'model'=>$model,
	));
}
public function actionUpdate2()
{
	$id=1;
	$model=$this->loadModel($id);

	if(isset($_POST['SlideImage']))
	{
		$_POST['SlideImage']['SlideImage3'] = $model->SlideImage3;
		$model->attributes=$_POST['SlideImage'];

		$uploadedFile=CUploadedFile::getInstance($model,'SlideImage3');

		if($model->save())
		{
			if(!empty($uploadedFile))  // check if uploaded file is set or not
			{
				$model->SlideImage3=$uploadedFile;
				$model->Save();
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/upload/Slider/';
				$uploadedFile->saveAs($path.$model->SlideImage3);
				
				Yii::import("ext.EPhpThumb.EPhpThumb.EPhpThumb");
				$thumb=new EPhpThumb();
				$thumb->init(); //this is needed
				//chain functions


				$thumb=Yii::app()->phpThumb->create($path .$model->SlideImage3);
				$thumb->adaptiveResize(600,350);

				$thumb->save($path .$model->SlideImage3 );
			}
			// 				$this->redirect( array( 'site/index' ) );
		}

	}

	$this->render('update',array(
			'model'=>$model,
	));
}
public function actionUpdate3()
{
	$id=1;
	$model=$this->loadModel($id);

	if(isset($_POST['SlideImage']))
	{
		$_POST['SlideImage']['SlideImage4'] = $model->SlideImage4;
		$model->attributes=$_POST['SlideImage'];

		$uploadedFile=CUploadedFile::getInstance($model,'SlideImage4');

		if($model->save())
		{
			if(!empty($uploadedFile))  // check if uploaded file is set or not
			{   $model->SlideImage4=$uploadedFile;
				$model->Save();
				$path = Yii::getPathOfAlias ( 'webroot' ) . '/upload/Slider/';
				$uploadedFile->saveAs($path.$model->SlideImage4);
				Yii::import("ext.EPhpThumb.EPhpThumb.EPhpThumb");
				$thumb=new EPhpThumb();
				$thumb->init(); //this is needed
				//chain functions


				$thumb=Yii::app()->phpThumb->create($path .$model->SlideImage4);
				$thumb->adaptiveResize(600,350);

				$thumb->save($path .$model->SlideImage4 );
			}
			// 				$this->redirect( array( 'site/index' ) );
		}

	}

	$this->render('update',array(
			'model'=>$model,
	));
}

public function loadModel($id)
{
	$model=SlideImage::model()->findByPk($id);
	if($model===null)
		throw new CHttpException(404,'The requested page does not exist.');
	return $model;
}

}