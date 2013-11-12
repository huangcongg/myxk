<?php

class ReportVideoController extends CommonController
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
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			/*array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),*/
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ReportVideo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReportVideo']))
		{
			$model->attributes=$_POST['ReportVideo'];
			$file=CUploadedFile::getInstance($model,'attach_id');								 	//获取表单名为filename的上传信息
			if($file){
				global $FV;
				$filename=$file->getName();          											//获取文件名
				$filesize=$file->getSize();                								 		//获取文件大小
				$filetype=$file->getType();                										//获取文件类型
				$fileextName = $file->extensionName;											//获取文件后缀名称
				$FV->TFS = $filesize;
				$FV->TFEN = $fileextName;
				
				//验证文件大小与后缀名
				if($FV->VerifyViedoSize() && $FV->VerifyViedoExtName()){
					if($fileextName!=''){
						//$filename1=iconv("utf-8", "gb2312", $filename);							//这里是处理中文的问题，非中文不需要
						$filepath = '/assets/upload/photo/'.date('Y').'/'.date('m').'/'.date('d');	//文件保存路径
						if(!$FV->FolderPath(".".$filepath)){
							echo '上传路径./assets/upload/下的权限不够不能创建信息';
							exit;
						}
						$uploadfile="{$filepath}/".time()."_".rand(1,999).".".$fileextName;			//更换存储文件名
						$file->saveAs(".".$uploadfile,true);
					}
				}else{
					echo "上传文件的格式只能是 ".implode(",",$FV->ViedoExtName)." 且大小不能超出{$FV->ImgMaxSize}M";
					exit;
				}
				if(!$file->error){
					$model->attach_id=$uploadfile;                 									//数据库中要存放文件名
				}else{
					echo '上传的图片有误';
					exit;
				}
			}
			if($model->attach_id){
				$attach_url = $model->attach_id;
				$model->attach_id = 1;
			}
			if($model->validate()){
				$Attach_Model = new Attach;
				$Attach_Model -> attach_url =$attach_url;
				$Attach_Model -> ctime = time();
				$Attach_Model -> save(false);
				$model->attach_id = $Attach_Model->attach_id;
			
			$model->ctime = time();
			$model->etime = time();	
			if($model->save(false))
				$this->redirect(array('view','id'=>$model->report_video_id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
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

		
		if(isset($_POST['ReportVideo']))
		{
			
			$model->attributes=$_POST['ReportVideo'];
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
			$file=CUploadedFile::getInstance($model,'attach_id');								 	//获取表单名为filename的上传信息
			if($file){
				global $FV;
				$filename=$file->getName();          											//获取文件名
				$filesize=$file->getSize();                								 		//获取文件大小
				$filetype=$file->getType();                										//获取文件类型
				$fileextName = $file->extensionName;											//获取文件后缀名称
				$FV->TFS = $filesize;
				$FV->TFEN = $fileextName;
				
				//验证文件大小与后缀名
				if($FV->VerifyViedoSize() && $FV->VerifyViedoExtName()){
					if($fileextName!=''){
						//$filename1=iconv("utf-8", "gb2312", $filename);							//这里是处理中文的问题，非中文不需要
						$filepath = '/assets/upload/photo/'.date('Y').'/'.date('m').'/'.date('d');	//文件保存路径
						if(!$FV->FolderPath(".".$filepath)){
							echo '上传路径./assets/upload/下的权限不够不能创建信息';
							exit;
						}
						$uploadfile="{$filepath}/".time()."_".rand(1,999).".".$fileextName;			//更换存储文件名
						$file->saveAs(".".$uploadfile,true);
					}
				}else{
					echo "上传文件的格式只能是 ".implode(",",$FV->ViedoExtName)." 且大小不能超出{$FV->ImgMaxSize}M";
					exit;
				}
				if(!$file->error){
					$model->attach_id=$uploadfile;                 									//数据库中要存放文件名
				}else{
					echo '上传的图片有误';
					exit;
				}
			
				$Attach_Model = $this->loadModelAttach($_POST['oldattach_id']);
				@unlink(".".$Attach_Model -> attach_url);
				$Attach_Model -> attach_url = $model->attach_id;
				$Attach_Model -> save(false);
				$model->attach_id =  $Attach_Model->attach_id;
			}else{
				$model->attach_id = $_POST['oldattach_id'];
			}
			if($model->save())
				$this->redirect(array('view','id'=>$model->report_video_id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
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
		$dataProvider=new CActiveDataProvider('ReportVideo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReportVideo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReportVideo']))
			$model->attributes=$_GET['ReportVideo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ReportVideo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ReportVideo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ReportVideo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='report-video-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function loadModelAttach($id)
	{
		$model=Attach::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
}
