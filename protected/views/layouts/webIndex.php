<?php $this->beginContent('//layouts/main'); ?>
<div class="left-nav">
	<div class="panel panel-default">
		<?php $form=$this->beginWidget('CActiveForm', array(  
			'id'=>'web-form',  
			'action'=>'#',
			'htmlOptions'=>array('enctype'=>'multipart/form-data','class'=>'form-inline'),
			'enableAjaxValidation'=>false,  
			)); ?> 

			<div class="panel-heading">
				选择日期：
				<div class="controls input-prepend input-append">
					<span class="add-on date-before"><i class="icon-chevron-left"></i></span>
					<input id="datepicker" name="stdate" class="input-small" size="10" type="text" value="<?php echo date('Y-m-d',strtotime('-1 day')); ?>" >
					<span class="add-on date-after"><i class="icon-chevron-right"></i></span>
				</div>
			</div>
			<div class="bottom-border"></div>
			<div class="caption">
				<div class="span6">
					<label class="radio">
						<input type="radio" name="web[filter]" id="filter1" value="1" checked>过滤						
					</label>
				</div>	
				<div class="span6">
					<label class="radio">
						<input type="radio" name="web[filter]" id="filter2" value="0" >未过滤
					</label>
				</div>	
			</div>
			<div class="caption">
				<div class="span6">
					<label class="radio">
						<input type="radio" name="web[trade]" id="trade1" value="1" >
						词行业
					</label>
				</div>	
				<div class="span6">
					<label class="radio">
						<input type="radio" name="web[trade]" id="trade2" value="0" checked>
						客户行业
					</label>
				</div>	
			</div>
			<div class="caption">
				<div class="span6">
					<label class="radio">
						<input type="radio" name="web[inner]" id="inner1" value="1" >
						含内部客户
					</label>
				</div>	
				<div class="span6">
					<label class="radio">
						<input type="radio" name="web[inner]" id="inner2" value="0" checked>
						不含内部客户
					</label>
				</div>	
			</div>
			<div class="bottom-border"></div>
			<div id="Z_TypeList" class="Z_TypeList">
				<div class="Z_MenuList">				
			    	<ul class="nav nav-list bs-docs-sidenav ">
			          <li class="list-item" name="trade">
			          	<h3>行业</h3>
			          	<p style="display: block;">
			          		<label></label>
			          	</p>
						<i class="icon-chevron-right menuIcon"></i>
			          </li>
			          <li class="list-item alt" name="cmatch">
			          	<h3>频道</h3>
			          	<p style="display: block;">
			          		<label></label>
			          	</p>
			          </li>
			          <li class="list-item" name="unit">
			          	<h3>运营单位</h3>
			          	<p style="display: block;">
			          		<label></label>
			          	</p>
			          </li>
			          <li class="list-item alt" name="channel">
			          	<h3>流量来源</h3>
			          	<p style="display: block;">
			          		<label></label>
			          	</p>
			          </li>
			          <li class="list-item" name="browser">
			          	<h3>浏览器</h3>
			          	<p style="display: block;">
			          		<label></label>
			          	</p>
			          </li>
			          <li class="list-item alt" name="area">
			          	<h3>地域</h3>
			          	<p style="display: block;">
			          		<label></label>
			          	</p>
			          </li>
			        </ul>
					
				</div>
				<div class="Z_SubList" style="top: -225px; left: 238px; display: none;">
					<div id="view_trade" class="subView" style="display: block;">
						<ul class="breadcrumb">
							<li value ="0" class="active">行业</li>
							<label class="checkbox"><input name="groups[]" type="checkbox" value="trade">分组统计</label>
						</ul>
						<p id ="0" class="items">
							<?php foreach(TradeConf::getTrades() as $iterm){ ?>
							<label class="checkbox">
								<input type="checkbox" name="index[trade][]" index="trade" 
									label="<?php echo $iterm['name'];?>" value="<?php echo $iterm['id'];?>">
									<?php echo Chtml::link($iterm['name'],array(''),array('name'=>'trade','value'=>$iterm['id']));?>
									
							</label>
							<?php } ?>
						</p>
						
					</div>
					<div id="view_cmatch"class="subView" style="display: block;">
						<ul class="breadcrumb">
							<li class="active">分频道</li>
							<label class="checkbox"><input name="groups[]" type="checkbox" value="cmatch">分组统计</label>
						</ul>
						<p class="items">
							<?php foreach(Yii::app()->params["cmatch_param"]['PC_WEB_CMATCH'] as $key => $value){?>
								<label class="checkbox">
									<?php echo $value ?><input type="checkbox" name="index[cmatch][]" index="cmatch" label="<?php echo $value ?>" value="<?php echo $key ?>">
								</label>
							<?php } ?>
						</p>						
					</div>
					<div id="view_unit"class="subView" style="display: block;">
						<ul class="breadcrumb">						
							<li class="active">运营单位</li>
							<label class="checkbox"><input name="groups[]" type="checkbox" value="unit">分组统计</label>
						</ul>
						<p id ="0" class="items">
							<?php foreach(UnitConf::getUnit() as $iterm){ ?>
							<label class="checkbox">
								<input type="checkbox" name="index[unit][]" index="unit" 
									label="<?php echo $iterm['name'];?>" value="<?php echo $iterm['id'];?>">
									<?php echo Chtml::link($iterm['name'],array(''),array('name'=>'unit','value'=>$iterm['id']));?>
									
							</label>
							<?php } ?>
						</p>
					</div>
					<div id="view_channel" class="subView" style="display: block;">
						<ul class="breadcrumb">
							<li class="active">流量来源</li>
							<label class="checkbox"><input name="groups[]" type="checkbox" value="channel">分组统计</label>
						</ul>
						<p class="items">
							<?php foreach(Yii::app()->params["asea_param"]['SOURCES_CHANNEL'] as $key => $value){?>
								<label class="checkbox">
									<input type="checkbox" name="index[channel][]" index="channel" label="<?php echo $value ?>" value="<?php echo $key ?>"><?php echo $value ?>
								</label>
							<?php } ?>
						</p>
					</div>
					<div id="view_browser" class="subView" style="display: block;">
						<ul class="breadcrumb">
							<li class="active">浏览器</li>
							<label class="checkbox"><input name="groups[]" type="checkbox" value="browser">分组统计</label>
						</ul>
						<p class="items">
							<?php foreach(Yii::app()->params["asea_param"]['SOURCES_BROWSER'] as $key => $value){?>
								<label class="checkbox">
									<input type="checkbox" name="index[browser][]" index="browser" label="<?php echo $value ?>" value="<?php echo $key ?>"><?php echo $value ?>
								</label>
							<?php } ?>
						</p>
					</div>
					<div id="view_area" class="subView" style="display: block;">
						<ul class="breadcrumb">
							<li value ="0" class="active">地域</li>
							<label class="checkbox"><input name="groups[]" type="checkbox" value="area">分组统计</label>
						</ul>
						<p id ="0" class="items">
							<?php foreach(AreaConf::getArea() as $iterm){ ?>
							<label class="checkbox">
								<input type="checkbox" name="index[area][]" index="area" 
									label="<?php echo $iterm['name'];?>" value="<?php echo $iterm['id'];?>">
									<?php echo Chtml::link($iterm['name'],array(''),array('name'=>'area','value'=>$iterm['id']));?>
									
							</label>
							<?php } ?>
						</p>
					</div>
				</div>
			</div>
			
			
			<div class="bottom-border"></div>

			<fieldset class="text-center">
				<button class="btn" contenteditable="true" type="reset">重置</button>
				<?php echo CHtml::ajaxSubmitButton('提交', '', 
					array('type' => 'POST',
							'update'=>'#left-main'
							),
					array('class'=>'btn btn-primary'))?>
			</fieldset>



		</form>
		<?php $this->endWidget(); ?>  
	</div>


</div>
<div id="left-main"  class="sidebar">
	<?php echo $content; ?>
</div>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.tmailsider.js"></script>
			<script type="text/javascript">
				$('#Z_TypeList').Z_TMAIL_SIDER();
			</script>

<?php $this->endContent(); ?>



