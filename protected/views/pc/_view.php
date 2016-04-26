<?php
/* @var $this PcController */
/* @var $data Pc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ololo')); ?>:</b>
	<?php echo CHtml::encode($data->ololo); ?>
	<br />


</div>