<?php
/* @var $this ChampionsController */
/* @var $model Champions */

$this->breadcrumbs=array(
	'Champions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Champions', 'url'=>array('index')),
	array('label'=>'Manage Champions', 'url'=>array('admin')),
);
?>

<h1>Create Champions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>