<?php
/* @var $this EditorController */
/* @var $model Editor */

$this->breadcrumbs=array(
	'Editors'=>array('index'),
	$model->editor_id,
);

$this->menu=array(
	array('label'=>'List Editor', 'url'=>array('index')),
	array('label'=>'Create Editor', 'url'=>array('create')),
	array('label'=>'Update Editor', 'url'=>array('update', 'id'=>$model->editor_id)),
	array('label'=>'Delete Editor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->editor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Editor', 'url'=>array('admin')),
);
?>

<h1>View Editor #<?php echo $model->editor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'editor_id',
		'name_surname',
		'username',
		'password',
		'email',
		'status',
	),
)); ?>
