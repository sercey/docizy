<?php
/* @var $this CategoryController */
/* @var $model Category */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Kategori'=>array('admin'),
        'Yeni Kategori',
    ),
));
?>

<div class="page-header">
    <h1>Yeni <small>Kategori</small></h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>