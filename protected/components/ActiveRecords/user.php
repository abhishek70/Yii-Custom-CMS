<?php

class user extends CActiveRecord
{
	public function rules()
	{
		return array(
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