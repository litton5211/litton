<?php

class WebController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/simple';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'actions'=>array('index','view'),
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
			
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->layout = '//layouts/colorbox';
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
		$model=new ClientInfo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ClientInfo']))
		{
			$model->attributes=$_POST['ClientInfo'];
			if ($model->city==""){
				$clientId = $model->province;
			}else if($model->department==""){
				$clientId = $model->city;
			}else {
				$clientId = $model->department;
			}
			$clientId = $clientId.$model->client_code.$model->prof_type.$model->client_type;
			
			do{
				$clientId =$clientId.ClientInfo::domake_clientid(7);
				$client = ClientInfo::model()->findByPk($clientId);
			}while ($client!=null);
			
			
			$model->client_id = $clientId;
			$model->create_time = time();
	
			if($model->save())
				$this->redirect(array('admin'));
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
		$this->layout = '//layouts/colorbox';
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ClientInfo']))
		{
			$model->attributes=$_POST['ClientInfo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->client_id));
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
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->layout='//layouts/webIndex';  
		if (Yii::app()->request->isAjaxRequest) {
			$this->layout="";
			$this->renderPartial('index',array('opt'=>$_POST));
		}else{
			$this->render('index');
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ClientInfo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ClientInfo']))
			$model->attributes=$_GET['ClientInfo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ClientInfo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='client-info-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionDayData(){
		$where='1=1 and stdate="2013-09-26"';
		$groups=array('stdate');
		

		if (isset($_REQUEST['index'])) {
			
			foreach ($_REQUEST['index'] as $key => $value) {
				if(isset($_REQUEST['groups'])&&in_array($key,$_REQUEST['groups'])){
					array_push($groups,$key);
				}
				$where=$where.' and '.$key.' in ('.implode(",",$value).')';

			}
			
		}
		
		$title=  array('指标');
		if (isset($_REQUEST['groups'])) {

			foreach ($_REQUEST['groups'] as $ind) {
				
				array_push($title,Yii::app()->params["sys_param"]["groups"][$ind]);

			}
		}
		$data = Yii::app()->db->createCommand()
		    ->select(implode(",",$groups).',sum(pv),sum(shows),sum(click),sum(charge)')
		    ->from('kenan_search_index')
		    ->group(implode(",",$groups))
		    ->where($where)
		    ->queryAll();
		
		$result= array();
		
		foreach ($data as $index) {
			if (sizeof($groups)==3) {
				$result['pv'][CommonUse::confName($groups[1],$index[$groups[1]])][CommonUse::confName($groups[2],$index[$groups[2]])]=array($index["sum(charge)"],'3232');
				$result['charge'][CommonUse::confName($groups[1],$index[$groups[1]])][CommonUse::confName($groups[2],$index[$groups[2]])]=array($index["sum(pv)"],'3232');	
			}elseif (sizeof($groups)==2) {
				$result['pv'][CommonUse::confName($groups[1],$index[$groups[1]])]=array($index["sum(charge)"],'3232');
				$result['charge'][CommonUse::confName($groups[1],$index[$groups[1]])]=array($index["sum(pv)"],'3232');	
			}else{
				$result['pv']=array($index["sum(charge)"],'3232');
				$result['charge']=array($index["sum(pv)"],'3232');
			}
					
		}
		echo json_encode( array('data'=>$result,'header'=>array('当天值','七天均值'),'title'=>$title));
	}
}
