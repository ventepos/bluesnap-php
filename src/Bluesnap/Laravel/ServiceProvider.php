<?php

namespace Bluesnap\Laravel;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Bluesnap\Bluesnap;

class ServiceProvider extends BaseServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom($this->configPath(), 'bluesnap');
	}

	public function boot()
	{
		$this->publishes([$this->configPath() => config_path('bluesnap.php')], 'config');

		$config = $this->app->config->get('bluesnap');

		Bluesnap::init(
			$config['env'],
			$config['api-key'],
			$config['api-token'],
			$config['cse-key']
		);
	}

	protected function configPath()
	{
		return __DIR__ . '/../../../config/bluesnap.php';
	}

}
