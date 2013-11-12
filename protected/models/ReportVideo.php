<?php

/**
 * This is the model class for table "report_video".
 *
 * The followings are the available columns in table 'report_video':
 * @property integer $report_video_id
 * @property integer $report_id
 * @property integer $attach_id
 * @property string $name
 * @property integer $ctime
 * @property integer $etime
 * @property integer $ord
 * @property integer $clicks
 *
 * The followings are the available model relations:
 * @property Attach $attach
 * @property Report $report
 */
class ReportVideo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'report_video';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('report_id, attach_id', 'required'),
			array('report_id, attach_id, ctime, etime, ord, clicks', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('report_video_id, report_id, attach_id, name, ctime, etime, ord, clicks', 'safe', 'on'=>'search'),
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
			'attach' => array(self::BELONGS_TO, 'Attach', 'attach_id'),
			'report' => array(self::BELONGS_TO, 'Report', 'report_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'report_video_id' => '视频ID',
			'report_id' => '报告ID',
			'attach_id' => '视频附件ID',
			'name' => '视频名称',
			'ctime' => '创建时间',
			'etime' => '修改时间',
			'ord' => '排序',
			'clicks' => '点击次数',
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

		$criteria->compare('report_video_id',$this->report_video_id);
		$criteria->compare('report_id',$this->report_id);
		$criteria->compare('attach_id',$this->attach_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('etime',$this->etime);
		$criteria->compare('ord',$this->ord);
		$criteria->compare('clicks',$this->clicks);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReportVideo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
