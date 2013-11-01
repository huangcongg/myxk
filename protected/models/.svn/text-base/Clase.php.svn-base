<?php

/**
 * This is the model class for table "clase".
 *
 * The followings are the available columns in table 'clase':
 * @property integer $class_id
 * @property string $class_name
 * @property integer $grade_id
 */
class Clase extends CActiveRecord
{
    public $school_id;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clase';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('class_name,grade_id', 'required'),
			array('grade_id', 'numerical', 'integerOnly'=>true),
			array('class_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('class_id, class_name, grade_id', 'safe', 'on'=>'search'),
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
            'grade' => array(self::BELONGS_TO, 'Grade', 'grade_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'class_id' => '班级id',
			'class_name' => '班级名称',
			'grade_id' => '年级',
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

		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('class_name',$this->class_name,true);
		$criteria->compare('grade_id',$this->grade_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
