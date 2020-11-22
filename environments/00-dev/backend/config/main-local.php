<?php
# REPLACEMENT PLACEHOLDERS:
# RANDOM:BACKEND_COOKIE_KEY32
# END
return [
	'bootstrap' => ['debug'],
	'components' => [
		'request' => [
			'cookieValidationKey' => 'BACKEND_COOKIE_KEY32',
		],
	],
	'modules' => [
		'debug' => [
			'class' => 'yii\debug\Module',
		],
	],
];
