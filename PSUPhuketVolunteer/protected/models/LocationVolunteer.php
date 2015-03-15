<?php

/**
 * This is the model class for table "location_volunteer".
 *
 * The followings are the available columns in table 'location_volunteer':
 * @property integer $LocationID
 * @property string $LocationName
 * @property string $LocationAddress
 * @property integer $AmphurID
 * @property integer $ProvinceID
 * @property integer $LocationPostCode
 * @property string $LocationImage
 * @property double $Latitude
 * @property double $Longitude
 * @property string $MobileNumber
 * @property string $Telephone
 * @property string $Fax
 * @property string $ContactName
 * @property string $Website
 * @property string $Email
 * @property string $DatetimeContact
 */
class LocationVolunteer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'location_volunteer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('LocationName, LocationAddress, AmphurID, ProvinceID, LocationPostCode, LocationImage, Latitude, Longitude, ContactName', 'required'),
			array('AmphurID, ProvinceID, LocationPostCode', 'numerical', 'integerOnly'=>true),
			array('Latitude, Longitude', 'numerical'),
			array('LocationName, ContactName, Website, Email', 'length', 'max'=>200),
			array('LocationImage', 'length', 'max'=>100),
			array('MobileNumber, Telephone, Fax', 'length', 'max'=>20),
			array('DatetimeContact', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('LocationID, LocationName, LocationAddress, AmphurID, ProvinceID, LocationPostCode, LocationImage, Latitude, Longitude, MobileNumber, Telephone, Fax, ContactName, Website, Email, DatetimeContact', 'safe', 'on'=>'search'),
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
				'location'=>array(self::BELONGS_TO, 'HelpingTb', 'HelpingID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'LocationID' => 'Location',
			'LocationName' => 'Location Name',
			'LocationAddress' => 'Location Address',
			'AmphurID' => 'Amphur',
			'ProvinceID' => 'Province',
			'LocationPostCode' => 'Location Post Code',
			'LocationImage' => 'Location Image',
			'Latitude' => 'Latitude',
			'Longitude' => 'Longitude',
			'MobileNumber' => 'Mobile Number',
			'Telephone' => 'Telephone',
			'Fax' => 'Fax',
			'ContactName' => 'Contact Name',
			'Website' => 'Website',
			'Email' => 'Email',
			'DatetimeContact' => 'Datetime Contact',
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

		$criteria->compare('LocationID',$this->LocationID);
		$criteria->compare('LocationName',$this->LocationName,true);
		$criteria->compare('LocationAddress',$this->LocationAddress,true);
		$criteria->compare('AmphurID',$this->AmphurID);
		$criteria->compare('ProvinceID',$this->ProvinceID);
		$criteria->compare('LocationPostCode',$this->LocationPostCode);
		$criteria->compare('LocationImage',$this->LocationImage,true);
		$criteria->compare('Latitude',$this->Latitude);
		$criteria->compare('Longitude',$this->Longitude);
		$criteria->compare('MobileNumber',$this->MobileNumber,true);
		$criteria->compare('Telephone',$this->Telephone,true);
		$criteria->compare('Fax',$this->Fax,true);
		$criteria->compare('ContactName',$this->ContactName,true);
		$criteria->compare('Website',$this->Website,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('DatetimeContact',$this->DatetimeContact,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LocationVolunteer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
