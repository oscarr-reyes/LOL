<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'id'=>'champions-grid',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'separator'=>'',
	'enablePagination'=>false,
	'summaryText'=>'{count} Champions'
)); ?>