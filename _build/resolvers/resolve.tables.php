<?php

if ($object->xpdo) {
	/** @var modX $modx */
	$modx =& $object->xpdo;

	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
			$modelPath = $modx->getOption('simplemodxform_core_path', null, $modx->getOption('core_path') . 'components/simplemodxform/') . 'model/';
			$modx->addPackage('simplemodxform', $modelPath);

			$manager = $modx->getManager();
			$objects = array(
				'SimpleModxFormItem',
			);
			foreach ($objects as $tmp) {
				$manager->createObjectContainer($tmp);
			}
			break;

		case xPDOTransport::ACTION_UPGRADE:
			break;

		case xPDOTransport::ACTION_UNINSTALL:
			break;
	}
}
return true;
