<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php echo CHtml::Button('Get JSON data', array('class'=>'btn btn-default', 'data-toggle'=>'modal', 'data-target'=>'#ChampJson', 'id'=>'JSON')); ?> 
<?php echo CHtml::link('Simulator', array('/champions/simulation'), array('class'=>'btn btn-default')); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'id'=>'champions-grid',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'separator'=>'',
	'enablePagination'=>false,
	'summaryText'=>'{count} Champions'
)); ?>

<!-- Modal -->
<div class="modal fade" id="ChampJson" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Champions JSON Data</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		$('#JSON').click(function()
		{
			$.get('champions/json', function(data)
			{
				$('.modal-body').text(data);
			});
		});
	});
</script>