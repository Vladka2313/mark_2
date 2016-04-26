<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'Вчителі'=>array('index'),
	'Новий вчитель',
);

$this->menu=array(
	array('label'=>'List Teacher', 'url'=>array('index')),
	array('label'=>'Manage Teacher', 'url'=>array('admin')),
);
?>

<h1>Новий вчитель</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>