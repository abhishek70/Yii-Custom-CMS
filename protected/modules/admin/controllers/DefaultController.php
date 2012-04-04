<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionLogin()
	{
	  $this->layout="main";	
          $this->render('login');
	}
}