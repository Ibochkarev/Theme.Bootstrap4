<?php

/**
 * Remove an Items
 */
class Theme.Bootstrap4ItemRemoveProcessor extends modObjectProcessor {
	public $objectType = 'Theme.Bootstrap4Item';
	public $classKey = 'Theme.Bootstrap4Item';
	public $languageTopics = array('theme.bootstrap4');
	//public $permission = 'remove';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('theme.bootstrap4_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var Theme.Bootstrap4Item $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('theme.bootstrap4_item_err_nf'));
			}

			$object->remove();
		}

		return $this->success();
	}

}

return 'Theme.Bootstrap4ItemRemoveProcessor';