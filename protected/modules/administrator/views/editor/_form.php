<?php
/* @var $this EditorController */
/* @var $model Editor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'editor-form',
	'enableAjaxValidation'=>true,
)); ?>

    <?php echo $form->textFieldControlGroup($model, 'name_surname'); ?>

    <?php echo $form->textFieldControlGroup($model, 'username'); ?>

    <?php echo $form->textFieldControlGroup($model, 'password'); ?>

    <?php echo $form->textFieldControlGroup($model, 'email'); ?>

    <?php echo $form->dropDownListControlGroup($model, 'status', array(1=>'Aktif', '0'=>'Pasif'), array('empty' => 'Seçim Yapın...')); ?>

    <?php echo TbHtml::formActions(array(
        TbHtml::submitButton('Kaydet', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::resetButton('Reset'),
    )); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->