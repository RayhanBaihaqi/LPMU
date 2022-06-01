<?php

namespace Config;

use App\Filters\AuthFilter;
use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		//'authFilter' => \App\Filters\AuthFilter::class,
		'filterAdmin' => \App\Filters\FilterAdmin::class,
		'filterProdi' => \App\Filters\FilterProdi::class,
		'filterUnit' => \App\Filters\FilterUnit::class,
		'filterRektorat' => \App\Filters\FilterRektorat::class,
		'filterBpsdm' => \App\Filters\FilterBpsdm::class,
		'filterKeuangan' => \App\Filters\FilterKeuangan::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			'filterAdmin' => [
				'except' => ['/', 'auth/*', 'frontend/*']
			],
			'filterProdi' => [
				'except' => ['/', 'auth/*', 'frontend/*']
			],
			'filterUnit' => [
				'except' => ['/', 'auth/*', 'frontend/*']
			],
			'filterRektorat' => [
				'except' => ['/', 'auth/*', 'frontend/*']
			],
			'filterBpsdm' => [
				'except' => ['/', 'auth/*', 'frontend/*']
			],
			'filterKeuangan' => [
				'except' => ['/', 'auth/*', 'frontend/*']
			],
			// 'authFilter' => ['except' => ['/', 'auth/*', 'frontend/*']],
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			'filterAdmin' => [
				'except' => ['admin/*', 'admin', 'auth/*']
			],
			'filterProdi' => [
				'except' => ['backend/*', 'backend', 'kpi', 'kpi/*', 'rkat/*']
			],
			'filterUnit' => [
				'except' => ['backend/*', 'backend', 'kpi', 'kpi/*', 'rkat/*']
			],
			'filterRektorat' => [
				'except' => ['rektorat', 'rektorat/*']
			],
			'filterBpsdm' => [
				'except' => ['bpsdm', 'bpsdm/*']
			],
			'filterKeuangan' => [
				'except' => ['keuangan', 'keuangan/*']
			],
			// 'authFilter' => ['except' => ['/backend', '/backend/*']],
			'toolbar',
			// 'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [];
}
