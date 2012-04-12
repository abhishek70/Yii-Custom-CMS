<?php

class user extends CActiveRecord
{
	
	public $firstname;
	public $lastname;
	public $username;
	public $password;
	public $confirmpassword;
	public $email;
	public $isactive;
	public $createdon;
	
	public function rules()
	{
		return array(
			array('username, password, confirmpassword, firstname, lastname, email', 'safe'),
		);
	}

	public function attributeLabels()
	{
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
}
?>