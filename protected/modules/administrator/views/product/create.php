<?php
/* @var $this ProductController */
/* @var $model Product */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Proje'=>array('admin'),
        'Yeni Proje',
    ),
));
?>

<div class="page-header">
    <h1>Yeni <small>Proje</small></h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>