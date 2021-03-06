<?php
$this->breadcrumbs=array(
	'Expenses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Expense', 'url'=>array('index')),
	array('label'=>'Create Expense', 'url'=>array('create')),
	array('label'=>'Update Expense', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Expense', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Expense', 'url'=>array('admin')),
);
?>

<h1>View Expense #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
            'id',
            // user info
            array(
                'label' => 'User',
                'value' => $model->user->name
            ),
            array(
                'label' => 'Category',
                'value' => $model->category->name
            ),
            'expense_name',
            'quantity',
            'totalcost',
            'upfront',
            'balance',
            // is the expense paid?
            array(
                'label' => 'Paid',
                'value' => $model->paid ? "Yes" : "No"
            ),
            // convert dateline to a human readable one.
            array(
                'label' => 'Date',
                'value' => date("Y/m/d h:i a", $model->dateline)
            )
	),
)); ?>
