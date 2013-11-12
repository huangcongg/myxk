<?php
/* @var $this ReportController */
/* @var $model Report */

$this->breadcrumbs=array(
	'讲座管理'=>array('admin'),
	$model->title=>array('view','id'=>$model->report_id),
	'更新讲座',
);

$this->menu=array(
	//array('label'=>'讲座管理', 'url'=>array('index')),
	array('label'=>'添加讲座', 'url'=>array('create')),
	array('label'=>'查看此讲座', 'url'=>array('view', 'id'=>$model->report_id)),
	array('label'=>'讲座管理', 'url'=>array('admin')),
);
?>

<h1>更新此讲座 <?php echo $model->report_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>