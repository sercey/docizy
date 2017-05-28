<?php
/* @var $this CategoryController */
/* @var $model Category */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>false,
)); ?>

    <?php echo $form->textFieldControlGroup($model, 'name', array('size'=>TbHtml::INPUT_SIZE_XXLARGE)); ?>

    <div class="control-group">
        <label class="control-label">Açıklama</label>
        <div class="controls">
            <?php $this->widget('ext.redactor.ImperaviRedactorWidget', array(
                'model' => $model,
                'attribute' => 'description',

                'options' => array(
                    'lang' => 'tr',
                    'toolbar' => true,
                    'iframe' => false,
                    'buttons'=>['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'outdent', 'indent', 'image', 'file', 'link', 'alignment', 'horizontalrule'],
                    'buttonSource'=>true,
                    'imageUpload'=>Yii::app()->createUrl('/administrator/default/uploadRedactorImage'),
                ),
            )); ?>
        </div>
    </div>


    <?php echo !$model->isnewRecord ? $form->textFieldControlGroup($model, 'slug'):''; ?>

    <?php echo $form->dropDownListControlGroup($model, 'product_id', CHtml::listData(Product::model()->findAll(), 'product_id', 'name'), array('empty' => 'Proje Seç...')); ?>

    <?php echo $form->textFieldControlGroup($model, 'order'); ?>

    <?php echo $form->dropDownListControlGroup($model, 'status', array(1=>'Aktif', '0'=>'Pasif'), array('empty' => 'Seçim Yapın...')); ?>

    <?php echo TbHtml::formActions(array(
        TbHtml::submitButton('Kaydet', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::resetButton('Reset'),
    )); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->