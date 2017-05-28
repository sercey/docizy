<?php
/* @var $this ProductController */
/* @var $model Product */


$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Proje'=>array('admin'),
        'Proje Düzenle',
    ),
));

?>

    <div class="page-header">
        <h1>Düzenle <small>Proje <?php echo $model->product_id; ?></small></h1>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>