<?php
$pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']);

$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Create Page', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('page-grid', {
		data: $(this).serialize()
	});
	return false;
});
$('#reset-button').live('click',function(){
            this.form.reset();
            $(this.form).submit();
            return false;
  	});
");
?>

<div class="content-module">
  <div class="content-module-heading cf">
    <h3 class="fl">Manage Pages</h3>
    <span class="fr expand-collapse-text">Click to collapse</span> <span class="fr expand-collapse-text initial-expand">Click to expand</span> </div>
  <!-- end content-module-heading -->
  
  <div class="content-module-main">
    <p> You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done. </p>
    <?php echo CHtml::link('Add','create',array('class'=>'button round blue image-right ic-add text-upper','style'=>'float:right')); ?> <br/>
    <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
    <div class="search-form" style="display:none">
      <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
    </div>
    <!-- search-form -->
    
    <?php $this->widget('ext.selgridview.SelGridView', array(
	'id'=>'page-grid',
	'dataProvider'=>$model->search(),
	'ajaxUpdate'=>true,
	'selectableRows' => 2,
	'filter'=>$model,
	'pager' => array('cssFile' => Yii::app()->themeManager->baseUrl . '/css/cgridview/cgridview.css'),
	'cssFile' => Yii::app()->themeManager->baseUrl . '/css/cgridview/cgridview.css',
	'columns'=>array(
		array(
                'class' => 'CCheckBoxColumn',
             ),
		'id',
		'title',
		'description',
		array(
              'header'=>'Actions',
              'class'=>'CButtonColumn',
              'viewButtonImageUrl' => Yii::app()->themeManager->baseUrl . '/images/cgridview/' . 'view.png',
	          'updateButtonImageUrl' => Yii::app()->themeManager->baseUrl . '/images/cgridview/' . 'update.png',
	          'deleteButtonImageUrl' => Yii::app()->themeManager->baseUrl . '/images/cgridview/' . 'delete.png',
		),
	),
)); ?>
    <div style="font-size:0.75em;" >
      <label for="table-select-actions">With selected:</label>
      <select id="table-select-actions" class="round dropdowncss">
        <option value="">Select Action</option>
        <option value="Delete">Delete</option>
        <option value="Enable">Enable</option>
        <option value="Disable">Disable</option>
        <option value="Export">Export</option>
      </select>
      
      <!--<a class="round button blue text-upper small-button" href="#">Apply to selected</a>--> 
      
      <?php echo CHtml::ajaxLink("Apply to selected",
 $this->createUrl('page/multipleoperation'),
 array("type" => "post",
 "data" => "js:{operation:$('#table-select-actions').val() ,chk:$('#page-grid').selGridView('getAllSelection')}",
"success" => "js:function(data) { $('#page-grid').yiiGridView.update('page-grid');$('.select-on-check').attr('checked',false); 
 }"),array('class'=>'round button blue text-upper small-button',
    "onclick"=>"if($('#page-grid').selGridView('getAllSelection')=='') {
        alert('Please select the record(s) to perform Action');return} 
        if($('#table-select-actions').val()==''){
        alert('Please select the Action');return} 
        if (!confirm('Are you sure?\\r\\nYou want to perform '+$('#table-select-actions').val()+' action.')){return}")); ?>
      <?php Yii::app()->clientScript->registerScript('initPageSize',<<<EOD
    $('.change-pagesize').live('change', function() {
        $.fn.yiiGridView.update('page-grid',{ data:{ pageSize: $(this).val() }})
    });
EOD
,CClientScript::POS_READY); ?>
      <div style="float:right;"> Show Records Per Page : <?php echo CHtml::dropDownList('pageSize',$pageSize,array(5=>5,10=>10,20=>20,50=>50,100=>100),
                array('class'=>'change-pagesize round dropdowncss'))?> </div>
    </div>
  </div>
</div>