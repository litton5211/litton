<?php

class SiteController extends Controller
{
	public $layout='';
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('login','captcha','error'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','logout'),
				'users'=>array('*'),
			),
			
		);
	}
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
				'minLength'=>4,  //最短为4位
				'maxLength'=>4,   //是长为4位
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
		public function actionIndex()
	{
		
		
		$this->layout='//layouts/main';  
		if (Yii::app()->request->isAjaxRequest) {
			$this->layout="";
			$this->renderPartial('index',array('opt'=>$_POST));
		}else{
			$this->render('index');
		}
		
	}
		public function actionPost()
	{
		
		
		$this->layout='//layouts/column2';  
		if (Yii::app()->request->isAjaxRequest) {
			$this->layout="";
			$this->renderPartial('index',array('opt'=>$_POST));
		}else{
			$this->render('index');
		}
		
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}


	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$this->layout='//layouts/simple';  
		$model=new LoginForm('login');


		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			//var_dump($model->validate());die();
			if($model->validate() && $model->login()){
				
			    $url = $this->createUrl('/admin/post/index');
				$this->redirect($url);
			}
		}
		
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{	
		phpCAS::logout();
		Yii::app()->user->logout(); 
		
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionWiseData(){
		
		$where='1=1';
		$groups=array('stdate');
		if (isset($_REQUEST['index'])) {
			
			foreach ($_REQUEST['index'] as $key => $value) {
				if(isset($_REQUEST['groups'])&&in_array($key,$_REQUEST['groups'])){
					array_push($groups,$key);
				}
				$where=$where.' and '.$key.' in ('.implode(",",$value).')';
			}
			
		}
		
		$title=  array();
		if (isset($_REQUEST['groups'])) {
			foreach ($_REQUEST['groups'] as $ind) {
				
				foreach ($_REQUEST['index'][$ind] as  $v) {
					$title[$ind][$v]=CommonUse::confName($ind,$v);
				}

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
			$itemName='0';
			if (isset($_REQUEST['groups'])) {
				foreach ($_REQUEST['groups'] as $key => $value) {
					$itemName=$itemName.'_'.$index[$value];
				}
			}
			
			if (!isset($result[$itemName])) {
				if (isset($_REQUEST['groups'])) {
					foreach ($_REQUEST['groups'] as $key => $value) {
						$result[$itemName][$value]=$index[$value];
					}
				}
				
				$result[$itemName]['pv']=array();
				$result[$itemName]['shows']=array();
				$result[$itemName]['click']=array();
				$result[$itemName]['charge']=array();

			}
			array_push($result[$itemName]['pv'] , array(strtotime($index['stdate'])*1000,(int)$index["sum(pv)"]));
			array_push($result[$itemName]['shows'] , array(strtotime($index['stdate'])*1000,(int)$index["sum(shows)"]));
			array_push($result[$itemName]['click'] , array(strtotime($index['stdate'])*1000,(int)$index["sum(click)"]));
			array_push($result[$itemName]['charge'] , array(strtotime($index['stdate'])*1000,(int)$index["sum(charge)"]));

			
		}
		echo json_encode( array('title' =>$title , 'data' =>$result ,'index'=>array('pv'=>'pv','charge'=>'收入')));
		
	}
	public function actionGetType(){
		var_dump(TradeConf::getTrades());
	}
}