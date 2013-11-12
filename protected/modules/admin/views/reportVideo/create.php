<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */

$this->breadcrumbs=array(
	'讲座视频管理'=>array('admin'),
	'创建',
);

$this->menu=array(
	array('label'=>'讲座视频管理', 'url'=>array('admin')),
);
?>

<h1>创建讲座视频</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>