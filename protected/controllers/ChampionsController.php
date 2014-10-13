<?php

class ChampionsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'JSON', 'simulation'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'refresh'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Champions;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Champions']))
		{
			$model->attributes=$_POST['Champions'];

			$search = Champions::model()->findByAttributes(array(
				'Name'=>$model->Name
			));

			if(!$search)
			{
				if($model->save())
					$this->redirect(array('view','id'=>$model->id));
			}

			else
				$model->addError('Name', 'Champion Already Exists');
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Champions']))
		{
			$model->attributes=$_POST['Champions'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Champions');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Champions('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Champions']))
			$model->attributes=$_GET['Champions'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	*  Get all Champions data and return as JSON
	**/
	public function actionJSON($id = null)
	{
		//Check if id was provided
		if(!$id)
		{
			$model = Champions::model()->findAll();
	
			$champions = null;
	
			for($i = 0; $i < count($model); $i++)
			{
				$champions[$i]['Name'] = $model[$i]->Name;
				$champions[$i]['Health'] = $model[$i]->Health;
				$champions[$i]['AditionalHealth'] = $model[$i]->AditionalHealth;
				$champions[$i]['HealthRegen'] = $model[$i]->HealthRegen;
				$champions[$i]['AditionalHealthRegen'] = $model[$i]->AditionalHealthRegen;
				$champions[$i]['AttackDamage'] = $model[$i]->AttackDamage;
				$champions[$i]['AditionalAttack'] = $model[$i]->AditionalAttack;
				$champions[$i]['AttackSpeed'] = $model[$i]->AttackSpeed;
				$champions[$i]['AditionalAttackSpeed'] = $model[$i]->AditionalAttackSpeed;
				$champions[$i]['MovementSpeed'] = $model[$i]->MovementSpeed;
				$champions[$i]['Armor'] = $model[$i]->Armor;
				$champions[$i]['AditionalArmor'] = $model[$i]->AditionalArmor;
				$champions[$i]['MagicResistance'] = $model[$i]->MagicResistance;
				$champions[$i]['AditionalResist'] = $model[$i]->AditionalResist;
			}
	
			// var_dump($champions);
			echo json_encode($champions, true);
		}

		//Return champion data from provided id
		else
		{
			$model = Champions::model()->findByPk($id);

			echo json_encode($model->attributes);
		}
	}

	/**
	*	Display the simulation view
	**/
	public function actionSimulation()
	{
		if(isset($_GET['champs']))
		{
			$dataProvider = new CActiveDataProvider('Champions', array(
				'pagination'=>array(
					'pageSize'=>500
				)
			));

			$this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'champions-grid',
				// 'enableSorting'=>false,
				'dataProvider'=>$dataProvider,
				'itemsCssClass'=>'table',
				'columns'=>array(
					array(
						'name'=>'Name',
						'type'=>'raw',
						'value'=>'CHtml::button($data->Name, array("class"=>"btn btn-link", "onClick"=>"getChampionData(".$data->id.")"))',
						'headerHtmlOptions'=>array(
							'onClick'=>'updateSelection(this); return false;'
						)
					),
					array(
						'name'=>'Health',
						'value'=>'$data->Health." (+".$data->AditionalHealth.")"',
						'headerHtmlOptions'=>array(
							'onClick'=>'updateSelection(this); return false;'
						)
					),
					array(
						'name'=>'AttackDamage',
						'value'=>'$data->AttackDamage." (+".$data->AditionalAttack.")"',
						'headerHtmlOptions'=>array(
							'onClick'=>'updateSelection(this); return false;'
						)
					),
					array(
						'name'=>'AttackSpeed',
						'value'=>'$data->AttackSpeed." (+%".$data->AditionalAttackSpeed.")"',
						'headerHtmlOptions'=>array(
							'onClick'=>'updateSelection(this); return false;'
						)
					),
					array(
						'name'=>'Armor',
						'value'=>'$data->Armor." (+".$data->AditionalArmor.")"',
						'headerHtmlOptions'=>array(
							'onClick'=>'updateSelection(this); return false;'
						)
					),
					array(
						'name'=>'MagicResistance',
						'value'=>'$data->MagicResistance." (+".$data->AditionalResist.")"',
						'headerHtmlOptions'=>array(
							'onClick'=>'updateSelection(this); return false;'
						)
					),
				),
			));
		}

		else
		{
			$this->layout = '//layouts/column1';
			$this->render('simulation');
		}
	}

	public function actionRefresh()
	{
		$api = $this->apiKey();

		$info = file_get_contents('https://lan.api.pvp.net/api/lol/static-data/lan/v1.2/champion?champData=stats&api_key='.$api);

		$data = json_decode($info);

		$summaryChange = 0;
		$summaryNew = 0;

		//process every champion
		foreach($data->data as $dat)
		{
			$model = Champions::model()->findByAttributes(array(
				'Name'=>$dat->name
			));

			$changed = false;

			if($model)
			{				
				if($model->AttackDamage != $dat->stats->attackdamage)
				{
					$changed = true;

					$model->AttackDamage = $dat->stats->attackdamage;
				}

				if($model->MovementSpeed != $dat->stats->movespeed)
				{
					$changed = true;

					$model->MovementSpeed = $dat->stats->movespeed;
				}

				if($model->Armor != $dat->stats->armor)
				{
					$changed = true;

					$model->Armor = $dat->stats->armor;
				}

				if($model->MagicResistance != $dat->stats->spellblock)
				{
					$changed = true;

					$model->MagicResistance = $dat->stats->spellblock;
				}

				if($model->Health != $dat->stats->hp)
				{
					$changed = true;

					$model->Health = $dat->stats->hp;
				}

				if($model->HealthRegen != $dat->stats->hpregen)
				{
					$changed = true;

					$model->HealthRegen = $dat->stats->hpregen;
				}

				if($model->AditionalAttack != $dat->stats->attackdamageperlevel)
				{
					$changed = true;

					$model->AditionalAttack != $dat->stats->attackdamageperlevel;
				}

				if($model->AditionalArmor != $dat->stats->armorperlevel)
				{
					$changed = true;

					$model->AditionalArmor = $dat->stats->armorperlevel;
				}

				if($model->AditionalResist != $dat->stats->spellblockperlevel)
				{
					$changed = true;

					$model->AditionalResist != $dat->stats->spellblockperlevel;
				}

				if($model->AditionalAttackSpeed != $dat->stats->attackspeedperlevel)
				{
					$changed = true;

					$model->AditionalAttackSpeed != $dat->stats->attackspeedperlevel;
				}

				if($model->AditionalHealth != $dat->stats->hpperlevel)
				{
					$changed = true;

					$model->AditionalHealth = $dat->stats->hpperlevel;
				}

				if($model->AditionalHealthRegen != $dat->stats->hpregenperlevel)
				{
					$changed = true;

					$model->AditionalHealthRegen = $dat->stats->hpregenperlevel;
				}


				$model->save();
			}


			if(!$model)
			{
				$champion = new Champions;

				$champion->Name = $dat->stats->name;
				$champion->AttackDamage = $dat->stats->attackdamage;
				$champion->MovementSpeed = $dat->stats->movespeed;
				$champion->Armor = $dat->stats->armor;
				$champion->MagicResistance = $dat->stats->spellblock;
				$champion->Health = $dat->stats->hp;
				$champion->HealthRegen = $dat->stats->hpregen;
				$champion->AditionalAttack != $dat->stats->attackdamageperlevel;
				$champion->AditionalArmor = $dat->stats->armorperlevel;
				$champion->AditionalResist != $dat->stats->spellblockperlevel;
				$champion->AditionalAttackSpeed != $dat->stats->attackspeedperlevel;
				$champion->AditionalHealth = $dat->stats->hpperlevel;
				$champion->AditionalHealthRegen = $dat->stats->hpregenperlevel;

				if($champion->save())
					$summaryNew++;
			}

			if($changed)
			{
				$summaryChange++;
				// echo $dat->name.' changed <br>';
			}
		}

		echo $summaryChange.' Champion/s updated<br>';
		echo $summaryNew.' Champion/s created<br>';
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Champions the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Champions::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Champions $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='champions-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
