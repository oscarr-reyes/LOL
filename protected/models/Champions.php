<?php

/**
 * This is the model class for table "champions".
 *
 * The followings are the available columns in table 'champions':
 * @property integer $id
 * @property string $Name
 * @property double $AttackDamage
 * @property double $AbilityPower
 * @property string $AttackSpeed
 * @property double $MovementSpeed
 * @property double $Armor
 * @property double $MagicResistance
 * @property double $AditionalAttack
 * @property double $AditionalAbility
 * @property double $AditionalArmor
 * @property double $AditionalResist
 * @property double $AditionalAttackSpeed
 * @property double $Health
 * @property double $AditionalHealth
 * @property double $HealthRegen
 * @property double $AditionalHealthRegen
 * @property integer $Role
 * @property integer $AttackType
 * @property double $Range
 * @property double $Energy
 * @property double $EnergyRegen
 * @property double $Mana
 * @property double $AditionalMana
 * @property double $ManaRegen
 * @property double $AditionalManaRegen
 * @property integer $Fury
 */
class Champions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'champions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Name, AttackDamage, AbilityPower, AttackSpeed, MovementSpeed, Armor, MagicResistance, AditionalAttack, AditionalAbility, AditionalArmor, AditionalResist, AditionalAttackSpeed, Health, AditionalHealth, HealthRegen, AditionalHealthRegen, Role, AttackType, Range', 'required'),
			array('Role, AttackType, Fury', 'numerical', 'integerOnly'=>true),
			array('AttackDamage, AbilityPower, MovementSpeed, Armor, MagicResistance, AditionalAttack, AditionalAbility, AditionalArmor, AditionalResist, AditionalAttackSpeed, Health, AditionalHealth, HealthRegen, AditionalHealthRegen, Range, Energy, EnergyRegen, Mana, AditionalMana, ManaRegen, AditionalManaRegen', 'numerical'),
			array('Name', 'length', 'max'=>50),
			array('AttackSpeed', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Name, AttackDamage, AbilityPower, AttackSpeed, MovementSpeed, Armor, MagicResistance, AditionalAttack, AditionalAbility, AditionalArmor, AditionalResist, AditionalAttackSpeed, Health, AditionalHealth, HealthRegen, AditionalHealthRegen, Role, AttackType, Range, Energy, EnergyRegen, Mana, AditionalMana, ManaRegen, AditionalManaRegen, Fury', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Name' => 'Name',
			'AttackDamage' => 'Attack Damage',
			'AbilityPower' => 'Ability Power',
			'AttackSpeed' => 'Attack Speed',
			'MovementSpeed' => 'Movement Speed',
			'Armor' => 'Armor',
			'MagicResistance' => 'Magic Resistance',
			'AditionalAttack' => 'Aditional Attack',
			'AditionalAbility' => 'Aditional Ability',
			'AditionalArmor' => 'Aditional Armor',
			'AditionalResist' => 'Aditional Resist',
			'AditionalAttackSpeed' => 'Aditional Attack Speed',
			'Health' => 'Health',
			'AditionalHealth' => 'Aditional Health',
			'HealthRegen' => 'Health Regen',
			'AditionalHealthRegen' => 'Aditional Health Regen',
			'Role' => 'Role',
			'AttackType' => 'Attack Type',
			'Range' => 'Range',
			'Energy' => 'Energy',
			'EnergyRegen' => 'Energy Regen',
			'Mana' => 'Mana',
			'AditionalMana' => 'Aditional Mana',
			'ManaRegen' => 'Mana Regen',
			'AditionalManaRegen' => 'Aditional Mana Regen',
			'Fury' => 'Fury',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('AttackDamage',$this->AttackDamage);
		$criteria->compare('AbilityPower',$this->AbilityPower);
		$criteria->compare('AttackSpeed',$this->AttackSpeed,true);
		$criteria->compare('MovementSpeed',$this->MovementSpeed);
		$criteria->compare('Armor',$this->Armor);
		$criteria->compare('MagicResistance',$this->MagicResistance);
		$criteria->compare('AditionalAttack',$this->AditionalAttack);
		$criteria->compare('AditionalAbility',$this->AditionalAbility);
		$criteria->compare('AditionalArmor',$this->AditionalArmor);
		$criteria->compare('AditionalResist',$this->AditionalResist);
		$criteria->compare('AditionalAttackSpeed',$this->AditionalAttackSpeed);
		$criteria->compare('Health',$this->Health);
		$criteria->compare('AditionalHealth',$this->AditionalHealth);
		$criteria->compare('HealthRegen',$this->HealthRegen);
		$criteria->compare('AditionalHealthRegen',$this->AditionalHealthRegen);
		$criteria->compare('Role',$this->Role);
		$criteria->compare('AttackType',$this->AttackType);
		$criteria->compare('Range',$this->Range);
		$criteria->compare('Energy',$this->Energy);
		$criteria->compare('EnergyRegen',$this->EnergyRegen);
		$criteria->compare('Mana',$this->Mana);
		$criteria->compare('AditionalMana',$this->AditionalMana);
		$criteria->compare('ManaRegen',$this->ManaRegen);
		$criteria->compare('AditionalManaRegen',$this->AditionalManaRegen);
		$criteria->compare('Fury',$this->Fury);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Champions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
