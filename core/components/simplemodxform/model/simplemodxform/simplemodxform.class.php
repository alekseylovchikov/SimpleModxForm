<?php

/**
 * The base class for SimpleModxForm.
 */
class SimpleModxForm {
	/* @var modX $modx */
	public $modx;


	/**
	 * @param modX $modx
	 * @param array $config
	 */
	function __construct(modX &$modx, array $config = array()) {
		$this->modx =& $modx;

		$corePath = $this->modx->getOption('simplemodxform_core_path', $config, $this->modx->getOption('core_path') . 'components/simplemodxform/');
		$assetsUrl = $this->modx->getOption('simplemodxform_assets_url', $config, $this->modx->getOption('assets_url') . 'components/simplemodxform/');
		$connectorUrl = $assetsUrl . 'connector.php';

		$this->config = array_merge(array(
			'assetsUrl' => $assetsUrl,
			'cssUrl' => $assetsUrl . 'css/',
			'jsUrl' => $assetsUrl . 'js/',
			'imagesUrl' => $assetsUrl . 'images/',
			'connectorUrl' => $connectorUrl,

			'corePath' => $corePath,
			'modelPath' => $corePath . 'model/',
			'chunksPath' => $corePath . 'elements/chunks/',
			'templatesPath' => $corePath . 'elements/templates/',
			'chunkSuffix' => '.chunk.tpl',
			'snippetsPath' => $corePath . 'elements/snippets/',
			'processorsPath' => $corePath . 'processors/'
		), $config);

		$this->modx->addPackage('simplemodxform', $this->config['modelPath']);
		$this->modx->lexicon->load('simplemodxform:default');
	}

}