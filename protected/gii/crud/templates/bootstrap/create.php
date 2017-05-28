<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
?>
$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        '<?php echo $label ?>'=>array('admin'),
        'Yeni <?php echo $label ?>',
    ),
));
?>

<div class="page-header">
    <h1>Yeni <small><?php echo $label ?></small></h1>
</div>

<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>