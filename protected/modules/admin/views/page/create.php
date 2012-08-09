<?php
$this->breadcrumbs=array(
	'Pages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<div class="content-module">

<div class="content-module-heading cf">
					
    <h3 class="fl">Create Page</h3>
    <span class="fr expand-collapse-text">Click to collapse</span>
    <span class="fr expand-collapse-text initial-expand">Click to expand</span>

</div> <!-- end content-module-heading -->
<div class="content-module-main">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>