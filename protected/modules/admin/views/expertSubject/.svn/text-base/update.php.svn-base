<?php
/* @var $this ExpertSubjectController */
/* @var $model ExpertSubject */

$this->breadcrumbs=array(
	'学科管理'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'更新学科',
);

$this->menu=array(
	array('label'=>'添加学科', 'url'=>array('create')),
	array('label'=>'查看该学科', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'学科管理', 'url'=>array('admin')),
);
?>

<h1>更新学科 <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>