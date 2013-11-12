<?php
/* @var $this ExpertController */
/* @var $data Expert */
?>

    
    <section  class="userlist">
    <div class="userinfo">
    <p><?php echo CHtml::encode($data->getAttributeLabel('realname')); ?>: <strong><?php echo CHtml::link(CHtml::encode($data->realname), array('view', 'id'=>$data->expert_id)); ?></strong></p>
    <p><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>：<?php echo CHtml::encode($data->expertsubjuect->name); ?></p>
    <p class="p"><?php echo CHtml::encode($data->getAttributeLabel('achieve')); ?>：<?php echo CHtml::cutHtml($data->achieve,140); ?></p>
    <p><?php echo CHtml::link(CHtml::encode('详细信息'), array('view', 'id'=>$data->expert_id),array('class'=>'buttons')); ?></p>
    </div>
    <div class="userpic">
    <?php echo CHtml::image($data->path,CHtml::encode($data->realname)); ?>
    </div>
    <div class="usersummary">
    	<?php echo CHtml::cutHtml($data->desc,350); ?>
    </div>
    </section>
    
    



