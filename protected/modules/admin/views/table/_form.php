<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conf-table-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_index'); ?>
		<?php echo $form->textField($model,'first_index',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'first_index'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'second_index'); ?>
		<?php echo $form->textField($model,'second_index',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'second_index'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'columns'); ?>
		<?php echo $form->textField($model,'columns',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'columns'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'table_name'); ?>
		<?php echo $form->textField($model,'table_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'table_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'table_desc'); ?>
		<?php echo $form->textField($model,'table_desc',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'table_desc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->