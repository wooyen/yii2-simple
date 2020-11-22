<?php
# REPLACEMENT PLACEHOLDERS:
# RANDOM:FRONTEND_COOKIE_KEY32
# END

return [
	'bootstrap' => ['debug'],
	'components' => [
		'request' => [
			'cookieValidationKey' => 'FRONTEND_COOKIE_KEY32',
		],
		'modules' => [
			'debug' => [
				'class' => 'yii\debug\Module',
			],
		],
	],
];
