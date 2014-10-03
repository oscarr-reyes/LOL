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
				'actions'=>array('index','view', 'JSON'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
	public function actionJSON()
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
