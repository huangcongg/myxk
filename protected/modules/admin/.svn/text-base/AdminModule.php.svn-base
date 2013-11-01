<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));

        Yii::app()->theme = 'classic';

	}

	public function beforeControllerAction($controller, $action)
	{
        //$controller->layout = 'application.modules.admin.views.layouts.main'; //调用模块自己的布局文件
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
