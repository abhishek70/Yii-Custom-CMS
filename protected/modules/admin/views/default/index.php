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
<style type="text/css">
.dashIcon {
    background-color: #F9F9F9;
    border: 1px solid #CCCCCC;
    float: left;
    margin-bottom: 10px;
    padding-top: 8px;
    text-align: center;
}
.span-3 {
    width: 110px;
}
.dashIconText {
    padding-bottom: 10px;
    padding-top: 5px;
	 font-size:12px;
}

</style>
<?php $this->pageTitle=Yii::app()->name . ' - Dashboard'; ?>
			
			<div class="side-content fr">
			
				<div class="content-module">
				
					<div class="content-module-heading cf">
					
						<h3 class="fl">Dashboard</h3>
						<span class="fr expand-collapse-text">Click to collapse</span>
						<span class="fr expand-collapse-text initial-expand">Click to expand</span>
					
					</div> <!-- end content-module-heading -->
					
					
					<div class="content-module-main">
					&nbsp;
						<div class="dashIcon span-3">
        					<a href="#"><img alt="Customers" src="<?php echo Yii::app()->themeManager->baseUrl; ?>/images/icon-people.png"></a>
        				<div class="dashIconText"><a href="#">Users</a></div>
    					</div>
					
					</div> <!-- end content-module-main -->
				
				</div> <!-- end content-module -->
		
			</div> <!-- end side-content -->