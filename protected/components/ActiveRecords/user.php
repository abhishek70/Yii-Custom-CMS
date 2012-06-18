<?php
/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $firstname
 * @property string $lastname
 * @property string $isactive
 * @property string $createdon
 * @property string $updatedon
 */
class User extends CActiveRecord
{
	
	public $firstname;
	public $lastname;
	public $username;
	public $password;
	//public $confirmpassword;
	public $email;
	public $isactive;
	public $createdon;
	public $initialPassword;
	
	public function rules()
	{
		return array(
			array('username, email, firstname, lastname', 'required'),
			array('password', 'required','on'=>'insert'),
			array('username, password, email, firstname, lastname', 'length', 'max'=>255),
			array('username, password, firstname, lastname, email', 'safe'),
			array('username', 'match', 'pattern'=>'/^[A-Z\ \.a-z0-9_-]+$/u', 'message'=>'Incorrect symbols. Allowed Characters: A-z 0-9 . - _")'),
			/*array('username', 'availableUsername','on'=>'insert'),
			array('email', 'availableuseremail','on'=>'insert'),
			array('username','unique','on'=>'update'),
			array('email','unique','on'=>'update'),*/
			array('username','unique'),
			array('email','unique'),
			array('password', 'length', 'min'=>8, 'max'=>255),
			array('password', 'match', 'pattern'=>'/^(?=.*[a-zA-Z0-9]).{8,}$/', 'message'=>'Your password is too weak, needs to be at least 8 characters'),
			array('email', 'email','checkMX' => true),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, email, firstname, lastname, isactive,', 'safe', 'on'=>'search'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'confirmpassword'=>'Confirm Password',
			'email' => 'Email',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'isactive' => 'Isactive',
			'createdon' => 'Createdon',
			'updatedon' => 'Updatedon',
		);
	}
	

	public static function model($className=__CLASS__)
	{
	    return parent::model($className);
	}
	
	public function tableName()
	{
	    return 'user';
	}
	
	public function primaryKey()
	{
	    return 'id';
	}
	
	public function relations()
 	{
 		 return array( 
         );
 	}
	
	public function beforeSave()
    {
        // in this case, we will use the old hashed password.
        if(empty($this->password) && !empty($this->initialPassword))
            $this->password=$this->initialPassword;
 
        return parent::beforeSave();
    }
	
	
	public function afterFind()
    {
        //reset the password to null because we don't want the hash to be shown.
        $this->initialPassword = $this->password;
        $this->password = null;
 
        parent::afterFind();
    }
	
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('isactive',$this->isactive,true);
                //$criteria->compare('isdeleted','no',false);

		return new CActiveDataProvider($this, array(
                    'pagination'=>array(
                        'pageSize'=> Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']),
                    ),
		    'criteria'=>$criteria,
		));
	}
}
?>