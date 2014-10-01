<?php
/* @var $this ChampionsController */
/* @var $model Champions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'champions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Name', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'Health', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'Health', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'Health'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalHealth', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalHealth', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalHealth'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'HealthRegen', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'HealthRegen', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'HealthRegen'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalHealthRegen', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalHealthRegen', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalHealthRegen'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AttackDamage', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AttackDamage', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AttackDamage'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalAttack', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalAttack', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalAttack'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AbilityPower', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AbilityPower', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AbilityPower'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalAbility', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalAbility', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalAbility'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<?php echo Chtml::Button('Energy', array('class'=>'btn btn-primary', 'id'=>'energy')); ?>
		<?php echo Chtml::Button('Mana', array('class'=>'btn btn-primary', 'id'=>'mana')); ?>
		<?php echo Chtml::Button('Fury', array('class'=>'btn btn-primary', 'id'=>'fury')); ?>
	</div>

	<div class="form-group" style="display:none" id="energy-toggle">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'Energy', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'Energy', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'Energy'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'EnergyRegen', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'EnergyRegen', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'EnergyRegen'); ?>
			</div>
		</div>
	</div>

	<div class="form-group" style="display:none" id="mana-toggle1">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'Mana', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'Mana', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'Mana'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalMana', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalMana', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalMana'); ?>
			</div>
		</div>
	</div>

	<div class="form-group" style="display:none" id="mana-toggle2">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'ManaRegen', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'ManaRegen', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'ManaRegen'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalManaRegen', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalManaRegen', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalManaRegen'); ?>
			</div>
		</div>
	</div>

	<div class="form-group" style="display:none" id="fury-toggle">
		<?php echo $form->labelEx($model,'Fury', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'Fury', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'Fury'); ?>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AttackSpeed', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AttackSpeed',array('size'=>4,'maxlength'=>4, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'AttackSpeed'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalAttackSpeed', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalAttackSpeed',array('size'=>4,'maxlength'=>4, 'class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalAttackSpeed'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'MovementSpeed', array('class'=>'control-label')); ?>
		<?php echo $form->textField($model,'MovementSpeed', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'MovementSpeed'); ?>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'Armor', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'Armor', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'Armor'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalArmor', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalArmor', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalArmor'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'MagicResistance', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'MagicResistance', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'MagicResistance'); ?>
			</div>
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'AditionalResist', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'AditionalResist', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AditionalResist'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'Role', array('class'=>'control-label')); ?>
				<?php echo $form->dropDownList($model,'Role', array(1=>'Assasin', 2=>'Fighter', 3=>'Mage', 4=>'Marksman', 5=>'Support', 6=>'Tank'), array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'Role'); ?>
			</div>
			<div class="col-md-3">
				<?php echo $form->labelEx($model,'Range', array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'Range', array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'Range'); ?>
			</div>
			<div class="col-md-3">
				<?php echo $form->labelEx($model,'AttackType', array('class'=>'control-label')); ?>
				<?php echo $form->dropDownList($model,'AttackType', array(1=>'Melee', 2=>'Ranged'), array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'AttackType'); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
	$(document).ready(function()
	{
		$('#energy').click(function()
		{
			$('#energy-toggle').toggle(500);
		});

		$('#mana').click(function()
		{
			$('#mana-toggle1').toggle(500);
			$('#mana-toggle2').toggle(500);
		});

		$('#fury').click(function()
		{
			$('#fury-toggle').toggle(500);
		});
	});
</script>