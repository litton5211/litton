<div id="main" class="main">
	<div class="block-border ">
		<fieldset class="block-x">
			<ul id="select-nav" class="nav nav-pills">
				<li class="active">
					<a href="#day">按天查看</a>
				</li>
				<li><a href="#month">按月查看</a></li>
				<li><a href="#season">按季查看</a></li>
			</ul>
			
		</fieldset>
		<fieldset class="block-y">
			<dl class="dl-horizontal">
			    <dt>基础指标:</dt>
			    <dd>
			    	<ul class="show-item">
						<li name="index" class="btn btn-black btn-small" value="pv" style="background-color: #5BC0DE;" >pv</li>
						<li name="index" class="btn btn-black btn-small" value="charge" style="background-color: #5BC0DE;">收入</li>
						<li name="index" class="btn btn-black btn-small" value="click" >点击</li>
						<li name="index" class="btn btn-black btn-small" value="shows"  style="background-color: #5BC0DE;">展现</li>
						<li name="index" class="btn btn-black btn-small " value="epv" >epv</li>
						<li name="index" class="btn btn-black btn-small" value="cash" >现金收入</li>
					</ul>
			    </dd>
			    <dt>衍生指标:</dt>
			    <dd>
			    	<ul class="show-item">
						<li name="index" class="btn btn-black btn-small" value="cpm1" label="CPM1" style="background-color: #5BC0DE;">CPM1</li>
						<li name="index" class="btn btn-black btn-small" value="acp" label="ACP" checked="checked">ACP</li>
						<li name="index" class="btn btn-black btn-small" value="ctr1" label="CTR2">CTR2</li>
						<li name="index" class="btn btn-black btn-small" value="pvr" label="PVR">PVR</li>
						<li name="index" class="btn btn-black btn-small" value="asn" label="ASN">ASN</li>
						<li name="index" class="btn btn-black btn-small" value="pvr*asn" label="PVR*ASN">PVR*ASN</li>
						<li name="index" class="btn btn-black btn-small" value="cpm2" label="CPM2">CPM2</li>
						<li name="index" class="btn btn-black btn-small" value="cpm3" label="CPM3">CPM3</li>
						<li name="index" class="btn btn-black btn-small" value="ctr1" label="CTR1">CTR1</li>
						<li name="index" class="btn btn-black btn-small" value="ctr3" label="CTR3">CTR3</li>
					</ul>
			    </dd>
			</dl>
		</fieldset>
		
		
	</div>
	<fieldset class="block-y">
		<?php if (isset($opt['groups'])) {?>
		<dl class="dl-horizontal">
			<dt>维度：</dt>
			<dd>			    	
				<?php foreach ($opt['groups'] as $group) {  ?>
				<div class="btn-group">
					<a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">
						<?php echo Yii::app()->params["sys_param"]["groups"][$group]['name']."(分组)";?>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" id="dropdown_<?php echo $group; ?>">
						<li><a href="#">全部</a></li>
						<li class="divider"></li>
					</ul>
				</div>	
				<?php } ?>									
			</dd>
		</dl>
		<?php } ?>
		<div class="bottom-border"></div>	
	</fieldset>	

	<div   style="display:table;content: ''; width:100%">	
		
		<div class="span8" style="  float: left;" >
			<span>图例：</span>			    
			<div id="lengends" >
				
			</div>
		</div>
	
		<div class="span4" style="  float: left;">
			<div class="lengends text-right" >
				<select name="">
					<option>指标绝对值</option>
					<option>日环比</option>
					<option>周同比</option>
					<option>最近七天均值</option>
					<option>最近七天对比之前其七天</option>
				</select>
			</div>
		</div>
	</div>
	<div id="chart" ></div>
	<div class="bottom-border"></div>
	
	<div>
		<table class="table table-condensed table-bordered table-striped sortable">
			<thead>
				<tr>
					<th>
						编号
					</th>
					<th>
						产品
					</th>
					<th>
						交付时间
					</th>
					<th>
						状态
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						1
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						01/04/2012
					</td>
					<td>
						Default
					</td>
				</tr>
				<tr>
					<td>
						2
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						01/04/2012
					</td>
					<td>
						Approved
					</td>
				</tr>
				<tr>
					<td>
						2
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						02/04/2012
					</td>
					<td>
						Declined
					</td>
				</tr>
				<tr>
					<td>
						3
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						03/04/2012
					</td>
					<td>
						Pending
					</td>
				</tr>
				<tr>
					<td>
						4
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						04/04/2012
					</td>
					<td>
						Call in to confirm
					</td>
				</tr>
			</tbody>
		</table>

	</div>

</div>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/page/web_page.js"></script>