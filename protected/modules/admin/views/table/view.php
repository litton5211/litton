<?php
$this->breadcrumbs=array(
	'Conf Tables'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ConfTable', 'url'=>array('index')),
	array('label'=>'Create ConfTable', 'url'=>array('create')),
	array('label'=>'Update ConfTable', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ConfTable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ConfTable', 'url'=>array('admin')),
);
?>

<h1>View ConfTable #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'first_index',
		'second_index',
		'columns',
		'table_name',
		'table_desc',
	),
)); ?>
