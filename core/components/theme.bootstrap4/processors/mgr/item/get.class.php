<?php

/**
 * Get an Item
 */
class Theme.Bootstrap4ItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'Theme.Bootstrap4Item';
	public $classKey = 'Theme.Bootstrap4Item';
	public $languageTopics = array('theme.bootstrap4:default');
	//public $permission = 'view';


	/**
	 * We doing special check of permission
	 * because of our objects is not an instances of modAccessibleObject
	 *
	 * @return mixed
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		return parent::process();
	}

}

return 'Theme.Bootstrap4ItemGetProcessor';