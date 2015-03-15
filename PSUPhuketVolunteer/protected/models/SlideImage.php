<?php

/**
 * This is the model class for table "slide_image".
 *
 * The followings are the available columns in table 'slide_image':
 * @property integer $SlideImageID
 * @property string $SlideImage1
 * @property string $SlideImage2
 * @property string $SlideImage3
 * @property string $SlideImage4
 * @property string $Caption_1
 * @property string $Caption_2
 * @property string $Caption_3
 * @property string $Caption_4
 */
class SlideImage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'slide_image';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SlideImageID,SlideImage1, SlideImage2, SlideImage3, SlideImage4, Caption_1, Caption_2, Caption_3, Caption_4', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SlideImage1, SlideImage2, SlideImage3, SlideImage4', 'file','types'=>'jpg, gif, png , jpeg', 'allowEmpty'=>true, 'on'=>'update'), //
				
			array('SlideImage1,SlideImageID, SlideImage2, SlideImage3, SlideImage4, Caption_1, Caption_2, Caption_3, Caption_4', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SlideImage1' => 'สไลด์ที่1 ',
			'SlideImage2' => 'สไลด์ที่2 ',
			'SlideImage3' => 'สไลด์ที่3 ',
			'SlideImage4' => 'สไลด์ที่4 ',
			'Caption_1' => 'คำบรรยายสไลด์ 1 ',
			'Caption_2' => 'คำบรรยายสไลด์ 2 ',
			'Caption_3' => 'คำบรรยายสไลด์ 3 ',
			'Caption_4' => 'คำบรรยายสไลด์ 4 ',
			'SlideImageID'=>'SlideImageID'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		
		$criteria->compare('SlideImageID',$this->SlideImageID,true);
		$criteria->compare('SlideImage1',$this->SlideImage1,true);
		$criteria->compare('SlideImage2',$this->SlideImage2,true);
		$criteria->compare('SlideImage3',$this->SlideImage3,true);
		$criteria->compare('SlideImage4',$this->SlideImage4,true);
		$criteria->compare('Caption_1',$this->Caption_1,true);
		$criteria->compare('Caption_2',$this->Caption_2,true);
		$criteria->compare('Caption_3',$this->Caption_3,true);
		$criteria->compare('Caption_4',$this->Caption_4,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SlideImage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
