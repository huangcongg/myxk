<?php
/* @var $this ExpertController */
/* @var $model Expert */

$this->breadcrumbs=array(
	'名师管理'=>array('admin'),
	$model->expert_id=>array('view','id'=>$model->expert_id),
	'修改名师',
);

$this->menu=array(
	//array('label'=>'名师管理', 'url'=>array('index')),
	array('label'=>'添加名师', 'url'=>array('create')),
	array('label'=>'查看此名师', 'url'=>array('view', 'id'=>$model->expert_id)),
	array('label'=>'名师管理', 'url'=>array('admin')),
);
?>

<h1>修改名师信息 <?php echo $model->expert_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>