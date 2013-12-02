<?php
/* @var $this EpisodenController */
/* @var $model Episoden */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'NRTOTAL'); ?>
		<?php echo $form->textField($model,'NRTOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NRSTAFFEL'); ?>
		<?php echo $form->textField($model,'NRSTAFFEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DEUTSCHERTITEL'); ?>
		<?php echo $form->textField($model,'DEUTSCHERTITEL',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ORIGINAL­TITEL'); ?>
		<?php echo $form->textField($model,'ORIGINAL­TITEL',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ERSTAUS­STRAHLUNGUSA'); ?>
		<?php echo $form->textField($model,'ERSTAUS­STRAHLUNGUSA',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D'); ?>
		<?php echo $form->textField($model,'DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REGIE'); ?>
		<?php echo $form->textField($model,'REGIE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DREHBUCH'); ?>
		<?php echo $form->textField($model,'DREHBUCH',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USQUOTEN'); ?>
		<?php echo $form->textField($model,'USQUOTEN',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INHALT'); ?>
		<?php echo $form->textArea($model,'INHALT',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->