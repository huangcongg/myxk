<?php
/* @var $this ReportController */
/* @var $data Report */
?>

<li>
        	<div class="pic">
            <?php echo CHtml::image($data->path,CHtml::encode($data->title))?>
            </div>
            <div>
            <p><b><?php echo CHtml::encode($data->title); ?></b></p>
            <p>人气:<?php echo CHtml::encode($data->attention);?></p>
            </div>
</li>

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ord')); ?>:</b>
	<?php echo CHtml::encode($data->ord); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attention')); ?>:</b>
	<?php echo CHtml::encode($data->attention); ?>
	<br />

	*/ ?>