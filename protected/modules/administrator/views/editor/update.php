<?php
/* @var $this EditorController */
/* @var $model Editor */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Editor'=>array('admin'),
        'Editör Düzenle',
    ),
));
?>
    <div class="page-header">
        <h1>Düzenle <small>Editör <?php echo $model->editor_id; ?></small></h1>
    </div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>