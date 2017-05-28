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
        '<?php echo $label ?>',
    ),
));

?>

<div class="row-fluid">
    <div class="block">
        <div class="page-header">
            <h1><?php echo $label ?> <small>Yönetimi</small></h1>
        </div>
        <div class="block-content">
            <div class="span12">
                <?php echo "<?php"; ?> $this->widget('bootstrap.widgets.TbGridView', array(
                    'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
                    'type' => TbHtml::GRID_TYPE_STRIPED,
                    'template'=>'{items}{pager}',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'columns'=>array(
                <?php
                $count=0;
                foreach($this->tableSchema->columns as $column)
                {
                    if(++$count==7)
                        echo "\t\t/*\n";
                    echo "\t\t'".$column->name."',\n";
                }
                if($count>=7)
                    echo "\t\t*/\n";
                ?>
                        array(
                            'class'=>'TbButtonColumn',
                        ),
                    ),
                )); ?>
            </div>
        </div>
    </div>
</div>