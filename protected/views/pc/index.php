<?php
/* @var $this PcController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pcs',
);

$this->menu=array(
	array('label'=>'Create Pc', 'url'=>array('create')),
	array('label'=>'Manage Pc', 'url'=>array('admin')),
);
?>

<h1>Pcs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
