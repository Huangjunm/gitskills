<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/3/21 0021
 * Time: 22:05
 */
class LoginController extends Controller
{
    public function actionIndex()
    {
        $loginForm = new LoginForm();
        echo $this->createUrl('default/index');
        $this->render('index', array('loginForm' => $loginForm));
    }
    public function actions(){
        return array(
            'captcha' => array(
                'class'=>'system.web.widgets.captcha.CCaptchaAction',
                'height'=>'30',
                'width'=>100,
                'minLength'=>4,
                'maxLength'=>4
            ),
        );
    }
}