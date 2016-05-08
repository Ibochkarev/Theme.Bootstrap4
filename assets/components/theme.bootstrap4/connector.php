<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var Theme.Bootstrap4 $Theme.Bootstrap4 */
$Theme.Bootstrap4 = $modx->getService('theme.bootstrap4', 'Theme.Bootstrap4', $modx->getOption('theme.bootstrap4_core_path', null, $modx->getOption('core_path') . 'components/theme.bootstrap4/') . 'model/theme.bootstrap4/');
$modx->lexicon->load('theme.bootstrap4:default');

// handle request
$corePath = $modx->getOption('theme.bootstrap4_core_path', null, $modx->getOption('core_path') . 'components/theme.bootstrap4/');
$path = $modx->getOption('processorsPath', $Theme.Bootstrap4->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));
