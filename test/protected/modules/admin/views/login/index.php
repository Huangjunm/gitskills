<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>后台登录</title>
</head>
<body>
<?php $form = $this->beginWidget('CActiveForm') ?>
<?php echo $form->textField($loginForm, 'username', array('id' => 'username', 'placeholder' => 'username')) ?>
<?php echo $form->passwordField($loginForm, 'password', array('id' => 'password', 'placeholder' => 'password')) ?>

<?php $this->endWidget(); ?>
<?php $this->widget('CCaptcha', array('showRefreshButton' => false, 'clickableImage' => true, 'imageOptions' => array('alt' => '点击换图', 'title' => '点击换图', 'style' => 'cursor:pointer'))); ?>
</body>
</html>