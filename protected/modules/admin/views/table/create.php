<div class="form form-horizontal">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'conf-table-form',
		'enableAjaxValidation'=>false,
		)); ?>
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">创建表路由</h4>
				</div>
				<div class="modal-body">
					<?php echo $form->errorSummary($model); ?>
					<div class="form-group">
						<?php echo $form->labelEx($model,'type',array("class"=>"col-lg-2 control-label")); ?>
						<div class="col-lg-10">
							<?php echo $form->dropDownList($model,'type',
								Yii::app()->params["asea_param"]["TABLE_TYPE"],array('class'=>'form-control m-bot15')); ?>
						</div>
					</div>
					<div class="form-group">
						<?php echo $form->labelEx($model,'table_name',array("class"=>"col-lg-2 control-label")); ?>
						<div class="col-lg-10">
							<?php echo $form->textField($model,'table_name',
								array('class'=>'form-control','size'=>60,'maxlength'=>256,'placeholder'=>'维度2'));
							 ?>
						</div>
					</div>
					<div class="form-group">
						<?php echo $form->labelEx($model,'first_index',array("class"=>"col-lg-2 control-label")); ?>
						<div class="col-lg-10">
							<?php echo $form->dropDownList($model,'first_index',
								Yii::app()->params["asea_param"]["TABLE_SELECT"],array('class'=>'form-control m-bot15')); ?>
						</div>
					</div>
					<div class="form-group">
						<?php echo $form->labelEx($model,'second_index',array("class"=>"col-lg-2 control-label")); ?>
						<div class="col-lg-10">
							<?php echo $form->dropDownList($model,'second_index',
								Yii::app()->params["asea_param"]["TABLE_SELECT"],array('class'=>'form-control m-bot15')); ?>
						</div>
					</div>
					<div class="form-group">
						<?php echo $form->labelEx($model,'columns',array("class"=>"col-lg-2 control-label")); ?>
						<div class="col-lg-10">
							<?php echo $form->dropDownList($model,'columns',
								Yii::app()->params["asea_param"]["TABLE_INDEX"],array('class'=>'form-control m-bot15')); ?>
						</div>
					</div>
					
					<div class="form-group">
						<?php echo $form->labelEx($model,'table_desc',array("class"=>"col-lg-2 control-label")); ?>
						<div class="col-lg-10">
							<?php echo $form->textField($model,'table_desc',
								array('class'=>'form-control','size'=>64,'maxlength'=>256,'placeholder'=>'维度2'));
							 ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					
					<?php echo CHtml::submitButton($model->isNewRecord ? '新增保存' : '保存修改',array('class'=>'btn btn-primary')); ?>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	<?php $this->endWidget(); ?>
</div><!-- form -->