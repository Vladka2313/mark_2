<?php
/* @var $this PcController */
/* @var $model Pc */

$this->breadcrumbs=array(
	'Pcs'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Pc', 'url'=>array('index')),
	array('label'=>'Create Pc', 'url'=>array('create')),
	array('label'=>'Update Pc', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Pc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pc', 'url'=>array('admin')),
);
?>

<h1>View Pc #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'ololo',
	),
)); ?>
