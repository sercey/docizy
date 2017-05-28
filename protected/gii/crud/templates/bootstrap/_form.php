<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
/* @var $form CActiveForm */
?>

<div class="form">

<?php echo "<?php \$form=\$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'".$this->class2id($this->modelClass)."-form',
	'enableAjaxValidation'=>false,
)); ?>\n"; ?>


<?php
foreach($this->tableSchema->columns as $column)
{
	if($column->autoIncrement)
		continue;
?>
		<?php echo "<?php echo \$form->textFieldControlGroup(\$model, '{$column->name}'); ?>\n"; ?>

<?php
}
?>
		<?php echo
        "<?php echo TbHtml::formActions(array(
            TbHtml::submitButton('Kaydet', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
            TbHtml::resetButton('Reset'),
        )); ?>\n";
        ?>

<?php echo "<?php \$this->endWidget(); ?>\n"; ?>

</div><!-- form -->