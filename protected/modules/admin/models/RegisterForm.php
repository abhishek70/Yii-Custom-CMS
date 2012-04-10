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
	public $email;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('firstname,lastname,username, passwor,email', 'required'),
		);
	}
}
