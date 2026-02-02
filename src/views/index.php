<?php
/* @var $this yii\web\View */
/* @var $slides String */
/* @var $widget tws\widgets\tour\Tour */

$widget = $this->context;
$clientOptions = $widget->clientOptions;
?>

<?php if ($widget->trigger) : ?>
	<button type="button" class="tour-trigger <?= $widget->id . '-trigger' ?> <?= $widget->trigger['class'] ?>" title="<?= $widget->trigger['tooltip'] ?>" onclick="<?= "{$widget->id}.restart()" ?>">
		<?php if ($widget->trigger['icon']) : ?>
			<span class="<?= $widget->trigger['icon'] ?>"></span>
		<?php endif; ?>
		<?php if ($widget->trigger['title']) : ?>
			<span class="trigger-title"><?= $widget->trigger['title'] ?></span>
		<?php endif; ?>
	</button>
<?php endif; ?>
