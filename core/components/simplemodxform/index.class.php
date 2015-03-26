<?php

/**
 * Class SimpleModxFormMainController
 */
abstract class SimpleModxFormMainController extends modExtraManagerController {
	/** @var SimpleModxForm $SimpleModxForm */
	public $SimpleModxForm;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('simplemodxform_core_path', null, $this->modx->getOption('core_path') . 'components/simplemodxform/');
		require_once $corePath . 'model/simplemodxform/simplemodxform.class.php';

		$this->SimpleModxForm = new SimpleModxForm($this->modx);
		$this->addCss($this->SimpleModxForm->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->SimpleModxForm->config['jsUrl'] . 'mgr/simplemodxform.js');
		$this->addHtml('
		<script type="text/javascript">
			SimpleModxForm.config = ' . $this->modx->toJSON($this->SimpleModxForm->config) . ';
			SimpleModxForm.config.connector_url = "' . $this->SimpleModxForm->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('simplemodxform:default');
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
class IndexManagerController extends SimpleModxFormMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}