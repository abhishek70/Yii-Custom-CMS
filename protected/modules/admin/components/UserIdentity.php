<?php

class UserIdentity extends CUserIdentity
{
	private $userid;

	public function authenticate()
	{		
		$record=User::model()->findByAttributes(array('username'=>strtolower($this->username), 'isactive'=>'yes'));
		
		if($record===null)
		    $this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($record->password!==md5($this->password))
		{
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else
		{
           		   
		   $this->userid=$record->id;
		   $this->setState('userid', $record->id);
		   $this->errorCode=self::ERROR_NONE;		   
		}

		return !$this->errorCode;
	}
	
	public function getId()
	{
	    return $this->userid;
	}
}