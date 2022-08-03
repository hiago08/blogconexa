<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>'List' . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>'Create' . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>'Update' . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_post)),
	array('label'=>'Delete' . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_post), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage' . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo 'View' . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id_post',
array(
			'name' => '',
			'type' => 'raw',
			'value' => $model-> !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->)), array('/view', 'id' => GxActiveRecord::extractPkValue($model->, true))) : null,
			),
array(
			'name' => '',
			'type' => 'raw',
			'value' => $model-> !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->)), array('/view', 'id' => GxActiveRecord::extractPkValue($model->, true))) : null,
			),
'titulo',
'texto',
'data',
	),
)); ?>

