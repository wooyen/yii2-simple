<?php
# REPLACEMENT PLACEHOLDERS:
# SENSITIVE:DB_PASSWORD
# END
return [
	'components' => [
		'db' => [
			'dsn' => 'mysql:host=localhost;dbname=yii2simple',
			'username' => 'root',
			'password' => 'DB_PASSWORD',
		],
		'mailer' => [
			'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',
		],
	],
];
