<?php //Yii::app()->getClientScript()->registerScriptFile('../js/jquery.cgridview.js'); ?>

<h1>Champion fight simulator</h1>
<hr>
<div id="simulator"></div>

<div class="row">
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-3">
				<div style="height: 120px; background-color: black; width: 120px;" id="Champion1" class="Champion"><img id="Champion1-img" src="<?php echo Yii::app()->baseUrl; ?>/images/unselect.png"></div>
			</div>

			<div class="col-md-9">
				<p class="help-block"><- Click to select champion.</p>
				<div class="progress">
					<div id="Champion1-Health" class="progress-bar progress-bar-success" style="width: 0%;">
					</div>
					<div class="progress-bar progress-bar-danger" style="width: 0%;">
					</div>
				</div>

				<div class="progress">
					<div id="Champion1-Resource" class="progress-bar progress-bar-success" style="width: 0%;">
					</div>
					<div class="progress-bar progress-bar-danger" style="width: 0%;">
					</div>
				</div>
			</div>
		</div>
		<br>

		<!-- Table Stats -->
		<?php
		$this->widget('zii.widgets.CDetailView', array(
			'data'=>array(),
			'htmlOptions'=>array('class'=>'table table-hover table-bordered'),
			'attributes'=>array(
				array(
					'name'=>'Name',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Name1"></span>'
				),
				array(
					'name'=>'Health',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Health1"></span> <span class="Stat" id="AditionalHealth1"></span>'
				),
				array(
					'name'=>'HealthRegeneration',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="HealthRegen1"></span> <span class="Stat" id="AditionalHealthRegen1"></span>'
				),
				array(
					'name'=>'Mana',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Mana1">null</span> <span class="Stat" id="AditionalMana1"></span>'
				),
				array(
					'name'=>'ManaRegeneration',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="ManaRegen1">null</span> <span class="Stat" id="AditionalManaRegen1"></span>'
				),
				array(
					'name'=>'Energy',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Energy1">null</span>'
				),
				array(
					'name'=>'EnergyRegeneration',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="EnergyRegen1">null</span>'
				),
				array(
					'name'=>'Fury',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Fury1">null</span>'
				),
				array(
					'name'=>'AttackDamage',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="AttackDamage1"></span> <span class="Stat" id="AditionalAttack1"></span>'
				),
				array(
					'name'=>'AttackSpeed',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="AttackSpeed1"></span> <span class="Stat" id="AditionalAttackSpeed1"></span>'
				),
				array(
					'name'=>'MovementSpeed',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="MovementSpeed1"></span>'
				),
				array(
					'name'=>'Armor',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Armor1"></span> <span class="Stat" id="AditionalArmor1"></span>'
				),
				array(
					'name'=>'MagicResistance',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="MagicResistance1"></span> <span class="Stat" id="AditionalResist1"></span>'
				),
			)
		));
		?>
	</div>
	<div class="col-md-6">
		<div class="row">
			<div class="col-md-3">
				<div style="height: 120px; background-color: black; width: 120px;" id="Champion2" class="Champion"><img id="Champion2-img" src="<?php echo Yii::app()->baseUrl; ?>/images/unselect.png"></div>
			</div>

			<div class="col-md-9">
				<p class="help-block"><- Click to select champion.</p>
				<div class="progress">
					<div id="Champion2-Health" class="progress-bar progress-bar-success" style="width: 0%;">
					</div>
					<div class="progress-bar progress-bar-danger" style="width: 0%;">
					</div>
				</div>

				<div class="progress">
					<div id="Champion2-Resource" class="progress-bar progress-bar-success" style="width: 0%;">
					</div>
					<div class="progress-bar progress-bar-danger" style="width: 0%;">
					</div>
				</div>
			</div>
		</div>
		<br>

		<!-- Table Stats -->
		<?php
		$this->widget('zii.widgets.CDetailView', array(
			'data'=>array(),
			'htmlOptions'=>array('class'=>'table table-hover table-bordered'),
			'attributes'=>array(
				array(
					'name'=>'Name',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Name2"></span>'
				),
				array(
					'name'=>'Health',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Health2"></span> <span class="Stat" id="AditionalHealth2"></span>'
				),
				array(
					'name'=>'HealthRegeneration',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="HealthRegen2"></span> <span class="Stat" id="AditionalHealthRegen2"></span>'
				),
				array(
					'name'=>'Mana',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Mana2">null</span> <span class="Stat" id="AditionalMana2"></span>'
				),
				array(
					'name'=>'ManaRegeneration',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="ManaRegen2">null</span> <span class="Stat" id="AditionalManaRegen2"></span>'
				),
				array(
					'name'=>'Energy',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Energy2">null</span>'
				),
				array(
					'name'=>'EnergyRegeneration',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="EnergyRegen2">null</span>'
				),
				array(
					'name'=>'Fury',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Fury2">null</span>'
				),
				array(
					'name'=>'AttackDamage',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="AttackDamage2"></span> <span class="Stat" id="AditionalAttack2"></span>'
				),
				array(
					'name'=>'AttackSpeed',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="AttackSpeed2"></span> <span class="Stat" id="AditionalAttackSpeed2"></span>'
				),
				array(
					'name'=>'MovementSpeed',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="MovementSpeed2"></span>'
				),
				array(
					'name'=>'Armor',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="Armor2"></span> <span class="Stat" id="AditionalArmor2"></span>'
				),
				array(
					'name'=>'MagicResistance',
					'type'=>'raw',
					'value'=>'<span class="Stat" id="MagicResistance2"></span> <span class="Stat" id="AditionalResist2"></span>'
				),
			)
		));
		?>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="ChampionSelect" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Champion Selection</h4>
				<p class="help-block">Sort by clicking label</p>
			</div>
			<div class="modal-body">
				<?php echo CHtml::image(Yii::app()->baseUrl.'/images/ajax-loader.gif', 'loading'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var champion1,
		champion2,
		selection;

	$(document).ready(function()
	{
		var Loaded = false;

		$('.Champion').click(function(event)
		{
			$('#ChampionSelect').modal(
			{
				keyboard: false
			});

			selection = $(this).attr('id');
		});

		// Modal shown event
		$('#ChampionSelect').on('shown.bs.modal', function(e)
		{
			if(!Loaded)
			{
				$.ajax(
				{
					url: '',
					type: 'GET',
					data: {champs: true},
					success:function(data, status)
					{
						$('.modal-body').html(data);
					},
					error: function (XMLHttpRequest, textStatus, errorThrown)
					{
						console.log("error: \n"+XMLHttpRequest.responseText);
						console.log(textStatus);
						console.log(errorThrown);
					}
				});

				Loaded = true;
			}
		});
	});

	//Get champion data from modal list
	function getChampionData(id)
	{
		$('#ChampionSelect').modal('toggle');

		$.ajax(
		{
			url: '<?php echo Yii::app()->createUrl("champions/json"); ?>',
			type: 'GET',
			data: {id: id},
			success:function(data, status)
			{
				if(selection == 'Champion1')
				{
					champion1 = JSON.parse(data);

					if(typeof champion1 !== 'undefined')
						champion1.currentHealth = champion1.Health;

					$('#Champion1-img').attr('src', getImgUrl(champion1.Name));

					showDataStats(champion1);
				}

				if(selection == 'Champion2')
				{
					champion2 = JSON.parse(data);

					if(typeof champion2 !== 'undefined')
						champion2.currentHealth = champion2.Health;

					$('#Champion2-img').attr('src', getImgUrl(champion2.Name));

					showDataStats(champion2);
				}
			},
			error: function (XMLHttpRequest, textStatus, errorThrown)
			{
				console.log("error: \n"+XMLHttpRequest.responseText);
				console.log(textStatus);
				console.log(errorThrown);
			}
		});
	}

	function getImgUrl(img)
	{
		var img = img,
			url = '<?php echo Yii::app()->baseUrl; ?>/images/';

		if(img.indexOf("'") != -1)
			img = img.replace("'", '');

		if(img.indexOf('.') != -1)
			img = img.replace('.', '');

		if(img.indexOf(' ') != -1)
			img = img.replace(' ', '');

		return url + img + '.png';
	}

	function showDataStats(champion)
	{
		var champ,
			stats = [],
			result = {};

		if(selection == 'Champion1')
			champ = 1;

		if(selection == 'Champion2')
			champ = 2;

		$('.Stat').each(function(i, obj)
		{
			if($(this).attr('id').indexOf(champ) != -1)
				stats.push($(this).attr('id'))
		});

		for(key in stats)
		{

			if(champion.hasOwnProperty(stats[key].replace(champ, '')))
			{
				result[stats[key]] = champion[stats[key].replace(champ, '')];
			}
		}

		for(data in result)
		{
			if(data.indexOf('AditionalAttackSpeed') != -1)
				$('#' + data).text('(+%' + result[data] + ')');
		
			else if(data.indexOf('Aditional') != -1)
				$('#' + data).text('(+' + result[data] + ')');
				
			else
				$('#' + data).text(result[data]);
		}
	
		checkValues(champ);
		checkBars();
	}

	//Check values in stats (change to null whenever data is 0)
	function checkValues(number)
	{
		$('.Stat').each(function(i, obj)
		{
			if($(this).attr('id').indexOf(number) != -1)
			{
				var data = $(this).attr('id');

				if($('#' + data).text() == '' || $('#' + data).text() == '0')
					$('#' + data).text('null');
			}
		});
	}

	//Check health and resource bars for both champions
	function checkBars()
	{
		if(typeof champion1 !== 'undefined')
		{
			//Champion1 Health
			championMaxHealth1 = champion1.Health;
			championHealthBar1 = $('#Champion1-Health');
			championHealthBar1.width(getPercentage(champion1.currentHealth, champion1.Health).toString() + '%');

			if(champion1.currentHealth > 0)
				championHealthBar1.text(champion1.currentHealth);

			else
				championHealthBar1.text('');
		}

		if(typeof champion2 !== 'undefined')
		{
			championMaxHealth2 = champion2.Health;
			championHealthBar2 = $('#Champion2-Health');
			championHealthBar2.width(getPercentage(champion2.currentHealth, champion2.Health).toString() + '%');

			if(champion2.currentHealth > 0)
				championHealthBar2.text(champion2.currentHealth);

			else
				championHealthBar2.text('');
		}

	}

	function getPercentage(value, max)
	{
		return value / max * 100;
	}
</script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/util.js"></script>