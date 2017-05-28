<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

    <?php echo $form->textFieldControlGroup($model, 'title', array('size'=>TbHtml::INPUT_SIZE_XXLARGE)); ?>

    <div class="control-group">
        <label class="control-label">İçerik</label>
        <div class="controls">
            <?php $this->widget('ext.redactor.ImperaviRedactorWidget', array(
                'model' => $model,
                'attribute' => 'content',

                'options' => array(
                    'lang' => 'tr',
                    'toolbar' => true,
                    'iframe' => false,
                    'formatting'=> ['p', 'blockquote', 'h2'],
                    'buttons'=>['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'outdent', 'indent', 'image', 'file', 'link', 'alignment', 'horizontalrule'],
                    'buttonSource'=>true,
                    'imageUpload'=>Yii::app()->createUrl('/administrator/default/uploadRedactorImage'),
                    'formattingAdd'=>[array('tag'=>'pre', 'title'=>'Kod Alanı', 'class'=>'prettyprint')],
                ),
            )); ?>
        </div>
    </div>

    <?php echo $form->dropDownListControlGroup($model, 'category_id', CHtml::listData(Category::model()->with('relProduct')->findAll(), 'category_id', 'name', 'relProduct.name'), array('empty' => 'Kategori Seç...')); ?>

    <?php echo !$model->isnewRecord ? $form->textFieldControlGroup($model, 'slug'):''; ?>

    <?php echo $form->textFieldControlGroup($model, 'order'); ?>

    <?php echo $form->dropDownListControlGroup($model, 'status', array(1=>'Aktif', '0'=>'Pasif'), array('empty' => 'Seçim Yapın...')); ?>

    <?php echo TbHtml::formActions(array(
        TbHtml::submitButton('Kaydet', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::resetButton('Reset'),
    )); ?>

<?php $this->endWidget(); ?>

</div><!-- form -->