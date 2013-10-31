<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh" lang="zh">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="zh" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="top">
    <div class="top_wrapper">
        <div class="logo"></div>
        <div class="nav">
        <?php if(!Yii::app()->user->isGuest): ?>
            当前用户：<?php echo Yii::app()->user->name;?> <?php echo CHtml::link('退出系统',array('/admin/default/logout')); ?>
        <?php endif; ?>
        </div>
    </div>
</div>

<div class="content">

    <div class="right">
        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('首页',array('default/index')),
		)); ?><!-- breadcrumbs -->
        <?php endif?>
        <?php echo $content; ?>
    </div>

    <div class="left">
        <?php $this->widget('zii.widgets.CMenu',array(
            'activateParents'=>true,
            'activeCssClass'=>'folder_open',
            'linkLabelWrapper'=>array('class'=>'end'),
            'items'=>array(
                array('label'=>'首页', 'url'=>array('/admin/default/index'),'itemOptions'=>array('class'=>'folder')),
                array('label'=>'学校管理', 'url'=>array('/admin/school/admin'),'itemOptions'=>array('class'=>'folder')),
                array('label'=>'年级管理', 'url'=>array('/admin/grade/admin'),'itemOptions'=>array('class'=>'folder')),
                array('label'=>'班级管理', 'url'=>array('/admin/clase/admin'),'itemOptions'=>array('class'=>'folder')),
                array('label'=>'用户管理', 'url'=>array('/admin/user/admin'),'itemOptions'=>array('class'=>'folder')),
                array('label'=>'管理员管理',
                    'url'=>'javascript:;',
                    'itemOptions'=>array('class'=>'folder'),
                    'items'=>array(
                    array('label'=>'管理员列表','url'=>array('/admin/admin/admin')),
//                    array('label'=>'角色管理','url'=>array('/admin/admin/role')),
                )),
//                array('label'=>'课程管理', 'url'=>array('/admin/course/index'),'itemOptions'=>array('class'=>'folder')),
                //array('label'=>'返回前台', 'url'=>array('/site/index')),
//                array('label'=>'登录', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//                array('label'=>'退出 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>

    </div>

    <div class="clear:both;"></div>
</div>


</body>
</html>
