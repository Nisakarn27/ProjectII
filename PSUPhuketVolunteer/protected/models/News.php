<?php

/**
 * This is the model class for table "news".
 *
 * The followings are the available columns in table 'news':
 * @property integer $NewsID
 * @property string $NewsHeader
 * @property string $NewsTitle
 * @property string $NewsDetail
 * @property string $NewsImage
 * @property integer $InsertBy
 * @property string $InsertDateTime
 * @property integer $UpdateBy
 * @property string $UpdateDatetime
 * @property integer $Counter
 */
class News extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NewsHeader, NewsTitle, NewsDetail, NewsImage, InsertBy, InsertDateTime, UpdateBy, UpdateDatetime', 'required'),
			array('InsertBy, UpdateBy, Counter', 'numerical', 'integerOnly'=>true),
			array('NewsHeader, NewsTitle, NewsImage', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('NewsID, NewsHeader, NewsTitle, NewsDetail, NewsImage, InsertBy, InsertDateTime, UpdateBy, UpdateDatetime, Counter', 'safe', 'on'=>'search'),
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
			'NewsID' => 'News',
			'NewsHeader' => 'News Header',
			'NewsTitle' => 'News Title',
			'NewsDetail' => 'News Detail',
			'NewsImage' => 'News Image',
			'InsertBy' => 'Insert By',
			'InsertDateTime' => 'Insert Date Time',
			'UpdateBy' => 'Update By',
			'UpdateDatetime' => 'Update Datetime',
			'Counter' => 'Counter',
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

		$criteria->compare('NewsID',$this->NewsID);
		$criteria->compare('NewsHeader',$this->NewsHeader,true);
		$criteria->compare('NewsTitle',$this->NewsTitle,true);
		$criteria->compare('NewsDetail',$this->NewsDetail,true);
		$criteria->compare('NewsImage',$this->NewsImage,true);
		$criteria->compare('InsertBy',$this->InsertBy);
		$criteria->compare('InsertDateTime',$this->InsertDateTime,true);
		$criteria->compare('UpdateBy',$this->UpdateBy);
		$criteria->compare('UpdateDatetime',$this->UpdateDatetime,true);
		$criteria->compare('Counter',$this->Counter);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return News the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
