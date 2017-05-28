<?php
/* @var $this ArticleController */
/* @var $model Article */


$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Döküman'=>array('admin'),
        'Döküman Düzenle',
    ),
));

?>

    <div class="page-header">
        <h1>Düzenle <small>Döküman <?php echo $model->article_id; ?></small></h1>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>