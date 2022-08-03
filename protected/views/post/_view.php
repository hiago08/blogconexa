<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_post')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_post), array('view', 'id' => $data->id_post)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('')); ?>:
	<?php echo GxHtml::encode(GxHtml::valueEx($data->)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('titulo')); ?>:
	<?php echo GxHtml::encode($data->titulo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('texto')); ?>:
	<?php echo GxHtml::encode($data->texto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data')); ?>:
	<?php echo GxHtml::encode($data->data); ?>
	<br />

</div>