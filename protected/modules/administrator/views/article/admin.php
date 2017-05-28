<?php
/* @var $this ArticleController */
/* @var $model Article */


$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Döküman'=>array('admin'),
        'Dökümanlar',
    ),
));

if(isset($_GET['create'])){
    if($_GET['create'] == 'success'){
        echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Yeni Döküman Başarıyla Eklendi.');
    }
    else{
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Hata: Döküman Eklenemedi !');
    }
}

if(isset($_GET['update'])){
    if($_GET['update'] == 'success'){
        echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Döküman Başarıyla Güncellendi.');
    }
    else{
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Hata: Döküman Güncellenemedi !');
    }
}
?>

<div class="row-fluid">
    <div class="block">
        <div class="page-header">
            <h1>Döküman <small>Yönetimi</small></h1>
        </div>
        <div class="block-content">
            <div class="span12">
                <?php $this->widget('bootstrap.widgets.TbGridView', array(
                    'id'=>'article-grid',
                    'type' => TbHtml::GRID_TYPE_STRIPED,
                    'template'=>'{items}{pager}',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'columns'=>array(
                        array(
                            'name'=>'article_id',
                            'header'=>'ID',
                            'htmlOptions'=>array('style'=>'width:50px;'),
                        ),
                        'title',
                        array(
                            'name'=>'category_id',
                            'header'=>'Kategori',
                            'value'=>'isset($data->category_id)?$data->relCategory->relProduct->name." > ".$data->relCategory->name:""',
                            'filter'=>CHtml::listData(Category::model()->with('relProduct')->findAll(), 'category_id', 'name', 'relProduct.name'),

                        ),
                        'date_created',
                        array(
                            'name'=>'order',
                            'htmlOptions'=>array('style'=>'width:50px; text-align:center;'),
                        ),
                        array(
                            'name'=>'status',
                            'value'=>'$data->status==1?("Aktif"):("Pasif")',
                            'htmlOptions'=>array('style'=>'width:100px;'),
                            'filter'=>array(0=>"Pasif", 1=>"Aktif"),
                        ),
                        array(
                            'class'=>'TbButtonColumn',
                        ),
                    ),
                )); ?>
            </div>
        </div>
    </div>
</div>