<?php
/* @var $this EditorController */
/* @var $data Editor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('editor_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->editor_id), array('view', 'id'=>$data->editor_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_surname')); ?>:</b>
	<?php echo CHtml::encode($data->name_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>