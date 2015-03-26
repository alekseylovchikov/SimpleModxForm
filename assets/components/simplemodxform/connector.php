<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var SimpleModxForm $SimpleModxForm */
$SimpleModxForm = $modx->getService('simplemodxform', 'SimpleModxForm', $modx->getOption('simplemodxform_core_path', null, $modx->getOption('core_path') . 'components/simplemodxform/') . 'model/simplemodxform/');
$modx->lexicon->load('simplemodxform:default');

// handle request
$corePath = $modx->getOption('simplemodxform_core_path', null, $modx->getOption('core_path') . 'components/simplemodxform/');
$path = $modx->getOption('processorsPath', $SimpleModxForm->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));