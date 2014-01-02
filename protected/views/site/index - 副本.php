<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
				<div class="left-nav">
					<div class="panel panel-default">
              				<form class="form-inline" method="post" action="">

              					<div class="panel-heading">
	              					选择日期：
	              					<div class="controls input-prepend input-append date form_datetime" data-date="" data-date-format="yyyy-mm-dd" 
	              							data-link-field="dtp_input1">
					                    <span class="add-on next"><i class="icon-chevron-left"></i></span>
										<input id="date-default" class="input-small" size="10" type="text" value="<?php echo date('Y-m-d',strtotime('-1 day')); ?>" >

					            		<span class="add-on"><i class="icon-chevron-right"></i></span>
										<span class="add-on"><i class="icon-th"></i></span>
										
					                </div>
					       
									<input type="hidden" id="dtp_input1" value="" /><br/>
            					</div>
            					<div class="bottom-border"></div>
            					<div class="caption">
            						<div class="span6">
            							<label class="radio">
											<input type="radio" name="filter" id="filter1" value="option1" checked>
											过滤
										</label>
            						</div>	
            						<div class="span6">
            							<label class="radio">
											<input type="radio" name="filter" id="filter2" value="option1" >
											未过滤
										</label>
            						</div>	
            					</div>
            					<div class="caption">
            						<div class="span6">
            							<label class="radio">
											<input type="radio" name="trade" id="trade1" value="option1" >
											词行业
										</label>
            						</div>	
            						<div class="span6">
            							<label class="radio">
											<input type="radio" name="trade" id="trade2" value="option1" checked>
											客户行业
										</label>
            						</div>	
            					</div>
            					<div class="caption">
            						<div class="span6">
            							<label class="radio">
											<input type="radio" name="inner" id="inner1" value="option1" >
											含内部客户
										</label>
            						</div>	
            						<div class="span6">
            							<label class="radio">
											<input type="radio" name="inner" id="inner2" value="option1" checked>
											不含内部客户
										</label>
            						</div>	
            					</div>
            					<div class="bottom-border"></div>
            					<div class="caption left-20">
            						<table class="table">
										<thead>
											<tr>
												<th class="part3 border-dashed-right">
													
												</th>
												<th class="border-dashed-right">
													筛选器
												</th>
												<th class="part3">
													分组器
												</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="border-dashed-top border-dashed-right">
													<p class="text-center">行业</p>
												</td>
												<td  class="border-dashed-top border-dashed-right">
													<multiselect multiple="multiple" size="5" id="select1">
														<optgroup label="教育" groupid="groupOne1" value="1000">
															<option value="100001">中小学培训</option>
															<option value="100002">外语培训</option>
															<option value="100003">职业培训</option>
															<optgroup label="家教" groupid="groupTwo1"  value="10001">
																<option value="100010">英语</option>
																<option value="100011">数学</option>
																<option value="100012">语文</option>
															</optgroup>
														</optgroup>
														<optgroup label="教育1" groupid="groupOne2" value="1001">
															<option value="100101">中小学培训1</option>
															<option value="100102">外语培训1</option>
															<option value="100103">职业培训1</option>
															<optgroup label="家教" groupid="groupTwo2"  value="10011">
																<option value="100110">英语1</option>
																<option value="100111">数学1</option>
																<option value="100112">语文13232323说的是对的</option>
															</optgroup>
														</optgroup>
													</multiselect>
												</td>
												<td  class="border-dashed-top">
													<div class="make-switch  switch-large">
														<input type="checkbox">
													</div>
												</td>
											</tr>
											<tr>
												<td class="border-dashed-top border-dashed-right"> 
													<p class="text-center">频道</p>
												</td>
												<td class="border-dashed-top border-dashed-right">
													 
													<multiselect multiple="multiple" size="5" id="select2">
														<optgroup label="教育" groupid="groupOne3" value="1000">
															<option value="100001">中小学培训</option>
															<option value="100002">外语培训</option>
															<option value="100003">职业培训</option>
															<optgroup label="家教" groupid="groupTwo3"  value="10001">
																<option value="100010">英语</option>
																<option value="100011">数学</option>
																<option value="100012">语文</option>
															</optgroup>
														</optgroup>
														<optgroup label="教育1" groupid="groupOne4" value="1001">
															<option value="100101">中小学培训1</option>
															<option value="100102">外语培训1</option>
															<option value="100103">职业培训1</option>
															<optgroup label="家教" groupid="groupTwo4"  value="10011">
																<option value="100110">英语1</option>
																<option value="100111">数学1</option>
																<option value="100112">语文13232323说的是对的</option>
															</optgroup>
														</optgroup>
													</multiselect>
												</td>
												<td class="border-dashed-top">
													<div class="make-switch  switch-large">
														<input type="checkbox">
													</div>
												</td>
											</tr>
											<tr>
												<td class="border-dashed-top border-dashed-right">
													<p class="text-center">运营单位</p>
												</td>
												<td class="border-dashed-top border-dashed-right">
													 <button class="btn btn-large" type="button">不过滤</button>
												</td>
												<td class="border-dashed-top">
													<div class="make-switch  switch-large">
														<input type="checkbox">
													</div>
												</td>
											</tr>
											<tr>
												<td class="border-dashed-top border-dashed-right">
													<p class="text-center">流量来源</p>
												</td>
												<td class="border-dashed-top border-dashed-right">
													 <button class="btn btn-large" type="button">不过滤</button>
												</td>
												<td class="border-dashed-top">
													<div class="make-switch  switch-large">
														<input type="checkbox">
													</div>
												</td>
											</tr>
											<tr>
												<td class="border-dashed-top border-dashed-right">
													<p class="text-center">浏览器</p>
												</td>
												<td class="border-dashed-top border-dashed-right">
													 <button class="btn btn-large" type="button">不过滤</button>
												</td>
												<td class="border-dashed-top">
													<div class="make-switch  switch-large">
														<input type="checkbox">
													</div>
												</td>
											</tr>
											<tr>
												<td class="border-dashed-top border-dashed-right">
													<p class="text-center">地域</p>
												</td>
												<td class="border-dashed-top border-dashed-right">
													 <button class="btn btn-large" type="button">不过滤</button>
												</td>
												<td class="border-dashed-top">
													<div class="make-switch  switch-large">
														<input type="checkbox">
													</div>
												</td>
											</tr>
										</tbody>
									</table>
            					</div>
            					<div class="bottom-border"></div>



								<fieldset class="text-center">
									
									<button class="btn" contenteditable="true" type="reset">重置</button>
									<button class="btn btn-primary" contenteditable="true" type="submit">提交</button>
								</fieldset>
								
		     
		    					 
							</form>
          			</div>
						

				</div>
				<div class="left-main">
					<div id="main" class="main">
						<div class="page-header">
							<h1>
								页标题范例 <small>此处编写页标题</small>
							</h1>
						</div>
						eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeewwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
						
						<div id="radioset1">
		                  <input type="radio" id="radio1" name="radio" /><label for="radio1">Choice 1</label>
		                  <input type="radio" id="radio2" name="radio" checked="checked" /><label for="radio2">Choice 2</label>
		                  <input type="radio" id="radio3" name="radio" /><label for="radio3">Choice 3</label>
		                </div>
                        
						<?php $this->widget('ext.amCharts.AmChartsWidget',array('id'=>'test','url'=>'http://www.baidu.com')); ?> 




							


			

	

		

		
		
     
    
			















					</div>
				</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	//下拉菜单
	$(function(){
		$("#select1").multiselect({});
		$("#select2").multiselect({});
		$("#select33").multiselect({});
		$('#radioset1').buttonset();
		alert(22);

	});
	//日历控件初始化
	$(".form_datetime").datetimepicker({
		format:'yyyy-mm-dd',
		language:  'zh-CN',
		todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		minView:2,
		pickerPosition: "bottom-left",
		showMeridian: 1
	});

</script>





