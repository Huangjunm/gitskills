<?php 
	class User extends CActiveRecord{
		/**
		 * 必不可缺的方法
		 */
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}
/**
 * 表名
 */
		public function tableName()
		{
			return 'user';
		}


	}
 ?>