<?php
/* @var $this ProductController */
/* @var $model Product */

$this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'homeUrl'=>array('/administrator/'),
    'links' => array(
        'Proje'=>array('admin'),
        $model->name,
    ),
));
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'product_id',
		'name',
		'description',
		'order',
		'status',
	),
)); ?>

