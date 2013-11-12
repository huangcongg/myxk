<?php
	require dirname(__FILE__)."/../layouts/heander.php";
?>




<div id="wrapper">
<div class="page">
    
    <?php
    
	$this->breadcrumbs=array(
		'名师列表'=>array('index'),
		$model->realname,
	);
		$this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'separator'=>' &gt; ',
			'htmlOptions'=>array('class'=>'mainbav'),
			'actionPrefix'=>'当前位置：',
		));
	?>
    <div class="clear"></div>
	<div class="Teacher">
    	<div class="left">
    	<div class="users box1">
        <?php echo CHtml::image($model->path,CHtml::encode($model->realname)); ?>
        <p><?php echo CHtml::encode($model->getAttributeLabel('realname')),'：',CHtml::encode($model->realname),'&nbsp;&nbsp;',CHtml::encode($model->getAttributeLabel('subject')),'：',CHtml::encode($model->expertsubjuect->name); ?></p>
        </div>
        <div class="video box2">
        <h3>讲座报告</h3>
        <ul class="v_list">
        <?php
		
			$this->widget('zii.widgets.CListView', array(
				'dataProvider'=>$dataProvider,
				'itemView'=>'_viewReport',
				'summaryText'=>'',
				'summaryCssClass'=>'',
			));
		?>
        	
        </ul>
        <div class="clear"></div>
        </div>
        </div>
        <!--Left End-->
        <div class="right">
        <section class="userinfo">
			<div class="tits"><span><?php echo CHtml::encode($model->getAttributeLabel('desc'));?></span></div>
            <hgroup>
            	<?php echo CHtml::decode($model->desc); ?>
            </hgroup>        
        </section>
        <section class="userinfo">
			<div class="tits"><span><?php echo CHtml::encode($model->getAttributeLabel('achieve'));?></span></div>
            <hgroup>
            	<?php echo CHtml::decode($model->achieve); ?>
            </hgroup>        
        </section>
        <section class="userinfo">
			<div class="tits"><span><?php echo CHtml::encode($model->getAttributeLabel('quote_text'));?></span></div>
            <hgroup>
            	<?php echo CHtml::decode($model->quote_text); ?>
            </hgroup>        
        </section>
        </div>
    </div>
</div>
</div>

<?php
	require dirname(__FILE__)."/../layouts/footer.php";
?>
