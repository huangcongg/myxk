<?php
/* @var $this ExtendReadController */
/* @var $model ExtendRead */

$this->breadcrumbs=array(
    '拓展详细阅读管理'=>array('admin'),
    $model->title,
);

$this->menu=array(
    //array('label'=>'拓展阅读管理', 'url'=>array('index')),
    array('label'=>'添加拓展详细阅读', 'url'=>array('create')),
    array('label'=>'更新拓展详细阅读', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'删除拓展详细阅读', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定删除吗?')),
    array('label'=>'管理拓展详细阅读', 'url'=>array('admin')),
);
?>

<h1>查看拓展详细阅读 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'title',
        'content',
        array(
            'name'=>'ctime',
            'type'=>'datetime',

        ),
       array(
           'name'=>'etime',
           'type'=>'datetime',
       ),
        
    ),
)); ?>
