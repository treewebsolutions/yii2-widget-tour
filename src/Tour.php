<?php

namespace tws\widgets\tour;

use yii\base\Widget;
use yii\helpers\Json;
use yii\web\JsExpression;

class Tour extends Widget
{
	/**
	 * Auto starts the tutorial
	 * @var bool
	 */
	public $autoStart = false;

	/**
	 * Indicates that this Tour shoould have a start trigger control
	 * @var bool|array
	 */
	public $trigger = false;

	/**
	 * Client (JS) Options
	 */
	public $clientOptions = [];

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
		// Load default template if the client option is not set
		if (!$this->clientOptions['template']) {
			$this->clientOptions['template'] = $this->render('_template');
		}
		// Register assets
		$this->registerAssets();
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		return $this->render('index');
	}

	/**
	 * Register assets
	 */
	public function registerAssets()
	{
		// Get the view
		$view = $this->getView();
		// Prepare the selector
		$selector = $this->id;
		// Register assets
		TourAsset::register($view);
		// Build options
		$options = $this->buildClientOptions();
		// Build client script
		$js = "window.{$selector} = new Tour({$options});";
		// Init the client plugin
		$js .= "{$selector}.init();";
		// If should auto start
		if ($this->autoStart) {
			$js .= "{$selector}.start();";
		}
		// Register client script
		$view->registerJs($js);
	}

	/**
	 * Build Client Options
	 * @return string
	 */
	public function buildClientOptions()
	{
		// Client options
		$clientOptions = $this->clientOptions;
		// Set tour name as the id of the widget
		$clientOptions['name'] = $this->id;
		// Return the options as JSON
		return Json::encode($clientOptions);
	}
}
