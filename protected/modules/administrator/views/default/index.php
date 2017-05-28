<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<div class="hero-unit">
    <h1>DocIzy'ye Hoşgeldin</h1>
    <p>DocIzy kolayca dökümantasyon oluşturmana yardımcı olur. Hemen başlamak için aşağıdaki butona tıklaman yeterli!</p>
    <p><a href="<?php echo Yii::app()->createUrl('/administrator/article/create'); ?>" class="btn btn-primary btn-medium">Döküman Ekle &raquo;</a></p>
</div>