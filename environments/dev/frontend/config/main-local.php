<?php
# REPLACEMENT PLACEHOLDERS:
# RANDOM:FRONTEND_COOKIE_KEY32
# END

return [
	'components' => [
		'request' => [
			'cookieValidationKey' => 'FRONTEND_COOKIE_KEY32',
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
