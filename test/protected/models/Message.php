<?php 

	class Message extends CActiveRecord{
		public $content;
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}

		public function tableName()
		{
			return 'messageboard';
		}

		public function rules(){
			return array(
				array('content','required','message'=>'留言不能为空'),
				);
		}
	}
 ?>