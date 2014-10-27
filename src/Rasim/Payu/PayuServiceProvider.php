<?php namespace Rasim\Payu;

use Illuminate\Support\ServiceProvider;

class PayuServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('rasim/payu');

	}

   public function register()
    {
        //register edelim
        $this->app['payu'] = $this->app->share(function($app)
        {
            return new Payu($app->make("Rasim\Payu\Classes\PayuProduct"),
            	$app->make("Rasim\Payu\Classes\PayuAddress"),
            	$app->make("Rasim\Payu\Classes\Payulu"));
        });

    }


	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
