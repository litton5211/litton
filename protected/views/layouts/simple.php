<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: 100%;" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>商务搜索部-Asea dashboard数据平台</title>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-switch.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css">

  
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.multiselect.css" rel="stylesheet" type="text/css">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui-1.9.2.custom.css" rel="stylesheet" type="text/css">

  
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.multiselect.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/asea.js"></script> 
  
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-switch.min.js"></script> 
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-sortable.js"></script>


 <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/highstock.js"></script>
  
</head>
<body style="height: 100%;" >
  <div id="head" class="head" >
    <div class="logo-left"></div> 
    <div class="logo-right">
      <div class="text-right">
        <small>您好，郑立涛【<a href="#">退出</a>】</small>
      </div>
    </div> 
    <div class="menu">
      <ul class="nav nav-tabs" >
        <li class="active"><a href="#">概况页</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('realtime/index');?>">实时</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('web/index');?>">网页</a></li>
        <li><a href="<?php echo Yii::app()->createUrl('wise/index');?>">无线</a></li>
        <li><a href="#">小频道</a></li>
        <li><a href="#">凤巢外部</a></li>
        <li><a href="#">SIVA</a></li>
      </ul>
    </div>
  </div>
  



<?php echo $content; ?>

</body></html>