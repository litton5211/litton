<div id="main" class="main">
	<div class="block-border ">
		<div class="block-x">
			<ul id="select-nav" class="nav nav-pills">
				<li class="active">
					<a href="#day">按天查看</a>
				</li>
				<li><a href="#month">按月查看</a></li>
				<li><a href="#season">按季查看</a></li>
			</ul>
			
		</div>
		<div id="select_index" class="block-y">
			<dl class="dl-horizontal">
			    <dt>基础指标:</dt>
			    <dd>
			    	<ul class="show-item">
			    		<?php foreach (Yii::app()->params["sys_param"]['base_index'] as $key => $value) {
			    			if ($value['default']) {
			    		?>
								<li name="<?php echo $key; ?>" class="btn btn-small btn-blue"  ><?php echo $value['name']; ?></li>
							<?php }else{ ?>
								<li name="<?php echo $key; ?>" class="btn btn-small btn-black" ><?php echo $value['name']; ?></li>
						
							<?php }
						} ?>
					</ul>
			    </dd>
			    <dt>衍生指标:</dt>
			    <dd>
			    	<ul class="show-item">
						<?php foreach (Yii::app()->params["sys_param"]['derivative_index'] as $key => $value) {
			    			if ($value['default']) {
			    		?>
								<li name="index" class="btn btn-small btn-blue" value="<?php echo $key; ?>" ><?php echo $value['name']; ?></li>
							<?php }else{ ?>
								<li name="index" class="btn btn-small btn-black" value="<?php echo $key; ?>" ><?php echo $value['name']; ?></li>
						
							<?php }
						} ?>
					</ul>
			    </dd>
			</dl>
		</div>
		
		
	</div>
	<div class="block-y">
		
	</div>	 

	<div   style="display:table;content: ''; width:100%">	
		
		<div class="span8" style="   float: left;" >
			<div class="pull-left" style="height: 100%; width:50px">
				<span>图例：</span>
			</div>
			    
			<div id="lengends" style=" margin-left: 55px;" >
				
			</div>
		</div>
	
		<div class="span4" style="vertical-align: 13px;">
			<div class="lengends text-right" >
				<select name="">
					<option>指标绝对值</option>
					<option>日环比</option>
					<option>周同比</option>
					<option>最近七天均值</option>
					<option>最近七天对比之前其七天</option>
				</select>
				<br>
				<a href="">下载所选条件全部数据</a>
			</div>
		</div>
	</div>
	<div id="chart" ></div>
	<div class="bottom-border"></div>
	
	<div class="block-y">
		
		<table id="web_table" aria-describedby="example_info" class="table table-condensed table-bordered table-striped  dataTable"  >
			<thead>
				<tr>
					
				</tr>
			</thead>
		</table>

	</div>

</div>



<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/page/web_page.js"></script>
