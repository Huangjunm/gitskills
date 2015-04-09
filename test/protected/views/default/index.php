<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
 <!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
</style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo Yii::app()->user->name ?>
            <a href="<?php echo $this->createUrl('index/out')?>">退出</a>
        </div>
        <div class="row">
            <button type="button" class="col-md-3 col-md-offset-4 btn btn-primary btn-lg">
                 <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 留言板
            </button>
        </div>
        <div class="">
            <?php $form = $this->beginWidget('CActiveForm') ?>
           <div class=""> <?php echo $form->textField($model,'content') ?><?php echo $form->errorSummary($model); ?></div>
           <button type="submit" class="btn btn-primary btn-lg">发表留言</button>
           <?php $this->endWidget(); ?>
        </div>
        <div class="row">
            <div class="col-md-3">留言人</div>
            <div class="col-md-4">内容</div>
            <div class="col-md-3">时间</div>
        </div>
      <?php foreach ($msg as $key): ?>
          <div class="row">
              <div class="col-md-3"><?php echo $key->name ?></div>
            <div class="col-md-4"><?php echo $key->content ?></div>
            <div class="col-md-3"><?php echo $key->time ?></div>
          </div>
      <?php endforeach ?>
    </div>
</body>