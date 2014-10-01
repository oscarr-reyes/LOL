<?php
/* @var $this ChampionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Champions',
);

$this->menu=array(
	array('label'=>'Create Champions', 'url'=>array('create')),
	array('label'=>'Manage Champions', 'url'=>array('admin')),
);
?>

<h1>Champions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
