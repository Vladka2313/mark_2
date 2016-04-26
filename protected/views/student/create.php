<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Учні'=>array('index'),
	'Новий учень',
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>Новий учень</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>