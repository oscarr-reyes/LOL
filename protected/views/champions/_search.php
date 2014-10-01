<?php
/* @var $this ChampionsController */
/* @var $model Champions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lore'); ?>
		<?php echo $form->textArea($model,'Lore',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AttackDamage'); ?>
		<?php echo $form->textField($model,'AttackDamage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AbilityPower'); ?>
		<?php echo $form->textField($model,'AbilityPower'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AttackSpeed'); ?>
		<?php echo $form->textField($model,'AttackSpeed',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MovementSpeed'); ?>
		<?php echo $form->textField($model,'MovementSpeed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Armor'); ?>
		<?php echo $form->textField($model,'Armor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MagicResistance'); ?>
		<?php echo $form->textField($model,'MagicResistance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AditionalAttack'); ?>
		<?php echo $form->textField($model,'AditionalAttack'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AditionalAbility'); ?>
		<?php echo $form->textField($model,'AditionalAbility'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AditionalArmor'); ?>
		<?php echo $form->textField($model,'AditionalArmor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AditionalResist'); ?>
		<?php echo $form->textField($model,'AditionalResist'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->