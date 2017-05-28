<?php
/* @var $this ArticleController */
/* @var $model Article */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Döküman'=>array('admin'),
        'Yeni Döküman',
    ),
));
?>

<div class="page-header">
    <h1>Yeni <small>Döküman</small></h1>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>