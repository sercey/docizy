<?php
/* @var $this EditorController */
/* @var $model Editor */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Editor'=>array('admin'),
        'Editörler',
    ),
));

if(isset($_GET['create'])){
    if($_GET['create'] == 'success'){
        echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Yeni Editör Başarıyla Eklendi.');
    }
    else{
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Hata: Editör Eklenemedi !');
    }
}

if(isset($_GET['update'])){
    if($_GET['update'] == 'success'){
        echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, 'Editör Başarıyla Güncellendi.');
    }
    else{
        echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, 'Hata: Editör Güncellenemedi !');
    }
}
?>

<div class="row-fluid">
    <div class="block">
        <div class="page-header">
            <h1>Editör <small>Yönetimi</small></h1>
        </div>
        <div class="block-content">
            <div class="span12">
                <?php $this->widget('bootstrap.widgets.TbGridView', array(
                    'id'=>'editor-grid',
                    'type' => TbHtml::GRID_TYPE_STRIPED,
                    'dataProvider'=>$model->search(),
                    'filter'=>$model,
                    'columns'=>array(
                        'editor_id',
                        'name_surname',
                        'username',
                        'password',
                        'email',
                        'status',
                        array(
                            'class'=>'TbButtonColumn',
                        ),
                    ),
                )); ?>
            </div>
        </div>
    </div>
</div>

