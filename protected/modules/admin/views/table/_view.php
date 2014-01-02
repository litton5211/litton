<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_index')); ?>:</b>
	<?php echo CHtml::encode($data->first_index); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('second_index')); ?>:</b>
	<?php echo CHtml::encode($data->second_index); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('columns')); ?>:</b>
	<?php echo CHtml::encode($data->columns); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('table_name')); ?>:</b>
	<?php echo CHtml::encode($data->table_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('table_desc')); ?>:</b>
	<?php echo CHtml::encode($data->table_desc); ?>
	<br />


</div>