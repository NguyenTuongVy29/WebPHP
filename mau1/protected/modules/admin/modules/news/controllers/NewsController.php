<?php

class NewsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
//	public $layout='//layouts/column2';
//
//	/**
//	 * @return array action filters
//	 */
//	public function filters()
//	{
//		return array(
//			'accessControl', // perform access control for CRUD operations
//			'postOnly + delete', // we only allow deletion via POST request
//		);
//	}

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
		$model=new News;
                $dataNews=  NewsType::getAllNews("id_news_type,name");
                $temNew=Array();
                foreach($dataNews as $item){
                    $temNew[$item['id_news_type']]=$item['name'];
                }
               
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                 $path = Yii::getPathOfAlias('webroot').'/uploads';  
		if(isset($_POST['News']))
		{
			$model->attributes=$_POST['News'];
                        
                        
                          $image_description = CUploadedFile::getInstance($model,'image_description');
                        if($image_description){
                        $tem=rand(0,9999).time().$image_description->name;
                        $image_description->saveAs($path.'/'.$tem);
                        $model->image_description = 'uploads/'.$tem;
                        }
                        
                         $image_content = CUploadedFile::getInstance($model, 'image_content');
                        if($image_content){
                        $tem=rand(0,9999).time().$image_content->name;
                        $image_content->saveAs($path.'/'.$tem);
                        $model->image_content = 'uploads/'.$tem;
                        }
                        
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_news));
		}

		$this->render('create',array(
			'model'=>$model,
                        'NewData'=>$temNew
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
                $dataNews=  NewsType::getAllNews("id_news_type,name");
                $temNew=Array();
                foreach($dataNews as $item){
                    $temNew[$item['id_news_type']]=$item['name'];
                }

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                $path = Yii::getPathOfAlias('webroot').'/uploads';      
		if(isset($_POST['News']))
		{
			$model->attributes=$_POST['News'];
                        $old_img = $model->image_description;
                        $old_image_content=$model->image_content;
                        $image_description = CUploadedFile::getInstance($model, 'image_description');
                        if(!empty($image_description->name)){
                        $tem=rand(0,9999).time().$image_description->name;
                        $image_description->saveAs($path.'/'.$tem);
                        $model->image_description = 'uploads/'.$tem;
                        }else{
                            $model->image_description=$old_img;
                        }
                          $image_content = CUploadedFile::getInstance($model, 'image_content');
                        if(!empty($image_content->name)){
                        $tem=rand(0,9999).time().$image_content->name;
                        $image_content->saveAs($path.'/'.$tem);
                        $model->image_content = 'uploads/'.$tem;
                        }else{
                            $model->image_content=$old_image_content;
                        }
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_news));
		}

		$this->render('update',array(
			'model'=>$model,
                        'NewData'=>$temNew
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
//		$dataProvider=new CActiveDataProvider('News');
//		$this->render('index',array(
//			'dataProvider'=>$dataProvider,
//		));
            //phai dang nhap moi vao dc qly admin
            if( Yii::app()->session['username']==NULL){
                header('Content-type: application/json');
                echo CJSON::encode("You do not have access");
                Yii::app()->end();
            }
           $model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new News('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['News']))
			$model->attributes=$_GET['News'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return News the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=News::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param News $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='news-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
