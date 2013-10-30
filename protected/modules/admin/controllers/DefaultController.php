<?php

class DefaultController extends CommonController
{
	public function actionIndex()
	{
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
                Yii::app()->user->setReturnUrl(array('/admin/default/index'));
                $this->redirect(Yii::app()->user->returnUrl);
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
        Yii::app()->user->logout();
        $this->redirect($this->createUrl('/admin/default/login'));
    }
}