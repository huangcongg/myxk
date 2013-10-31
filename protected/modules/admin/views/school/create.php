<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'学校管理'=>array('admin'),
	'添加学校',
);

$this->menu=array(
	array('label'=>'学校管理', 'url'=>array('admin')),
);
?>

<h1>添加学校</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>