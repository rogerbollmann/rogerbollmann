<?php
/* @var $this EpisodenController */
/* @var $model Episoden */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'episoden-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NRTOTAL'); ?>
		<?php echo $form->textField($model,'NRTOTAL'); ?>
		<?php echo $form->error($model,'NRTOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NRSTAFFEL'); ?>
		<?php echo $form->textField($model,'NRSTAFFEL'); ?>
		<?php echo $form->error($model,'NRSTAFFEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DEUTSCHERTITEL'); ?>
		<?php echo $form->textField($model,'DEUTSCHERTITEL',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DEUTSCHERTITEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ORIGINAL­TITEL'); ?>
		<?php echo $form->textField($model,'ORIGINAL­TITEL',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ORIGINAL­TITEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ERSTAUS­STRAHLUNGUSA'); ?>
		<?php echo $form->textField($model,'ERSTAUS­STRAHLUNGUSA',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ERSTAUS­STRAHLUNGUSA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D'); ?>
		<?php echo $form->textField($model,'DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REGIE'); ?>
		<?php echo $form->textField($model,'REGIE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'REGIE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DREHBUCH'); ?>
		<?php echo $form->textField($model,'DREHBUCH',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DREHBUCH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USQUOTEN'); ?>
		<?php echo $form->textField($model,'USQUOTEN',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'USQUOTEN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INHALT'); ?>
		<?php echo $form->textArea($model,'INHALT',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'INHALT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->