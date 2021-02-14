<?php

/**
 * Are more elegant way would be to allow for configuring the number of userpoints to be gained per hour of work via a plugin setting
 * but defining it here is the lazy way...
 */
define("USERPOINTS_PER_HOUR", 10);

return [
	'bootstrap' => \UserpointsBalanceBootstrap::class,
	'actions' => [
		'userpoints_balance/userpoints_balance_reward' => ['access' => 'logged_in'],
	],
	'routes' => [
		'userpoints_balance' => [
			'path' => '/userpoints_balance/userpoints_balance',
			'resource' => 'userpoints_balance/userpoints_balance',
			'middleware' => [
				\Elgg\Router\Middleware\Gatekeeper::class,
			],
			'required_plugins' => [
				'elggx_userpoints',
			],
		],
	],
];
