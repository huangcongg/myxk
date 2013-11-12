<?php

/**
 * This is the model class for table "course".
 *
 * The followings are the available columns in table 'course':
 * @property integer $course_id
 * @property integer $report_title
 * @property integer $report_id
 * @property string $title
 * @property string $school
 * @property string $Lecturer
 * @property integer $ctime
 * @property integer $student_num
 * @property integer $attention
 * @property integer $starttime
 * @property string $brief
 * @property string $introduce
 * @property string $content
 * @property integer $status
 * @property string $reviewer
 * @property integer $reviewer_id
 * @property string $resourceids
 *
 * The followings are the available model relations:
 * @property CourseType[] $courseTypes
 */
class Course extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'course';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('report_title, report_id, title, school, Lecturer, ctime, student_num, attention, starttime, brief, introduce, reviewer, reviewer_id, resourceids', 'required'),
			array('report_title, report_id, ctime, student_num, attention, starttime, status, reviewer_id', 'numerical', 'integerOnly'=>true),
			array('title, school, Lecturer', 'length', 'max'=>50),
			array('reviewer', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('course_id, report_title, report_id, title, school, Lecturer, ctime, student_num, attention, starttime, brief, introduce,  status, reviewer, reviewer_id, resourceids', 'safe', 'on'=>'search'),
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
			'courseTypes' => array(self::MANY_MANY, 'CourseType', 'course_type_relationship(course_id, course_type_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'course_id' => '课程id',
			'report_title' => '讲座标题',
			'report_id' => '讲座id',
			'title' => '课程标题',
			'school' => '学校',
			'Lecturer' => '授课教师',
			'ctime' => '课程添加时间',
			'student_num' => '学生人数',
			'attention' => '关注度',
			'starttime' => '开始时间',
			'brief' => '简介',
			'introduce' => '导读',
			
			'status' => '审核状态',
			'reviewer' => '审核人',
			'reviewer_id' => '审核人id',
			'resourceids' => '资源ids',
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

		$criteria->compare('course_id',$this->course_id);
		$criteria->compare('report_title',$this->report_title);
		$criteria->compare('report_id',$this->report_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('school',$this->school,true);
		$criteria->compare('Lecturer',$this->Lecturer,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('student_num',$this->student_num);
		$criteria->compare('attention',$this->attention);
		$criteria->compare('starttime',$this->starttime);
		$criteria->compare('brief',$this->brief,true);
		$criteria->compare('introduce',$this->introduce,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('reviewer',$this->reviewer,true);
		$criteria->compare('reviewer_id',$this->reviewer_id);
		$criteria->compare('resourceids',$this->resourceids,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Course the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
