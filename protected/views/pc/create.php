<?php
/* @var $this PcController */
/* @var $model Pc */

$this->breadcrumbs=array(
	'Pcs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pc', 'url'=>array('index')),
	array('label'=>'Manage Pc', 'url'=>array('admin')),
);
?>

<h1>Create Pc</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>