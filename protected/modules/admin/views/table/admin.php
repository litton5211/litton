


<h1>查询表路由</h1>

<a class="btn btn-success" data-toggle="modal" href="<?php echo Yii::app()->createURL('admin/table/create');?>" data-target="#myModal"><i class="glyphicon glyphicon-check"></i>  新增</a>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  加载中...
</div><!-- /.modal -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sample_1',
	'dataProvider'=>$model->search(),
	'itemsCssClass'=>'table table-striped border-top',
	'columns'=>array(
		array(
			'selectableRows' => 2,
			'class' => 'CCheckBoxColumn',
			'headerHtmlOptions' => array('width'=>'8px','class'=>'dsd'),
			'checkBoxHtmlOptions' => array('name' => 'selectdel[]'),
			),
		
		'type',
		'first_index',
		'second_index',
		'columns',
		'table_name',
		'table_desc',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script type="text/javascript">
	$("a[data-toggle=modal]").click(function(){
	    var target = $(this).attr('data-target');
	    var url = $(this).attr('href');
	    $(target).load(url);
	});
</script>