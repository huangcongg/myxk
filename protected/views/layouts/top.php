<?php /* @var $this Controller */ ?>
<!doctype html>
<html>
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="<?php echo Yii::app()->request->baseUrl; ?>/skin/default/js/html5shiv.js"></script><![endif]-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/skin/default/js/jquery-1.9.1.min.js"></script>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/skin/default/style/style.css" rel="stylesheet" type="text/css">

	<?php echo $content; ?>
