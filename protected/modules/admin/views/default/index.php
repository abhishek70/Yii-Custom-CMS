<!--<?php
/*$this->breadcrumbs=array(
	$this->module->id,
);*/
?>
<h1><?php //echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php //echo $this->action->id; ?>".
The action belongs to the controller "<?php //echo get_class($this); ?>"
in the "<?php //echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php //echo __FILE__; ?></tt>
</p>-->

<?php $this->pageTitle=Yii::app()->name . ' - Dashboard'; ?>
			
				<div class="content-module">
				
					<div class="content-module-heading cf">
					
						<h3 class="fl">Dashboard</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>
					
					</div> <!-- end content-module-heading -->
					
					
					<div class="content-module-main">
						<div class="dashIcon span-3">
                        <?php $userimg='<img alt="Mange Users" src="'.Yii::app()->themeManager->baseUrl.'/images/icon-people.png" title="Manage Users">'; 
						echo CHtml::link($userimg,array('user/index'));
						?>
        				
        				<div class="dashIconText"><?php echo CHtml::link('Manage Users',array('user/index')); ?></div>
    				    </div>
                        
                        <div class="dashIcon span-3" style="margin-left:20px; display:inline;">
                        <?php $pageimg='<img alt="Mange Pages" src="'.Yii::app()->themeManager->baseUrl.'/images/icon-article.png" title="Manage Pages">'; 
						echo CHtml::link($pageimg,array('page/index'));
						?>
        				
        				<div class="dashIconText"><?php echo CHtml::link('Manage Pages',array('page/index')); ?></div>
    				    </div>
			
					</div> <!-- end content-module-main -->
				
				</div> <!-- end content-module -->