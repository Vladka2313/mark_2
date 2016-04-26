<?php
/* @var $this PcController */
/* @var $model Pc */

$this->breadcrumbs=array(
	'Pcs'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pc', 'url'=>array('index')),
	array('label'=>'Create Pc', 'url'=>array('create')),
	array('label'=>'View Pc', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Pc', 'url'=>array('admin')),
);
?>

<h1>Update Pc <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>