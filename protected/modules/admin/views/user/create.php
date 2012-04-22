<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<div class="content-module">

<div class="content-module-heading cf">
					
    <h3 class="fl">Create User</h3>
    <span class="fr expand-collapse-text">Click to collapse</span>
    <span class="fr expand-collapse-text initial-expand">Click to expand</span>

</div> <!-- end content-module-heading -->
<div class="content-module-main">
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
</div>