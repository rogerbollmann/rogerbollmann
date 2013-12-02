<?php
/* @var $this EpisodenController */
/* @var $data Episoden */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('NRTOTAL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->NRTOTAL), array('view', 'id'=>$data->NRTOTAL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NRSTAFFEL')); ?>:</b>
	<?php echo CHtml::encode($data->NRSTAFFEL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEUTSCHERTITEL')); ?>:</b>
	<?php echo CHtml::encode($data->DEUTSCHERTITEL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ORIGINAL­TITEL')); ?>:</b>
	<?php echo CHtml::encode($data->ORIGINAL­TITEL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ERSTAUS­STRAHLUNGUSA')); ?>:</b>
	<?php echo CHtml::encode($data->ERSTAUS­STRAHLUNGUSA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D')); ?>:</b>
	<?php echo CHtml::encode($data->DEUTSCH­SPRACHIGEERSTAUS­STRAHLUNG­D); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REGIE')); ?>:</b>
	<?php echo CHtml::encode($data->REGIE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('DREHBUCH')); ?>:</b>
	<?php echo CHtml::encode($data->DREHBUCH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USQUOTEN')); ?>:</b>
	<?php echo CHtml::encode($data->USQUOTEN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('INHALT')); ?>:</b>
	<?php echo CHtml::encode($data->INHALT); ?>
	<br />

	*/ ?>

</div>