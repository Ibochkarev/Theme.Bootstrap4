<?php

/**
 * The home manager controller for Theme.Bootstrap4.
 *
 */
class Theme.Bootstrap4HomeManagerController extends Theme.Bootstrap4MainController {
	/* @var Theme.Bootstrap4 $Theme.Bootstrap4 */
	public $Theme.Bootstrap4;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('theme.bootstrap4');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->Theme.Bootstrap4->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->Theme.Bootstrap4->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->Theme.Bootstrap4->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->Theme.Bootstrap4->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->Theme.Bootstrap4->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->Theme.Bootstrap4->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->Theme.Bootstrap4->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "theme.bootstrap4-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->Theme.Bootstrap4->config['templatesPath'] . 'template.home.tpl';
	}
}