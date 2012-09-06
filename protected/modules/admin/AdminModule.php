<?php
class AdminModule extends CWebModule
{
    public $theme = 'default';
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		$this->setLayoutPath('protected/modules/admin/views/layouts');
        $this->layout = 'main';
        Yii::app()->name = Yii::app()->name.' - Admin Panel';
		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
			/*'rights.components.*',
			'rights.components.behaviors.*',
			'rights.components.dataproviders.*',
			'rights.controllers.*',
			'rights.models.*',*/
			//'application.components.ActiveRecords.*'
		));
                
                $this->setComponents(array(
                    'errorHandler' => array(
                        'errorAction' => 'admin/default/error'),
                    'user' => array(
                        'allowAutoLogin'=>true,
						'class' => 'CWebUser',             
                        'loginUrl' => Yii::app()->createUrl('/admin/default/login'),
                    )
                ));
                
                Yii::app()->theme = 'admin/' . $this->theme;
                //Yii::app()->params['defaultPageSize'] = 10;

		// Set theme url
                Yii::app()->themeManager->setBaseUrl( Yii::app()->theme->baseUrl );
                Yii::app()->themeManager->setBasePath( Yii::app()->theme->basePath );
                Yii::app()->user->setStateKeyPrefix('_admin');
	}

	public function beforeControllerAction($controller, $action)
	{
			if(parent::beforeControllerAction($controller, $action))
            {
				
                $controller->layout="main";
				Yii::app()->widgetFactory->widgets['CBreadcrumbs']=array( 'homeLink'=>CHtml::link('Home', array('/admin')));
                // this method is called before any module controller action is performed
                // you may place customized code here
                 $route = $controller->id . '/' . $action->id;
                 $publicPages = array(
                    'default/login',
                    'default/error',
					'default/register',
                 );
                if (Yii::app()->user->isGuest && !in_array($route, $publicPages))
                {
                    Yii::app()->getModule('admin')->user->setReturnUrl('index');      
             
                    Yii::app()->getModule('admin')->user->loginRequired();                
                }
				else
                {
                    Yii::app()->getModule('admin')->user->setReturnUrl('index');  
                    return true;
                }
            }
            else
                    return false;
	}
}
