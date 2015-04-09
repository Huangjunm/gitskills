<?php 

class DefaultController extends Controller{
	public function actionIndex()
	{

		$model = new Message;
		$msg = Message::model()->findAllBySql("SELECT * FROM messageboard");

		if (isset($_POST['Message'])) {
			$model->attributes = $_POST['Message'];
			if ($model->validate()) {
				$model->content = $_POST['Message']['content'];
				$model->name = Yii::app()->user->name;
				$model->save();

			}
		}
		$this->render('index',array('model'=>$model,'msg'=>$msg));
	}
}
 ?>
