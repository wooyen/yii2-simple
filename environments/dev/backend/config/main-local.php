<?php
# REPLACEMENT PLACEHOLDERS:
# RANDOM:BACKEND_COOKIE_KEY32
# END
return [
	'components' => [
		'request' => [
			'cookieValidationKey' => 'BACKEND_COOKIE_KEY32',
		],
		'bootstrap' => [
			'debug'
		],
		'modules' => [
			'debug' => [
				'class' => 'yii\debug\Module',
			],
		],
	],
];
