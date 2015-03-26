<?php

/**
 * Create an Item
 */
class SimpleModxFormItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'SimpleModxFormItem';
	public $classKey = 'SimpleModxFormItem';
	public $languageTopics = array('simplemodxform');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('simplemodxform_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('simplemodxform_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'SimpleModxFormItemCreateProcessor';