<?php
/* @var $this ChampionsController */
/* @var $model Champions */

$this->breadcrumbs=array(
	'Champions'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Champions', 'url'=>array('index')),
	array('label'=>'Create Champions', 'url'=>array('create')),
	array('label'=>'Update Champions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Champions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Champions', 'url'=>array('admin')),
);
?>

<h1>Champion <?php echo $model->Name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'AttackDamage',
		'AbilityPower',
		'AttackSpeed',
		'MovementSpeed',
		'Armor',
		'MagicResistance',
		'AditionalAttack',
		'AditionalAbility',
		'AditionalArmor',
		'AditionalResist',
	),
)); ?>
