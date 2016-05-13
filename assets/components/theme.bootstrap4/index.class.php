<?php

/**
 * Class Theme.Bootstrap4MainController
 */
abstract class Theme.Bootstrap4MainController extends modExtraManagerController {
	/** @var Theme.Bootstrap4 $Theme.Bootstrap4 */
	public $Theme.Bootstrap4;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('theme.bootstrap4_core_path', null, $this->modx->getOption('core_path') . 'components/theme.bootstrap4/');
		require_once $corePath . 'model/theme.bootstrap4/theme.bootstrap4.class.php';

		$this->Theme.Bootstrap4 = new Theme.Bootstrap4($this->modx);
		//$this->addCss($this->Theme.Bootstrap4->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->Theme.Bootstrap4->config['jsUrl'] . 'mgr/theme.bootstrap4.js');
		$this->addHtml('
		<script type="text/javascript">
			Theme.Bootstrap4.config = ' . $this->modx->toJSON($this->Theme.Bootstrap4->config) . ';
			Theme.Bootstrap4.config.connector_url = "' . $this->Theme.Bootstrap4->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('theme.bootstrap4:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends Theme.Bootstrap4MainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}