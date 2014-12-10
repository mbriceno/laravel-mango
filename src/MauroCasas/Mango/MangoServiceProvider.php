<?php namespace MauroCasas\Mango {

	use Illuminate\Support\ServiceProvider;
	use GuzzleHttp;

    /**
     * @package Mango
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */

	class MangoServiceProvider extends ServiceProvider {

		/**
		 * Indicates if loading of the provider is deferred.
		 *
		 * @var bool
		 */
		protected $defer = false;

		public function boot(){
			$this->package('maurocasas/mango');
		}

		/**
		 * Register the service provider.
		 *
		 * @return void
		 */
		public function register()
		{
			$this->app['mango'] = $this->app->share(function($app){
				return new Mango(
					$app['config']->get('mango::config'), 
					new GuzzleHttp\Client(array(
						'base_url' => $app['config']->get('mango::config')['endpoint'],
						'defaults' => array(
							'headers' => array(
								'Content-Type' => 'application/json',
								'Accept' => 'application/json',
								//'Authorization' => 'Basic ' . base64_encode($app['config']->get('mango::config')['secret'])
								),
							'auth' => array(
								$app['config']->get('mango::config')['secret'],
								$app['config']->get('mango::config')['secret'],
								)
							)
						)));
			});

			$this->app->bind('MauroCasas\Mango\Mango', function($app){
				return $app['mango'];
			});

			$this->app->booting(function(){
				$loader = \Illuminate\Foundation\AliasLoader::getInstance();
				$loader->alias('Mango', 'MauroCasas\Mango\Facades\Mango');
			});
		}

		/**
		 * Get the services provided by the provider.
		 *
		 * @return array
		 */
		public function provides()
		{
			return array('mango');
		}

	}

}