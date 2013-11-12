<?php
	require dirname(__FILE__)."/../layouts/heander.php";
?>


<div id="wrapper">
	<div class="page">
    <?php
    
	$this->breadcrumbs=array(
		'名师列表',
	);
		$this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'separator'=>' &gt; ',
			'htmlOptions'=>array('class'=>'mainbav'),
			'actionPrefix'=>'当前位置：',
		));
	?>
    <div class="clear"></div>
    <div class="Teacher push">
<?php 

	
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pagerCssClass'=>'pages',
	'summaryText'=>'',
	));
?>
    </div>
    </div>
</div>

<?php
	require dirname(__FILE__)."/../layouts/footer.php";
?>
