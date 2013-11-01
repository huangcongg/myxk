<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property integer $ctime
 * @property integer $etime
 * @property integer $lasttime
 * @property integer $lastip
 * @property integer $type
 * @property integer $total_points
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password,  type', 'required'),
            array('username','unique'),
			array('username, password', 'length', 'max'=>20),
			array('email, phone', 'length', 'max'=>50),
            array('email', 'email'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, username, password, email, phone, ctime, etime, lasttime, lastip, type, total_points', 'safe', 'on'=>'search'),
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
			'user_id' => '用户id',
			'username' => '用户名',
			'password' => '密码',
			'email' => 'Email',
			'phone' => '电话',
			'ctime' => '创建时间',
			'etime' => '编辑时间',
			'lasttime' => '最后登录时间',
			'lastip' => '最后登录ip',
			'type' => '用户类型',
			'total_points' => '总积分',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('etime',$this->etime);
		$criteria->compare('lasttime',$this->lasttime);
		$criteria->compare('lastip',$this->lastip);
		$criteria->compare('type',$this->type);
		$criteria->compare('total_points',$this->total_points);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->ctime=$this->etime=time();
            }
            else
                $this->etime=time();
            return true;
        }
        else
            return false;
    }
}
