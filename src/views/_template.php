<?php
/* @var $this yii\web\View */
/* @var $widget tws\widgets\tour\Tour*/

use yii\helpers\Html;

$widget = $this->context;
?>

<div class="popover tour">
	<div class="arrow"></div>
	<div class="popover-header">
		<h3 class="popover-title"></h3>
		<button type="button" class="popover-close" data-role="end" title="<?= Yii::t('common', 'Close the guide') ?>">&times;</button>
	</div>

	<div class="popover-content"></div>

	<div class="popover-navigation">
		<button type="button" class="tour-prev" data-role="prev">&laquo; <?= Yii::t('common', 'Back') ?></button>
		<button type="button" class="tour-next" data-role="next"><?= Yii::t('common', 'Forward') ?> &raquo;</button>
		<button type="button" class="tour-end" data-role="end"><?= Yii::t('common', 'Close') ?> &times;</button>
	</div>
</div>
