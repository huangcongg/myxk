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
        <?php if(!Yii::app()->admin->isGuest): ?>
            当前用户：<?php echo Yii::app()->admin->name;?> <?php echo CHtml::link('退出系统',array('/admin/default/logout')); ?>
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
            'activeCssClass'=>'active',
            'items'=>array(
                array('label'=>'首页', 'url'=>array('/admin/default/index'),'linkOptions'=>array('class'=>'folder')),
                array('label'=>'学校管理', 'url'=>array('/admin/school/admin'),'linkOptions'=>array('class'=>'folder')),
                array('label'=>'年级管理', 'url'=>array('/admin/grade/admin'),'linkOptions'=>array('class'=>'folder')),
                array('label'=>'班级管理', 'url'=>array('/admin/clase/admin'),'linkOptions'=>array('class'=>'folder')),
                array('label'=>'用户管理',
                    'linkOptions'=>array('class'=>'folder'),
                    'items'=>array(
                        array('label'=>'学生管理','url'=>array('/admin/user'),'itemOptions'=>array('class'=>'nav')),
                        array('label'=>'教师管理','url'=>array('/admin/teacher'),'itemOptions'=>array('class'=>'nav')),
                    ),
                ),
                array('label'=>'管理员管理',
                    'linkOptions'=>array('class'=>'folder'),
                    'items'=>array(
                        array('label'=>'系统管理员','url'=>array('/admin/admin/admin'),'linkOptions'=>array('class'=>'end'),'itemOptions'=>array('class'=>'nav')),
                        array('label'=>'校级管理员','url'=>array('/admin/schoolAdmin'),'linkOptions'=>array('class'=>'end'),'itemOptions'=>array('class'=>'nav')),
                        array('label'=>'权限等级管理','url'=>array('/admin/auth'),'linkOptions'=>array('class'=>'end'),'itemOptions'=>array('class'=>'nav')),
                )),
//                array('label'=>'课程管理', 'url'=>array('/admin/course/index'),'itemOptions'=>array('class'=>'folder')),
                //array('label'=>'返回前台', 'url'=>array('/site/index')),
                array('label'=>'登录', 'url'=>array('/admin/default/login'), 'visible'=>Yii::app()->admin->isGuest),
                array('label'=>'退出 ('.Yii::app()->admin->name.')', 'url'=>array('/admin/default/logout'), 'visible'=>!Yii::app()->admin->isGuest)
            ),
        )); ?>

    </div>

    <div class="clear:both;"></div>
</div>


</body>
</html>
