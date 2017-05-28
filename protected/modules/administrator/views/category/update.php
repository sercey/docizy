<?php
/* @var $this CategoryController */
/* @var $model Category */


$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Kategori'=>array('admin'),
        'Kategori Düzenle',
    ),
));

?>
    <div class="page-header">
        <h1>Düzenle <small>Kategori <?php echo $model->category_id; ?></small></h1>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>