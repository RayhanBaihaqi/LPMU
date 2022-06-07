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
		'filterLpmu' => \App\Filters\FilterLpmu::class,
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
			'filterLpmu' => [
				'except' => ['/', 'auth/*', 'frontend/*']
			],
			// 'authFilter' => ['except' => ['/', 'auth/*', 'frontend/*']],
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			'filterAdmin' => [
				'except' => ['admin/*', 'admin', 'auth/*','tahunAkademik', 'tahunAkademik/*','paguRkat', 'paguRkat/*','pdf', 'pdf/*']
			],
			'filterProdi' => [
				'except' => ['backend/*', 'backend', 'kpi', 'kpi/*', 'rkat/*','capaianRkat', 'capaianRkat/*','pdf', 'pdf/*']
			],
			'filterUnit' => [
				'except' => ['backend/*', 'backend', 'kpi', 'kpi/*', 'rkat/*','capaianRkat', 'capaianRkat/*','pdf', 'pdf/*']
			],
			'filterRektorat' => [
				'except' => ['rektorat', 'rektorat/*','pdf', 'pdf/*']
			],
			'filterBpsdm' => [
				'except' => ['bpsdm', 'bpsdm/*','pdf', 'pdf/*']
			],
			'filterKeuangan' => [
				'except' => ['keuangan', 'keuangan/*','capaianRkat', 'capaianRkat/*','pdf', 'pdf/*','rkat/*']
			],
			'filterLpmu' => [
				'except' => ['Lpmu', 'Lpmu/*','capaianRkat', 'capaianRkat/*','pdf', 'pdf/*']
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
