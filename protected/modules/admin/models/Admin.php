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
    public $initialPassword = null;
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
			array('username,  email, phone', 'required'),
            array('password','required','on'=>'insert'),
			array('phone', 'numerical', 'integerOnly'=>true),
            array('username', 'length', 'min'=>3,'max'=>20),
            array('password','length','min'=>6,'max'=>20,'on'=>'insert,update'),
			array('phone', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
            array('email', 'email'),
            array('initialPassword','safe','on'=>'update'),
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
        $criteria->addCondition('`group` = 1');

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
        return $this->hashPassword($password,$this->salt)===$this->password;
    }

    public function hashPassword($password,$salt)
    {
        return md5($salt.$password);
    }

    public function beforeSave(){

        if($this->isNewRecord){ //如果是增加
            $salt = $this->generate_salt(5);//生成salt
            $this->salt = $salt;
            $this->lasttime = $this->etime = $this->ctime = time();
            $this->lastip = $this->regip = Yii::app()->request->userHostAddress;
            $this->group = 1;
            $this->password = $this->hashPassword($this->password,$this->salt);
        }else{
            $this->etime = time();

            //如果密码没有填写并且初始密码不为空，为更改状态
            if(empty($this->password)&&!empty($this->initialPassword))
                $this->password = $this->initialPassword;
            else{ //否则视为新密码，需要加密
                $this->password = $this->hashPassword($this->password,$this->salt);
            }
        }

        return parent::beforeSave();
    }


    protected function generate_salt($length) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_[]{}<>~`+=,.;:/?|';
        $salt = '';
        for ($i = 0; $i < $length; $i++) {
            // 这里提供两种字符获取方式
            // 第一种是使用 substr 截取$chars中的任意一位字符；
            // 第二种是取字符数组 $chars 的任意元素
            // $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
            $salt .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $salt;
    }
}
