<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property integer $admin_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property integer $ctime
 * @property integer $etime
 * @property string $regip
 * @property integer $lasttime
 * @property string $lastip
 * @property integer $group
 */
class Admin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, phone, ctime, etime, regip, lasttime, lastip, group', 'required'),
			array('ctime, etime, lasttime, group', 'numerical', 'integerOnly'=>true),
			array('username, password, phone', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			array('regip, lastip', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('admin_id, username, password, email, phone, ctime, etime, regip, lasttime, lastip, group', 'safe', 'on'=>'search'),
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
			'admin_id' => 'id',
			'username' => '用户名',
			'password' => '密码',
			'email' => 'Email',
			'phone' => '电话',
			'ctime' => '添加时间',
			'etime' => '修改时间',
			'regip' => '注册ip',
			'lasttime' => '最后登录时间',
			'lastip' => '最后登录ip',
			'group' => '用户组',
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

		$criteria->compare('admin_id',$this->admin_id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('ctime',$this->ctime);
		$criteria->compare('etime',$this->etime);
		$criteria->compare('regip',$this->regip,true);
		$criteria->compare('lasttime',$this->lasttime);
		$criteria->compare('lastip',$this->lastip,true);
		$criteria->compare('group',$this->group);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


    public function validatePassword($password)
    {
        var_dump($this->hashPassword($password,$this->salt));
        return $this->hashPassword($password,$this->salt)===$this->password;
    }

    public function hashPassword($password,$salt)
    {
        return md5($salt.$password);
    }
}
