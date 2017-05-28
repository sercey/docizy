<?php
/* @var $this CategoryController */
/* @var $model Category */


$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Kategori'=>array('admin'),
        'Kategoriler',
    ),
));

if(isset($_GET['create'])){
    if($_GET['create'] == 'success'){
        echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Yeni Kategori Başarıyla Eklendi.');
    }
    else{
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Hata: Kategori Eklenemedi !');
    }
}

if(isset($_GET['update'])){
    if($_GET['update'] == 'success'){
        echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Kategori Başarıyla Güncellendi.');
    }
    else{
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Hata: Kategori Güncellenemedi !');
    }
}
?>

<div class="row-fluid">
    <div class="block">
        <div class="page-header">
            <h1>Kategori <small>Yönetimi</small></h1>
        </div>
        <div class="block-content">
            <div class="span12">
                <?php $this->widget('bootstrap.widgets.TbGridView', array(
                    'id'=>'category-grid',
                    'type' => TbHtml::GRID_TYPE_STRIPED,
                    'template'=>'{items}{pager}',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'columns'=>array(
                        array(
                            'name'=>'category_id',
                            'header'=>'ID',
                            'htmlOptions'=>array('style'=>'width:50px;'),
                        ),
                        'name',
                        array(
                            'name'=>'product_id',
                            'header'=>'Proje',
                            'value'=>'isset($data->product_id)?$data->relProduct->name:""',
                            'filter'=>CHtml::listData(Product::model()->findAll(), 'product_id', 'name'),
                        ),
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