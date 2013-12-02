<?php
/* @var $this EpisodenController */
/* @var $model Episoden */

$this->breadcrumbs=array(
	'Episodens'=>array('index'),
	$model->NRTOTAL,
);

$this->menu=array(
	array('label'=>'List Episoden', 'url'=>array('index')),
	array('label'=>'Create Episoden', 'url'=>array('create')),
	array('label'=>'Update Episoden', 'url'=>array('update', 'id'=>$model->NRTOTAL)),
	array('label'=>'Delete Episoden', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NRTOTAL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Episoden', 'url'=>array('admin')),
);
?>

<h1>View Episoden #<?php echo $model->NRTOTAL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NRTOTAL',
		'NRSTAFFEL',
		'DEUTSCHERTITEL',
		'ORIGINALTITEL',
		'ERSTAUSSTRAHLUNGUSA',
		'DEUTSCHSPRACHIGEERSTAUSSTRAHLUNGD',
		'REGIE',
		'DREHBUCH',
		'USQUOTEN',
		'INHALT',
	),
)); ?>
