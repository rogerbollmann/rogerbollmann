<?php
/* @var $this EpisodenController */
/* @var $model Episoden */

$this->breadcrumbs=array(
	'Episodens'=>array('index'),
	$model->NRTOTAL=>array('view','id'=>$model->NRTOTAL),
	'Update',
);

$this->menu=array(
	array('label'=>'List Episoden', 'url'=>array('index')),
	array('label'=>'Create Episoden', 'url'=>array('create')),
	array('label'=>'View Episoden', 'url'=>array('view', 'id'=>$model->NRTOTAL)),
	array('label'=>'Manage Episoden', 'url'=>array('admin')),
);
?>

<h1>Update Episoden <?php echo $model->NRTOTAL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>