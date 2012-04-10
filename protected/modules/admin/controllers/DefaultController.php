<?php

class DefaultController extends Controller {

	public function actionIndex()
	{
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
				$this->redirect(Yii::app()->user->returnUrl);
		  }
		  // display the login form
		  $this->render('login',array('model'=>$model));
	}
	
	public function actionRegister() 
	{
		  $this->layout="main";
		  $model=new RegisterForm;
		 
		  // display the register form
		  $this->render('register',array('model'=>$model));		
	
	}
	
	public function actionLogout() {
        
		Yii::app()->user->logout(false);
		
        $this->redirect(Yii::app()->getModule('admin')->user->loginUrl);
    }
}