<?php
# REPLACEMENT PLACEHOLDERS:
# SENSITIVE:DB_PASSWORD
# END
return [
	'components' => [
		'db' => [
			'dsn' => 'mysql:host=localhost;dbname=yii2simple_dev',
			'username' => 'yii2',
			'password' => 'DB_PASSWORD',
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',
			// send all mails to a file by default. You have to set
			// 'useFileTransport' to false and configure a transport
			// for the mailer to send real emails.
			'useFileTransport' => true,
		],
		'bootstrap' => [
			'gii',
		],
		'modules' => [
			'gii' => [
				'class' => 'yii\gii\Module',
			],
		],
	],
];
