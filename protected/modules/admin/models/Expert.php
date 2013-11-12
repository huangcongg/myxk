<?php

/**
 * This is the model class for table "expert".
 *
 * The followings are the available columns in table 'expert':
 * @property integer $expert_id
 * @property string $path
 * @property string $realname
 * @property string $subject
 * @property string $desc
 * @property string $achieve
 * @property string $quote_text
 * @property string $email
 *
 * The followings are the available model relations:
 * @property Report[] $reports
 * @property Report[] $reports1
 */
class Expert extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'expert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('realname, subject, desc, achieve, quote_text, email', 'required'),
			array('path', 'length', 'max'=>100),
			array('realname, subject', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			array('email', 'email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('expert_id, realname, subject, desc, achieve, quote_text, email', 'safe', 'on'=>'search'),
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
			'reports' => array(self::HAS_MANY, 'Report', 'realname'),
			'reports1' => array(self::HAS_MANY, 'Report', 'expert_id'),
			'expertsubjuect' => array(self::BELONGS_TO, 'ExpertSubject', 'subject'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'expert_id' => '名师id',
			'path' => '名师头像',
			'realname' => '名师姓名',
			'subject' => '所属学科',
			'desc' => '名师简介',
			'achieve' => '主要成果',
			'quote_text' => '精彩语录',
			'email' => 'email',
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

		$criteria->compare('expert_id',$this->expert_id);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('achieve',$this->achieve,true);
		$criteria->compare('quote_text',$this->quote_text,true);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Expert the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
