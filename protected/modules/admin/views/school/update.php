<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'学校管理'=>array('admin'),
	$model->school_name=>array('view','id'=>$model->school_id),
	'修改学校',
);

$this->menu=array(
	array('label'=>'增加学校', 'url'=>array('create')),
	array('label'=>'查看该学校', 'url'=>array('view', 'id'=>$model->school_id)),
	array('label'=>'学校管理', 'url'=>array('admin')),
);
?>

<h1>修改学校<?php echo $model->school_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>