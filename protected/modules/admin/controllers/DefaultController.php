<?php

class DefaultController extends Controller {

	public $pageHeading1;
	public $pageHeading2;
	
	public function actionIndex()
	{
		//$this->layout="main";	
		$this->render('index');
	}
        
    public function actionLogin()
	{
	   	  $this->layout="main";	
          $model=new LoginForm;

		  // if it is ajax validation request
		  if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		  {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		  }

		  // collect user input data
		  if(isset($_POST['LoginForm']))
		  {
			 $model->attributes=$_POST['LoginForm'];
			 // validate user input and redirect to the previous page if valid
			 if($model->validate() && $model->login())
				$this->redirect(Yii::app()->getModule('admin')->user->returnUrl);
				//$this->redirect(Yii::app()->user->returnUrl);
		  }
		  // display the login form
		  $this->render('login',array('model'=>$model));
	}
	
	public function actionRegister() 
	{
		  $this->layout="main";
		  $model=new RegisterForm;
		  $newUser = new User;
		  
		if(isset($_POST['RegisterForm']))
		{
			$model->attributes=$_POST['RegisterForm'];
			$newUser->attributes = $model->attributes;
			$newUser->password=md5($model->password);
			$newUser->isactive='yes';
			$newUser->createdon=new CDbExpression('NOW()');
			
			if($model->validate())
			{
				$newUser->save();
				$message = 'Registration Completed Successfully. Login To CMS '.CHtml::link('Click Here', array('default/login'));
				Yii::app()->user->setFlash('register',$message);
				$this->refresh();
			}
		}
		 
		// display the register form
		$this->render('register',array('model'=>$model));		
	
	}
	
	public function actionLogout() {
        
		Yii::app()->user->logout(false);
		
        $this->redirect(Yii::app()->getModule('admin')->user->loginUrl);
    }
}