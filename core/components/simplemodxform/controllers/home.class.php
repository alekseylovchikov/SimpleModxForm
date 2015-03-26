<?php

/**
 * The home manager controller for SimpleModxForm.
 *
 */
class SimpleModxFormHomeManagerController extends SimpleModxFormMainController {
	/* @var SimpleModxForm $SimpleModxForm */
	public $SimpleModxForm;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('simplemodxform');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->SimpleModxForm->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->SimpleModxForm->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->SimpleModxForm->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->SimpleModxForm->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->SimpleModxForm->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->SimpleModxForm->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->SimpleModxForm->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "simplemodxform-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->SimpleModxForm->config['templatesPath'] . 'home.tpl';
	}
}