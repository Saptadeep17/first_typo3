<?php
return array(
	'BE' => array(
		'debug' => FALSE,
		'explicitADmode' => 'explicitAllow',
		'installToolPassword' => '$P$CcZhxZ1mqLBiA2Ej93tUqT/rx.GMuA1',
		'loginSecurityLevel' => 'rsa',
	),
	'DB' => array(
		'database' => 'tp3',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => '127.0.0.1',
		'password' => '',
		'port' => 3306,
		'username' => 'root',
	),
	'EXT' => array(
		'extConf' => array(
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
		),
	),
	'EXTCONF' => array(
		'lang' => array(
			'availableLanguages' => array(),
		),
	),
	'FE' => array(
		'activateContentAdapter' => FALSE,
		'debug' => FALSE,
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'jpg_quality' => '80',
	),
	'SYS' => array(
		'caching' => array(
			'cacheConfigurations' => array(
				'extbase_object' => array(
					'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
					'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
					'groups' => array(
						'system',
					),
					'options' => array(
						'defaultLifetime' => 0,
					),
				),
			),
		),
		'clearCacheSystem' => FALSE,
		'compat_version' => '6.2',
		'devIPmask' => '',
		'displayErrors' => 0,
		'enableDeprecationLog' => FALSE,
		'encryptionKey' => '013eba21c2e7c0517c929bf25359c53858d4d989bbe036f19a6e4a2a5201a4895e322f34dd8ddd051fef72267a8cc3cf',
		'isInitialInstallationInProgress' => FALSE,
		'sitename' => 'Saptadeep\'s First Typo3',
		'sqlDebug' => 0,
		'systemLogLevel' => 2,
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>