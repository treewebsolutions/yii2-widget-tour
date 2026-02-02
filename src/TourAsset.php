<?php

namespace tws\widgets\tour;

use yii\web\AssetBundle;

class TourAsset extends AssetBundle
{
	public $sourcePath = '@npm/bootstrap-tour/build';

	public $css = [
		'css/bootstrap-tour.min.css'
	];

	public $js = [
		'js/bootstrap-tour.min.js'
	];

	public $depends = [
		'yii\bootstrap\BootstrapPluginAsset',
	];
}
