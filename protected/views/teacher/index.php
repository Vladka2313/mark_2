<?php
/* @var $this TeacherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Вчителі',
);

$this->menu=array(
	array('label'=>'Create Teacher', 'url'=>array('create')),
	array('label'=>'Manage Teacher', 'url'=>array('admin')),
);
?>


<h1>Вчителі</h1>

<?php 

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'question-grid',
    //'type' => array(CHtml::GRID_TYPE_CONDENSED),
    'dataProvider' => $dataProvider,
    //'filter' => $model,
    //'template' => "<div class=\"row-fluid\">{pager}</div>\n{items}\n<div class=\"row-fluid\">{pager}</div>",
    /*'pager' => array(
     'class' => 'bootstrap.widgets.TbPager',
     'maxButtonCount' => 10,
    ),*/
    'columns' => array(
    /* array(
      'name' => 'id',
      //'header' => '#',
      //'htmlOptions' => array('style' => 'width: 5%'),
     ),*/
     array(
      'name' => 'Last_name',
      //'htmlOptions' => array('style' => 'width: 85%'),
     ),
        array(
      'name' => 'Name',
      //'htmlOptions' => array('style' => 'width: 85%'),
     ),
        array(
      'name' => 'Category',
      //'htmlOptions' => array('style' => 'width: 85%'),
     ),  
        array(
      'name' => 'sex',
      //'htmlOptions' => array('style' => 'width: 85%'),
     ),
          array(
      'header' => 'task',
       'value' => function ($data)
        {
        if (isset($data->task)){
                 
        return $data->task->Task;
    
        }
        else return "";
        }
      //'htmlOptions' => array('style' => 'width: 85%'),
     ),  
      
     /*array(
      'header' => Yii::t('admin', 'actions'),
      'type' => 'raw',
      'value' => function($data)
      {
       echo '&nbsp;'; 
       echo TbHtml::button(Yii::t('admin', 'view'), array(
        'color' => TbHtml::BUTTON_COLOR_INVERSE,
        'size' => TbHtml::BUTTON_SIZE_MINI,
        'class' => 'action',
        'onclick' => 'javascript: document.location.href=\'' . Yii::app()->urlManager->createUrl('wordsEn/view', array('id' => $data->id)) . '\'',
       ));
       
       echo $delete = TbHtml::button(Yii::t('admin', 'delete'), array(
        'color' => TbHtml::BUTTON_COLOR_WARNING,
        'size' => TbHtml::BUTTON_SIZE_MINI,
        'class' => 'action',
        'onclick' => 'javascript: document.location.href=\'' . Yii::app()->urlManager->createUrl('wordsEn/delete', array('id' => $data->id)) . '\'',
       ));
      /*
       $n = 0;
       foreach($data->answers as $answer)
       {
        if(!QuestionAnswer::model()->findByAttributes(array('answer_id' => $answer->id), 'question_id != ' . $data->id))
         $n++;
       }
       
       echo $n ? TbHtml::tooltip($delete, 'javascript:void(o)', Yii::t('admin', 'delete-question-with-n', $n), array('placement' => TbHtml::TOOLTIP_PLACEMENT_RIGHT)) : $delete;
      },
      'htmlOptions' => array('style' => 'width: 140px;'),
     ),*/
    ),
             
  ));
echo Yii::app()->user->isGuest? "": chtml::link("Новий вчитель","/teacher/create")
        
        ?>


     
     