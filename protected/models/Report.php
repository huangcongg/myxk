<?php

/**
 * This is the model class for table "report".
 *
 * The followings are the available columns in table 'report':
 * @property integer $report_id
 * @property string $title
 * @property string $realname
 * @property integer $expert_id
 * @property string $desc
 * @property integer $ctime
 * @property integer $etime
 * @property integer $ord
 * @property integer $attention
 *
 * The followings are the available model relations:
 * @property ExtendRead[] $extendReads
 * @property Expert $expert
 * @property Expert $realname0
 * @property ReportVideo[] $reportVideos
 */
class Report extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, expert_id', 'required'),
			array('expert_id, ctime, etime, ord, attention', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>50),
			array('realname', 'length', 'max'=>20),
			array('desc', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('report_id, title, realname, expert_id, desc, ctime, etime, ord, attention', 'safe', 'on'=>'search'),
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
			'extendReads' => array(self::HAS_MANY, 'ExtendRead', 'report_id'),
			'expert' => array(self::BELONGS_TO, 'Expert', 'expert_id'),
			'realname0' => array(self::BELONGS_TO, 'Expert', 'realname'),
			'reportVideos' => array(self::HAS_MANY, 'ReportVideo', 'report_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'report_id' => '讲座ID',
			'title' => '讲座标题',
			'realname' => '名师姓名',
			'expert_id' => '名师ID',
			'desc' => '讲座简介',
			'ctime' => '创建时间',
			'etime' => '修改时间',
			'ord' => '排序',
			'attention' => '关注度',
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

		$criteria->compare('report_id',$this->report_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('realname',$this->realname,true);
		$criteria->compare('expert_id',$this->expert_id);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('etime',$this->etime);
		$criteria->compare('ord',$this->ord);
		$criteria->compare('attention',$this->attention);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Report the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
