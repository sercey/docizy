<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>
    <?php echo $form->textFieldControlGroup($model, 'name', array('size'=>TbHtml::INPUT_SIZE_XXLARGE)); ?>

    <?php echo $form->textAreaControlGroup($model, 'description', array('size'=>TbHtml::INPUT_SIZE_XXLARGE, 'rows'=>'5')); ?>

    <?php echo $form->textFieldControlGroup($model, 'order'); ?>

    <?php echo !$model->isnewRecord ? $form->textFieldControlGroup($model, 'slug'):''; ?>

    <?php echo $form->dropDownListControlGroup($model, 'status', array(1=>'Aktif', '0'=>'Pasif'), array('empty' => 'Seçim Yapın...')); ?>

    <?php echo TbHtml::formActions(array(
        TbHtml::submitButton('Kaydet', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::resetButton('Reset'),
    )); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->