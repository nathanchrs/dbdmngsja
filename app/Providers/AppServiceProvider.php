<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Validation;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//

		//Extends validator for international dates (uses Jenssegers\laravel-date)
		\Validator::extend('intldate', function($attribute, $value){
			try {
				\Date::setLocale(\Config::get('app.locale'));
				$temp = \Date::parse($value);
				return $temp->getLastErrors()['warning_count'] == 0;
			} catch(\Exception $ex){
				return false;
			}
		});


	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
