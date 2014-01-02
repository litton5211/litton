
<!DOCTYPE html>
<html lang="zh_cn">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>iqiangqiang</title>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5shiv.js"></script>
     	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div  id ="navbar" class="navbar navbar-inverse navbar-fixed-top">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo Yii::app()->createUrl('/site/index');?>">首页</a></li>
            <li><a href="<?php echo Yii::app()->createUrl('/site/post');?>">关于</a></li>
            <li><a href="#contact">联系我们</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">登录</a></li>
           
            <li><a href="./">注册</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      
    </div>
    <div id="id" class="section">
    	<div class="container">
			<nav class="navbar navbar-second navbar-default" role="navigation">
			  <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header">
			    
			    <a class="navbar-brand" href="#">
			    	<img src="http://s.segmentfault.com/img/logo.png?13.10.21.1" alt="SegmentFault">
			    	话题
			    </a>
			  </div>
			
			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav">
			      
			      <li><a href="#">讨论</a></li>
			      
			    </ul>
			    <form class="navbar-form navbar-left" role="search">
			      <div class="form-group">
			        <input type="text" class="form-control" placeholder="Search">
			      </div>
			      <button type="submit" class="btn btn-default">Submit</button>
			    </form>
			    <div class="nav  navbar-right">
			      <button type="button" class="btn btn-success">加入我们</button>
			    </div>
			  </div>
			</nav>   	
		</div>
    </div>
	<div class="container">
    	<?php echo $content; ?>
    </div>
    <?php $this->beginContent('//layouts/footer'); ?> <?php $this->endContent(); ?>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
   	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
  </body>
</html>
