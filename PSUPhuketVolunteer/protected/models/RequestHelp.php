<?php

/**
 * This is the model class for table "request_help".
 *
 * The followings are the available columns in table 'request_help':
 * @property integer $RequestID
 * @property integer $HelpingID
 * @property integer $LocationID
 * @property string $ProjectName
 * @property string $RequestName
 * @property string $RequestDetail
 * @property string $RequestImage
 * @property string $DateTimeStart
 * @property string $DateTimeStop
 * @property integer $Counter
 * @property integer $Activate
 */
class RequestHelp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'request_help';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HelpingID, LocationID, ProjectName, RequestName, RequestDetail, DateTimeStart, DateTimeStop', 'required'),
			array('HelpingID, LocationID, Counter, Activate', 'numerical', 'integerOnly'=>true),
			array('ProjectName', 'length', 'max'=>300),
			array('RequestName', 'length', 'max'=>200),
			array('RequestImage', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RequestID, HelpingID, LocationID, ProjectName, RequestName, RequestDetail, RequestImage, DateTimeStart, DateTimeStop, Counter, Activate', 'safe', 'on'=>'search'),
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
			'RequestID' => 'Request',
			'HelpingID' => 'Helping',
			'LocationID' => 'Location',
			'ProjectName' => 'Project Name',
			'RequestName' => 'Request Name',
			'RequestDetail' => 'Request Detail',
			'RequestImage' => 'Request Image',
			'DateTimeStart' => 'Date Time Start',
			'DateTimeStop' => 'Date Time Stop',
			'Counter' => 'Counter',
			'Activate' => 'Activate',
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

		$criteria->compare('RequestID',$this->RequestID);
		$criteria->compare('HelpingID',$this->HelpingID);
		$criteria->compare('LocationID',$this->LocationID);
		$criteria->compare('ProjectName',$this->ProjectName,true);
		$criteria->compare('RequestName',$this->RequestName,true);
		$criteria->compare('RequestDetail',$this->RequestDetail,true);
		$criteria->compare('RequestImage',$this->RequestImage,true);
		$criteria->compare('DateTimeStart',$this->DateTimeStart,true);
		$criteria->compare('DateTimeStop',$this->DateTimeStop,true);
		$criteria->compare('Counter',$this->Counter);
		$criteria->compare('Activate',$this->Activate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RequestHelp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
