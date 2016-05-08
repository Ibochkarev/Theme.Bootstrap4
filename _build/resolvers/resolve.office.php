<?php
/** @var modX $modx */
/** @var Office $office */
if ($Office = $modx->getService('office', 'Office', MODX_CORE_PATH . 'components/office/model/office/')) {

	if (!($Office instanceof Office)) {
		$modx->log(xPDO::LOG_LEVEL_ERROR, '[Theme.Bootstrap4] Could not register paths for Office component!');

		return true;
	}
	elseif (!method_exists($Office, 'addExtension')) {
		$modx->log(xPDO::LOG_LEVEL_ERROR, '[Theme.Bootstrap4] You need to update Office for support of 3rd party packages!');

		return true;
	}

	/**@var array $options */
	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
		case xPDOTransport::ACTION_UPGRADE:
			$Office->addExtension('Theme.Bootstrap4', '[[++core_path]]components/theme.bootstrap4/controllers/office/');
			$modx->log(xPDO::LOG_LEVEL_INFO, '[Theme.Bootstrap4] Successfully registered Theme.Bootstrap4 as Office extension!');
			break;

		case xPDOTransport::ACTION_UNINSTALL:
			$Office->removeExtension('Theme.Bootstrap4');
			$modx->log(xPDO::LOG_LEVEL_INFO, '[Theme.Bootstrap4] Successfully unregistered Theme.Bootstrap4 as Office extension.');
			break;
	}
}
else {
	$modx->log(xPDO::LOG_LEVEL_ERROR, '[Theme.Bootstrap4] Could not register paths for Office component!');
}

return true;