<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: 100%;" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>柯南分析平台</title>
	<?php echo $this->module->registerCss('bootstrap.min.css', 'screen');?>
	<?php echo $this->module->registerCss('bootstrap-reset.css', 'screen');?>
	<?php echo $this->module->registerCss('font-awesome.css', 'screen');?>
	<?php echo $this->module->registerCss('style.css', 'screen');?>
	<?php echo $this->module->registerCss('style-responsive.css', 'screen');?>
	<?php echo $this->module->registerCss('owl.carousel.css', 'screen');?>
	<?php echo $this->module->registerCss('jquery.easy-pie-chart.css', 'screen');?>
	<?php echo $this->module->registerJs('jquery.js', 'screen');?>  
	<?php echo $this->module->registerJs('jquery-1.8.3.min.js', 'screen');?>  
	<?php echo $this->module->registerJs('bootstrap.min.js', 'screen');?>  



</head>
<body>
	
  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="点击隐藏左侧" data-placement="right" class="tooltips">
                	<i class="glyphicon glyphicon-align-justify"></i>
                </div>
            </div>
            <!--logo start-->
            <a href="#" class="logo">柯南<span>数据分析平台</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="glyphicon glyphicon-bell"></i>
                            <span class="badge bg-success">2</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">2条最新通知</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">Dashboard v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">查看所有消息</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="<?php echo $this->module->registerImage('avatar1_small.jpg');?>">
                            <span class="username">zhenglitao</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class="glyphicon glyphicon-lock"></i>我的权限</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-bell"></i> 我的消息</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                            <li><a href="login.html"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                  	  <a  href="<?php echo Yii::app()->createURL('admin')?>">
                  	  		<i class="glyphicon glyphicon-home"></i>
                        	<span>首页</span>
                  	  </a>            
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="glyphicon glyphicon-random"></i>
                          <span>表路由</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li>
                          	<a  href="<?php echo Yii::app()->createURL('admin/table/index')?>">路由规则demo</a>
                          </li>
                          <li>
                          	<a  href="<?php echo Yii::app()->createURL('admin/table/admin')?>">路由规则</a>
                          </li>
                          
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-cogs"></i>
                          <span>Components</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="grids.html">Grids</a></li>
                          <li><a class="" href="calendar.html">Calendar</a></li>
                          <li><a class="" href="charts.html">Charts</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-tasks"></i>
                          <span>Form Stuff</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Components</a></li>
                          <li><a class="" href="form_wizard.html">Form Wizard</a></li>
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-th"></i>
                          <span>Data Tables</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                          <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="inbox.html">
                          <i class="icon-envelope"></i>
                          <span>Mail </span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-glass"></i>
                          <span>Extra</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          
                          <li><a class="" href="404.html">404 Error</a></li>
                          <li><a class="" href="500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="login.html">
                          <i class="icon-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
    <section id="main-content">
  		<section class="wrapper">
      		<?php echo $content; ?>
      	</section>
	</section>
      <!--main content end-->
  </section>

   <?php echo $this->module->registerJs('common-scripts.js', 'screen');?>
	

</body>
</html>