<?php

class TeacherController extends CommonController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='application.modules.admin.views.layouts.column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
//			'accessControl', // perform access control for CRUD operationsc
//			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(

		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
    public function actionView($id)
    {
        $model = $this->loadModel($id);
        $student = $this->loadModelStudent($id);

        $type = array('1'=>'学生','2'=>'教师','3'=>'授课教师');
        $model->type = $type[$model->type];

        $this->render('view',array(
            'model'=>$model,
            'student'=>$student,
        ));
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;
        $student = new Student;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
            $model->attributes=$_POST['User'];
            $student->attributes=$_POST['Student'];

            // validate BOTH $a and $b
            $valid=$model->validate();
            $valid=$student->validate() && $valid;


			if($valid){
                $model->save(false);
                $student->user_id = $model->user_id;
                $student->save(false);
                $this->redirect(array('view','id'=>$model->user_id));
            }

		}

		$this->render('create',array(
			'model'=>$model,
            'student'=>$student,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $student=$this->loadModelStudent($id);

		// Uncomment the following line if AJAX validation is neededv
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes = $_POST['User'];
            $student->attributes = $_POST['Student'];
			if($model->save()){
                $student->save();
                $this->redirect(array('view','id'=>$model->user_id));
            }
		}

		$this->render('update',array(
			'model'=>$model,
            'student'=>$student,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModelStudent($id)->delete();
        $this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $this->actionAdmin();
//		$dataProvider=new CActiveDataProvider('User');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return User the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=User::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

    public function loadModelStudent($id)
    {
        $model=Student::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

	/**
	 * Performs the AJAX validation.
	 * @param User $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

    public function actionDynamicGrade(){

        $model = Clase::model()->getGradeList($_POST['school_id']);


        foreach($model as $key => $v){
            echo CHtml::tag('option',array('value'=>$key),CHtml::encode($v),true);
        }


    }

    public function actionDynamicClase(){

        $model = Clase::model()->items($_POST['grade_id']);


        foreach($model as $key => $v){
            echo CHtml::tag('option',array('value'=>$key),CHtml::encode($v),true);
        }


    }
}
