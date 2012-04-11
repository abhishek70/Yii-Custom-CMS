<?php

/**
 * RegisterForm class.
 * RegisterForm is the data structure for keeping
 * user register data.
 */
class RegisterForm extends CFormModel
{
	public $firstname;
	public $lastname;
	public $username;
	public $password;
	public $confirmpassword;
	public $email;
	public $isactive;
	public $createdon;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			array('username, password, confirmpassword, firstname, lastname, email', 'required'),
			array('username, password, confirmpassword, firstname, lastname, email', 'safe'),
			array('username', 'match', 'pattern'=>'/^\S+$/', 'message'=>'Invalid username'),
			array('username', 'availableUsername'),
			array('email', 'availableuseremail'),
			array('password', 'length', 'min'=>8, 'max'=>255),
			array('password', 'match', 'pattern'=>'/^(?=.*[a-zA-Z0-9]).{8,}$/', 'message'=>'Your password is too weak, needs to be at least 8 characters'),
			array('confirmpassword', 'compare', 'compareAttribute'=>'password', 'message'=>'Passwords do not match'),
			array('email', 'email')
		);
	}
	
	public function attributeLabels()
	{
		return array(
			'confirmpassword'=>'Confirm Password',
			'firstname'=>'First Name',
			'lastname'=>'Last Name',
			'email'=>'Email',
		);
	}
	
	public function availableUsername($attribute,$params)
	{
		if (User::model()->exists(
			array(
			      'condition'=>'username=:username',
			      'params'=>array(':username'=>$this->username),
			      ))
				)
		{
			$this->addError('username','Username unavailable');
		}
	}
	
	public function availableuseremail($attribute,$params)
	{
		if (User::model()->exists(
			array(
			      'condition'=>'email=:email',
			      'params'=>array(':email'=>$this->email),
			      ))
				)
		{
			$this->addError('email','This email id is already used.Please enter another one.');
		}
	}
}
