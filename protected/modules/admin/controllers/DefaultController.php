<?php

class DefaultController extends Controller {

	public $pageHeading1;
	public $pageHeading2;
	
	public function actionIndex()
	{
		//$this->layout="main";
		if (Yii::app()->user->isGuest)
		{
			//$this->render('index');
			$this->redirect(Yii::app()->createUrl('default/login'));
		}
		else
		{
			$this->render('index');
		}
	}
        
    public function actionLogin()
	{
	   	  $this->layout="main";	
          
		  // redirec to dashboard page is user is registered
	      if (!Yii::app()->user->isGuest)
	      {
	            $this->redirect(Yii::app()->getModule('admin')->user->returnUrl);
	      }
	      else
	      {
		  
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
	}
	
	public function actionRegister() 
	{
	  $this->layout="main";
	  if (Yii::app()->user->isGuest)
	  {

		  $model=new RegisterForm;
		  
		  
		if(isset($_POST['RegisterForm']))
		{
                    $newUser = new User;
                    $model->attributes=$_POST['RegisterForm'];
			$newUser->attributes = $model->attributes;
			$newUser->password=md5($model->password);
			$newUser->isactive='yes';
			$newUser->createdon=new CDbExpression('NOW()');
			
			if($model->validate())
			{
				if($newUser->save())
				{
					$message = 'Registration Completed Successfully. Login To CMS '.CHtml::link('Click Here', array('default/login'));
					Yii::app()->user->setFlash('register',$message);
					$this->refresh();
				}
				else
				{
					$message = 'There is some problem while registration. Please try again';
					Yii::app()->user->setFlash('registererror',$message);
					$this->refresh();
				}
			}
		}
		 
		// display the register form
		$this->render('register',array('model'=>$model));
	  }	
	  else
	  {
	  	$this->redirect(Yii::app()->getModule('admin')->user->returnUrl);
	  }	
	
	}
	
	public function actionLogout() {
        
		Yii::app()->user->logout(false);
		
        $this->redirect(Yii::app()->getModule('admin')->user->loginUrl);
    }
}