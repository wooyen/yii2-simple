<?php
return [
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm'   => '@vendor/npm-asset',
	],
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
			'charset' => 'utf8',
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];
