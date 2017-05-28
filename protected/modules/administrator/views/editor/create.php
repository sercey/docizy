<?php
/* @var $this EditorController */
/* @var $model Editor */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Editor'=>array('admin'),
        'Yeni Editör',
    ),
));
?>

    <div class="page-header">
        <h1>Yeni <small>Editör</small></h1>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>