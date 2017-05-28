<?php
/* @var $this EditorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Editors',
);

$this->menu=array(
	array('label'=>'Create Editor', 'url'=>array('create')),
	array('label'=>'Manage Editor', 'url'=>array('admin')),
);
?>

<h1>Editors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
