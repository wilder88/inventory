<?php
$this->breadcrumbs=array(
	'Goods Builds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->title= 'Update Goods Components';
$this->menu=array(
	array('label'=>'Create Goods Build', 'url'=>array('create')),
	array('label'=>'View Goods Build', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Goods Build', 'url'=>array('index')),
);
?>

    <!-- #PORTLETS START -->
    <div id="portlets">
    <!-- FIRST SORTABLE COLUMN START -->
      <div class="column" id="left">
      <!--THIS IS A PORTLET-->
        <div class="portlet">
		<div class="portlet-header">Update Goods Components <?php echo $model->id; ?></div>
		<div class="portlet-content">
			<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
		</div>
        </div>
      </div>
      <!-- FIRST SORTABLE COLUMN END -->
      <!-- SECOND SORTABLE COLUMN START -->
      <div class="column">

                           
    </div>
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
    <div class="portlet">
        <div class="portlet-header fixed"><img src="<?php echo Yii::app()->request->baseUrl."/assets/default/"; ?>images/icons/build.gif" alt="Latest Registered Users" /> Table List Goods Components</div>
		<div class="portlet-content nopadding">
        <form action="#" method="post">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'goods-build-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'columns'=>array(
					array(
			            	'header'=>'No',
			            	'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
							'htmlOptions'=>array(
								'valign'=>'top',
								'width'=>'2px'
							)
			        ),
					array(
							'header'=>'Goods',
							'name'=>'goods_id',
							'value'=>'$data->goods->goods_name',
						),
					array(
							'header'=>'Components',
							'name'=>'components_id',
							'value'=>'$data->components->component_name',
						),
					'component_qty',
				array(
						'class'=>'CButtonColumn',
						'buttons'=>array(
							'create' => array(
								'label'=>'Create Component',
								'url'=>'Yii::app()->createUrl("/master/goods/components", array("id"=>$data->goods_id))',
								'imageUrl'=>Yii::app()->request->baseUrl.'/assets/6c040e3/gridview/create.png',
								)
							),
						'template'=>'{view}{update}{delete}{create}'
						),
					),
			)); ?>
        </form>
		</div>
      </div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    