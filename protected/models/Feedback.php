<?php

/**
 * This is the model class for table "feedback".
 *
 * The followings are the available columns in table 'feedback':
 * @property integer $feedback_id
 * @property string $type
 * @property string $title
 * @property string $content
 * @property integer $ctime
 * @property integer $asker
 * @property string $answer_content
 * @property integer $answer_time
 * @property integer $answerer
 *
 * The followings are the available model relations:
 * @property Admin $answerer0
 * @property User $asker0
 */
class Feedback extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'feedback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, title, content, answer_content', 'required'),
			array('type', 'length', 'max'=>20),
			array('title', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('feedback_id, type, title, content, ctime, asker, answer_content, answer_time, answerer', 'safe', 'on'=>'search'),
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
			'admin' => array(self::BELONGS_TO, 'Admin', 'answerer'),
			'user' => array(self::BELONGS_TO, 'User', 'asker'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'feedback_id' => '意见id',
			'type' => '意见类型',
			'title' => '意见主题',
			'content' => '意见内容',
			'ctime' => '反馈时间',
			'asker' => '提问者',
			'answer_content' => '答复内容',
			'answer_time' => '回答时间',
			'answerer' => '回答者',
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

		$criteria->compare('feedback_id',$this->feedback_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('asker',$this->asker);
		$criteria->compare('answer_content',$this->answer_content,true);
		$criteria->compare('answer_time',$this->answer_time);
		$criteria->compare('answerer',$this->answerer);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Feedback the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
