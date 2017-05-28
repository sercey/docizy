<?php
/* @var $this ProductController */
/* @var $model Product */


$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Proje'=>array('admin'),
        'Projeler',
    ),
));

if(isset($_GET['create'])){
    if($_GET['create'] == 'success'){
        echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Yeni Proje Başarıyla Eklendi.');
    }
    else{
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Hata: Proje Eklenemedi !');
    }
}

if(isset($_GET['update'])){
    if($_GET['update'] == 'success'){
        echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Proje Başarıyla Güncellendi.');
    }
    else{
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Hata: Proje Güncellenemedi !');
    }
}

?>

<div class="row-fluid">
    <div class="block">
        <div class="page-header">
            <h1>Proje <small>Yönetimi</small></h1>
        </div>
        <div class="block-content">
            <div class="span12">
                <?php $this->widget('bootstrap.widgets.TbGridView', array(
                    'id'=>'product-grid',
                    'type' => TbHtml::GRID_TYPE_STRIPED,
                    'template'=>'{items}{pager}',
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'columns'=>array(
                        array(
                            'name'=>'product_id',
                            'header'=>'ID',
                            'htmlOptions'=>array('style'=>'width:60px;'),
                        ),
                        'name',
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