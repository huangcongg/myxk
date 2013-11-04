<?php

class DefaultController extends CommonController
{
	public function actionIndex()
	{
        Yii::app()->user->checkAccess('isLogin');
		$this->render('index');
	}

    /**
     * Displays the login page
     */
    public function actionLogin()
    {

        $model=new AdminLoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['AdminLoginForm']))
        {
            $model->attributes=$_POST['AdminLoginForm'];
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login()){
                Yii::app()->admin->setReturnUrl(array('/admin/default/index'));
                $this->redirect(Yii::app()->admin->returnUrl);
            }

        }
        // display the login form
        $this->renderPartial('login',array('model'=>$model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->admin->logout(false);
        $this->redirect($this->createUrl('/admin/default/login'));
    }
}