<?php

/**
 * Create an Item
 */
class Theme.Bootstrap4OfficeItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'Theme.Bootstrap4Item';
	public $classKey = 'Theme.Bootstrap4Item';
	public $languageTopics = array('theme.bootstrap4');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('theme.bootstrap4_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('theme.bootstrap4_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'Theme.Bootstrap4OfficeItemCreateProcessor';