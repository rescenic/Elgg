<?php

return [
	'actions' => [
		'bookmarks/save' => [],
		'bookmarks/delete' => [],
	],
	'views' => [
		'default' => [
			'bookmarks/' => __DIR__ . '/graphics',
		],
	],
	'widgets' => [
		'bookmarks' => [
			'description' => elgg_echo('bookmarks:widget:description'),
			'context' => ['profile', 'dashboard'],
		],
	],
];
