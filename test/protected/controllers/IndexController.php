<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/21 0021
 * Time: 20:54
 */
class IndexController extends Controller{
    public function actionIndex(){

    	//var_dump(Yii::app()->db);die;
    	$model = new LoginForm;
    	if (isset($_POST['LoginForm'])) {
    		$model->attributes = $_POST['LoginForm'];
    		if($model->validate() && $model->login())
    		{
    			$this->redirect(array('default/index'));
    		}
    	}
        $this->render('index',array('model'=>$model));
    }
}