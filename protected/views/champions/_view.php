<?php
/* @var $this ChampionsController */
/* @var $data Champions */

//Decode Attack Type
$attackType = null;

switch($data->AttackType)
{
	case '1':
		$attackType = 'Melee';
	break;

	case '2':
		$attackType = 'Ranged';
	break;
}


//Decode Role
$role = null;

switch($data->Role)
{
	case '1':
		$role = 'Assasin';
	break;

	case '2':
		$role = 'Fighter';
	break;

	case '3':
		$role = 'Mage';
	break;

	case '4':
		$role = 'Marksman';
	break;

	case '5':
		$role = 'Support';
	break;

	case '6':
		$role = 'Tank';
	break;
}
?>

<div class="view">
	<div class="row">
		<div class="col-md-2">
			<?php echo CHtml::image(Yii::app()->baseUrl.'/images/'.$this->lookImage($data->Name).'.png', $data->Name); ?>
			<h3><?php echo CHtml::link(CHtml::encode($data->Name), array('view', 'id'=>$data->id)); ?></h3>
		</div>

		<div class="col-md-3">
			<b><?php echo CHtml::encode($data->getAttributeLabel('Health')); ?>:</b>
			<?php echo CHtml::encode($data->Health); ?> (+<?php echo CHtml::encode($data->AditionalHealth); ?>)
			<br>

			<b><?php echo CHtml::encode($data->getAttributeLabel('HealthRegen')) ?>:</b>
			<?php echo CHtml::encode($data->HealthRegen); ?> (+<?php echo CHtml::encode($data->AditionalHealthRegen); ?>)
			<br>

			<?php if($data->Energy != 0): ?>
				<b><?php echo CHtml::encode($data->getAttributeLabel('Energy')); ?>:</b>
				<?php echo CHtml::encode($data->Energy); ?> (+<?php echo CHtml::encode($data->EnergyRegen); ?>)
			<?php endif; ?>

			<?php if($data->Mana != 0): ?>
				<b><?php echo CHtml::encode($data->getAttributeLabel('Mana')); ?>:</b>
				<?php echo CHtml::encode($data->Mana); ?> (+<?php echo CHtml::encode($data->AditionalMana); ?>)
				<br>

				<b><?php echo CHtml::encode($data->getAttributeLabel('ManaRegen')); ?>:</b>
				<?php echo CHtml::encode($data->ManaRegen); ?> (+<?php echo CHtml::encode($data->AditionalManaRegen); ?>)
				<br>
			<?php endif; ?>

			<?php if($data->Fury != 0): ?>
				<b><?php echo CHtml::encode($data->getAttributeLabel('Energy')); ?>:</b>
				<?php echo CHtml::encode($data->Energy); ?> (+<?php echo CHtml::encode($data->EnergyRegen); ?>)
			<?php endif; ?>
		</div>

		<div class="col-md-3">
			<b><?php echo CHtml::encode($data->getAttributeLabel('AttackDamage')); ?>:</b>
			<?php echo CHtml::encode($data->AttackDamage); ?> (+<?php echo CHtml::encode($data->AditionalAttack); ?>)
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('AbilityPower')); ?>:</b>
			<?php echo CHtml::encode($data->AbilityPower); ?> (+<?php echo CHtml::encode($data->AditionalAbility); ?>)
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('AttackSpeed')); ?>:</b>
			<?php echo CHtml::encode($data->AttackSpeed); ?> (+<?php echo CHtml::encode($data->AditionalAttackSpeed); ?>)
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('MovementSpeed')); ?>:</b>
			<?php echo CHtml::encode($data->MovementSpeed); ?>
			<br />
		</div>

		<div class="col-md-4">
			<b><?php echo CHtml::encode($data->getAttributeLabel('Armor')); ?>:</b>
			<?php echo CHtml::encode($data->Armor); ?> (+<?php echo CHtml::encode($data->AditionalArmor); ?>)
			<br>

			<b><?php echo CHtml::encode($data->getAttributeLabel('MagicResistance')); ?>:</b>
			<?php echo CHtml::encode($data->MagicResistance); ?> (+<?php echo CHtml::encode($data->AditionalResist); ?>)
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('Role')); ?>:</b>
			<?php echo CHtml::encode($role); ?>
			<br />
			
			<b><?php echo CHtml::encode($data->getAttributeLabel('AttackType')); ?>:</b>
			<?php echo CHtml::encode($attackType); ?>
			<br />

		</div>
	</div>
</div>